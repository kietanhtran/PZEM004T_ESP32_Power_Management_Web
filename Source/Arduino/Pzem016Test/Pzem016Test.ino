#include "ModbusMaster.h"
#include <HardwareSerial.h>
#include <Wire.h>
#include "LiquidCrystal_I2C.h"
#include "TU_TAO.h"
#include <WiFi.h>
const char* ssid     = "AndroidAP_5538";
const char* password = "thaodethuong";
const char* host = "giamsatdiennangute.tk";
int station = 1;
char* trangthai = "";
char* test = "test";
bool test_energy = false;
bool flag_button_error = false;
bool flag_button_fix = false;
bool flag_run = false;
uint8_t result;
uint8_t oldResult = 0;
HardwareSerial  Pzemserial(1);
int tt = 0, a = 0;
const int led1 = 5;
const int led2 = 18;
const int led3 = 19;
int testt = 0;
LiquidCrystal_I2C lcd(0x27, 20, 4);
ModbusMaster node;
static uint8_t pzemSlaveAddr = 0x02;
float voltage, current, power, energy;
float voltage2, current2, power2, energy2;
unsigned long prev, interval = 300;
unsigned long prev1 = 0;
void setup() {
	Pzemserial.begin(9600, SERIAL_8N1, 26, 25);
	Serial.begin(9600);
	node.begin(pzemSlaveAddr, Pzemserial); 
	pinMode(led1, OUTPUT);
	digitalWrite(led1, HIGH);
	pinMode(led2, OUTPUT);
	digitalWrite(led2, LOW);
	pinMode(led3, OUTPUT);
	digitalWrite(led3, LOW);
	lcd.begin();
  lcd.clear();
	lcd.setCursor(2,1);
  lcd.print("POWER MANAGEMENT");
  lcd.setCursor(0,3);
  lcd.print("Connecting to WIFI..");
	lcd.createChar(1, LT);
	lcd.createChar(2, UB);
	lcd.createChar(3, RT);
	lcd.createChar(4, LL);
	lcd.createChar(5, LB);
	lcd.createChar(6, LR);
	lcd.createChar(7, MB);
	lcd.createChar(8, BLOCK);
	resetEnergy(0x01);									
  WiFi.mode(WIFI_STA);
  WiFi.begin(ssid, password);
  while (WiFi.status() != WL_CONNECTED) {
      testt++;
      delay(500);
      if(testt == 20){
        lcd.setCursor(0,3);
        lcd.print("                    ");
        lcd.setCursor(0,3);
        lcd.print("Please check router");
      }
	}
  lcd.setCursor(0,3);
  lcd.print("                     ");
  lcd.setCursor(2,3);
  lcd.print("Connected to WIFI");
  delay(1000);
 
	Serial.println("");
	Serial.println("WiFi connected");
	Serial.println("IP address: ");
	Serial.println(WiFi.localIP());
  lcd.clear();
}

void loop() {
	unsigned long now = millis();
	ReadModbus2();
   if(flag_button_error == false){
    lcd.setCursor(2,1);
          lcd.print("                    ");
    lcd.setCursor(0, 0);
    lcd.print("STATION");
    custom2(2, 1);
	  Display2();
	 }
    WiFiClient client;
    const int httpPort = 80;
    if (!client.connect(host, httpPort)) {
      return;
    }
    char buffer[1000];
	if (current == 0 && flag_button_error == false ) {
		lcd.setCursor(2, 3);
		lcd.print("STOP");
		digitalWrite(led2, LOW);
		trangthai = "Ngung";
	}
	else 
		if(current != 0 && flag_button_error == false) {
			digitalWrite(led2, HIGH);
       flag_run = true;
       if(flag_run == true){
          lcd.setCursor(0, 3);
          lcd.print("       ");
          lcd.setCursor(2, 3);
          lcd.print("RUN");
          flag_run = false;
        }
			if(current < 0.06 && flag_button_error == false){
				
				trangthai = "Khong_tai";
			}
			else 
				if ( current > 0.06 && flag_button_error == false) {
					trangthai = "Co_tai";
				}
		}
    sprintf(buffer, "%s&station=%d&status=%s&voltage=%01f&current=%03f&power=%01f&energy=%01f","/test1.php?",station,trangthai,voltage,current,power,energy);
    if(trangthai != test) {
		test = trangthai;
		client.print(String("GET ") + buffer + " HTTP/1.1\r\n" +
					"Host: " + host + "\r\n" +
					"Connection: close\r\n\r\n");
	}
	if(now-prev>=interval){
		if (digitalRead(1) == LOW) {
			flag_button_error = true;
			flag_button_fix = false;
//			lcd.setCursor(1, 3);
//			lcd.print("ERROR");
//			lcd.setCursor(12, 0);
//			lcd.print("      ");
//			lcd.setCursor(12, 1);
//			lcd.print("      ");
//			lcd.setCursor(12, 2);
//			lcd.print("      ");
//			lcd.setCursor(12, 3);
//			lcd.print("      "); 

			digitalWrite(led3, HIGH);
			digitalWrite(led2, LOW);
			trangthai = "May_loi";
      if(flag_button_error == true)
      {
          
          lcd.clear();
          lcd.setCursor(2,1);
          lcd.print("POWER MANAGEMENT");
          lcd.setCursor(8, 3);
          lcd.print("ERROR");
      }
		}
		if (digitalRead(3) == LOW) {   
			flag_button_fix = true; 
			lcd.setCursor(0, 3);
			lcd.print("        ");
			digitalWrite(led3, LOW);
			flag_button_error = false;
		}
		prev=now;
	} 
}
void Display2()
{
  lcd.setCursor(8, 0);
  lcd.print("U = ");
  lcd.print(voltage, 1);
  lcd.setCursor(19, 0);
  lcd.print("V");
  lcd.setCursor(8, 1);
  lcd.print("I = ");
  lcd.print(current, 3);
  lcd.setCursor(19, 1);
  lcd.print("A");
  lcd.setCursor(8, 2);
  lcd.print("P = ");
  lcd.print(power, 1);
  lcd.setCursor(19, 2);
  lcd.print("W");
  lcd.setCursor(8, 3);
  lcd.print("A = ");
  lcd.print(energy, 0);
  lcd.setCursor(18, 3);
  lcd.print("Wh");
}

