
<?php
      include('sesction.php');
   ?>     
 <?php
   $strSQL = "SELECT * FROM user WHERE username = '".$_SESSION['username']."' ";
   $objQuery = mysqli_query($objConnect, $strSQL);
    $objResult = mysqli_fetch_array($objQuery);

$sql_update="UPDATE user
SET username='$_GET[username]',
    _name='$_GET[_name]',
    tel='$_GET[tel]',
    email='$_GET[email]',
    passw='$_GET[passw]' WHERE user_id =  '$objResult[user_id] '" ;
    

$result= mysqli_query($objConnect, $sql_update);

if(!$result) {
  function myAlert($msg, $url){
      echo '<script language="javascript">alert("'.$msg.'");</script>';
      echo "<script>document.location = '$url'</script>";
  }
  myAlert("ล้มเหลวทำกรุณาทำการกรอกข้อมูลใหม่", "p_editprofile.php");
} else {
  function myAlert($msg, $url){
      echo '<script language="javascript">alert("'.$msg.'");</script>';
      echo "<script>document.location = '$url'</script>";
  }
  myAlert("การแก้ไขโปรไฟล์ผู้ใช้สำเร็จ", "profile.php");
}
?>
  