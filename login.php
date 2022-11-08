<html>
    <head>
        <meta charset="UTF-8">
        <title>Users Login</title>
        <link rel="stylesheet" href="css/styles-LoginUsers.css">
        
    </head>

    <div class="frame" style="margin-top: 20%">
        <?php
        session_start();
        $objConnect = mysqli_connect("localhost","root","")or die("Can't connect to database");
        $db = mysqli_select_db($objConnect, "dbex");
        mysqli_query($objConnect, "SET NAMES utf8");

        if($objConnect->connect_error) {
            die("Connection failed". $conn->connect_error);
        }

        $username = mysqli_real_escape_string($objConnect, $_POST['username']);
        $password = mysqli_real_escape_string($objConnect, $_POST['password']);

        $strSQL = "SELECT * FROM user WHERE username = '$username' and passw = '$password'";
        $objQuery = mysqli_query($objConnect, $strSQL);
        $objResult = mysqli_fetch_array($objQuery);

        if(!$objResult) {
            $message = "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง!";
            
            function myAlert($msg, $url){
                echo '<script language="javascript">alert("'.$msg.'");</script>';
                echo "<script>document.location = '$url'</script>";
            }
            myAlert($message, "index.php");

        } else {

            $_SESSION["status"] = $objResult["status"];
            if( $_SESSION["status"]== "a"){
                $_SESSION["username"] = $objResult["username"];
                header("location: admin.php");
            }
            if( $_SESSION["status"]== "b"){
                $_SESSION["username"] = $objResult["username"];
                header("location: index.php");
            }

        
            session_write_close();
        }
        ?>
        
        
    </div>
</html>