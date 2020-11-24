<?php
    if(isset($_POST["btn"]))
    {
        $uname = $_POST['Name'];
        $pass = $_POST['Password'];
        $servername = "localhost";
        $username = "u546640326_tung";
        $password = "123456";
        $dbname = "u546640326_test";
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) 
            {
                die("Connection failed: " . $conn->connect_error);
                echo '<script>
        
                echo("error");
                </script>';
            } 
        $sql = "SELECT * FROM login WHERE name = '".$uname."' and pass = '".$pass."'";
        $result = $conn->query($sql);
        if ($result->num_rows >0) 
        {
            $_SESSION['uname']=$umane;
            //   echo"login thanh cong";
            echo '<script>
            window.location="table.php";
            </script>';
        }
        else
        {
            echo '<script>
                alert("Error login");
            </script>';
        }
    }
?>
