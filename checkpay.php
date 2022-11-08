<?php
      include('sesction.php');
   ?>     
 <?php
$coin = $objConnect->query("SELECT * FROM coin WHERE c_username = '$_POST[username]'");
$coin_data = mysqli_fetch_array($coin, MYSQLI_BOTH);
$amount = $coin_data['c_amount'] + $_POST['price'];

$sql_update="UPDATE coin
              SET c_amount='$amount' 
              WHERE c_username = '$_POST[username]'";
$result= mysqli_query($objConnect, $sql_update);

$sql_img="UPDATE images
              SET status ='0'
              WHERE username = '$_POST[username]'";
$result_img = mysqli_query($objConnect, $sql_img);

if(!$result) {
  function myAlert($msg, $url){
      echo '<script language="javascript">alert("'.$msg.'");</script>';
      echo "<script>document.location = '$url'</script>";
  }
  myAlert("ล้มเหลวทำกรุณาทำการกรอกข้อมูลใหม่", "Error.php");
  echo "CANT";
} else {
  function myAlert($msg, $url){
      echo '<script language="javascript">alert("'.$msg.'");</script>';
      echo "<script>document.location = '$url'</script>";
  }
  myAlert("การเติมเงินสำเร็จ", "admin_coin.php");
  echo "SUCCESS";
}
?>