void ReadModbus2() {
	node.slaveid(1);         
	result = node.readInputRegisters(0x0000, 9);
	if (result == node.ku8MBSuccess && flag_button_error == false)
	{
		uint32_t tempdouble = 0x00000000;
		voltage = node.getResponseBuffer(0x0000) / 10.0;
		tempdouble =  (node.getResponseBuffer(0x0002) << 16) + node.getResponseBuffer(0x0001);
		current = tempdouble / 1000.00;
		tempdouble =  (node.getResponseBuffer(0x0004) << 16) + node.getResponseBuffer(0x0003);
		power = tempdouble / 10.0;
		tempdouble =  (node.getResponseBuffer(0x0006) << 16) + node.getResponseBuffer(0x0005);
		energy = tempdouble;
	}
	else
	{
//		voltage = 0;
//		current = 0;
//		power = 0;
//		if (result != oldResult) {
//			oldResult = result;
//			lcd.clear();
//			voltage = 0;
//			current = 0;
//			power = 0;
//
//		}
	}
	delay(500);
}

void resetEnergy(uint8_t slaveAddr)    //Reset the slave's energy counter
{
	uint16_t u16CRC = 0xFFFF;
	static uint8_t resetCommand = 0x42;
	u16CRC = crc16_update(u16CRC, slaveAddr);
	u16CRC = crc16_update(u16CRC, resetCommand);
	Serial.println("Resetting Energy");
	Pzemserial.write(slaveAddr);
	Pzemserial.write(resetCommand);
	Pzemserial.write(lowByte(u16CRC));
	Pzemserial.write(highByte(u16CRC));
	delay(100);
	while (Pzemserial.available()) {         // Prints the response from the Pzem, do something with it if you like
		Serial.print(char(Pzemserial.read()), HEX);
		Serial.print(" ");
	}
}

void custom0(int x, int y) {
  lcd.setCursor(x, y);
  lcd.write(1);
  lcd.write(2);
  lcd.write(3);
  lcd.setCursor(x, y + 1);
  lcd.write(4);
  lcd.write(5);
  lcd.write(6);
}

void custom1(int x, int y) {
  lcd.setCursor(x, y);
  lcd.write(2);
  lcd.write(3);
  lcd.print(" ");
  lcd.setCursor(x, y + 1);
  lcd.write(5);
  lcd.write(8);
  lcd.write(5);
}

void custom2(int x, int y) {
  lcd.setCursor(x, y);
  lcd.write(7);
  lcd.write(7);
  lcd.write(3);
  lcd.setCursor(x, y + 1);
  lcd.write(4);
  lcd.write(5);
  lcd.write(5);
}

void custom3(int x, int y) {
  lcd.setCursor(x, y);
  lcd.write(7);
  lcd.write(7);
  lcd.write(3);
  lcd.setCursor(x, y + 1);
  lcd.write(5);
  lcd.write(5);
  lcd.write(6);
}

void custom4(int x, int y) {
  lcd.setCursor(x, y);
  lcd.write(4);
  lcd.write(5);
  lcd.write(8);
  lcd.setCursor(x, y + 1);
  lcd.print(" ");
  lcd.print(" ");
  lcd.write(8);
}

void custom5(int x, int y) {
  lcd.setCursor(x, y);
  lcd.write(4);
  lcd.write(7);
  lcd.write(7);
  lcd.setCursor(x, y + 1);
  lcd.write(5);
  lcd.write(5);
  lcd.write(6);
}

void custom6(int x, int y) {
  lcd.setCursor(x, y);
  lcd.write(1);
  lcd.write(7);
  lcd.write(7);
  lcd.setCursor(x, y + 1);
  lcd.write(4);
  lcd.write(5);
  lcd.write(6);
}

void custom7(int x, int y) {
  lcd.setCursor(x, y);
  lcd.write(2);
  lcd.write(2);
  lcd.write(3);
  lcd.setCursor(x, y + 1);
  lcd.print(" ");
  lcd.print(" ");
  lcd.write(8);
}

void custom8(int x, int y) {
  lcd.setCursor(x, y);
  lcd.write(1);
  lcd.write(7);
  lcd.write(3);
  lcd.setCursor(x, y + 1);
  lcd.write(4);
  lcd.write(5);
  lcd.write(6);
}

void custom9(int x, int y) {
  lcd.setCursor(x, y);
  lcd.write(1);
  lcd.write(7);
  lcd.write(3);
  lcd.setCursor(x, y + 1);
  lcd.write(5);
  lcd.write(5);
  lcd.write(6);

}
void printDigits(int digits, int x, int y) {
  switch (digits) {
    case 0:
      custom0(x, y);
      break;
    case 1:
      custom1(x, y);
      break;
    case 2:
      custom2(x, y);
      break;
    case 3:
      custom3(x, y);
      break;
    case 4:
      custom4(x, y);
      break;
    case 5:
      custom5(x, y);
      break;
    case 6:
      custom6(x, y);
      break;
    case 7:
      custom7(x, y);
      break;
    case 8:
      custom8(x, y);
      break;
    case 9:
      custom9(x, y);
      break;
  }
}
