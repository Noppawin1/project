<html>
    <head>
        <meta charset="UTF-8">
        <title>Register Form</title>
        <link rel="stylesheet" href="css/styles-Register.css">
    </head>
    <body>
        <div class="frame" style="margin-top: 20%">
        <?php
        $objConnect=mysqli_connect("localhost","root","") or die("can't connect to database");
        mysqli_select_db($objConnect,"dbex");
        mysqli_query($objConnect ,"SET NAMES utf8");

        $sql_insert ="INSERT INTO user(username, _name, tel, email, passw) 
                        VALUES ('$_GET[username]','$_GET[_name]','$_GET[tel]','$_GET[email]','$_GET[passw]')";

        $result = mysqli_query($objConnect, $sql_insert);

        $sql_coin ="INSERT INTO coin(c_username) 
                        VALUES ('$_GET[username]')";

        $coin = mysqli_query($objConnect, $sql_coin);


        if(!$result) {
            function myAlert($msg, $url){
                echo '<script language="javascript">alert("'.$msg.'");</script>';
                echo "<script>document.location = '$url'</script>";
            }
            myAlert("ชื่อ User ซ้ำกรุณาทำการกรอกข้อมูลใหม่", "register.html");
        } else {
            function myAlert($msg, $url){
                echo '<script language="javascript">alert("'.$msg.'");</script>';
                echo "<script>document.location = '$url'</script>";
            }
            myAlert("สมัครสมาชิกสำเร็จ", "index.php");
        }
        ?>
        <a class="buttonConfirm" href='index.php'>กลับหน้าเข้าสู่ระบบ</a>
        </div>
    </body>
</html>