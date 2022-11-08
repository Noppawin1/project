<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name = "viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
        
    </head>
    
    <div class="frame" style="margin-top: 20%">
    <?php
      include('sesction.php');
    ?>
    <?php
    echo $_POST['chapter'];
     
    $coin = mysqli_query($objConnect, "SELECT * FROM coin WHERE c_id = '$_POST[user_id]'");
    $coin_data = mysqli_fetch_array($coin, MYSQLI_BOTH);

    $user = mysqli_query($objConnect, "SELECT * FROM user WHERE user_id = '$coin_data[c_id]'");
    $user_data = mysqli_fetch_array($user, MYSQLI_BOTH);

     $chapter_qry = mysqli_query($objConnect, "SELECT * FROM nanomashin WHERE chapter = '$_POST[chapter]'");
     $chapter_arr = mysqli_fetch_array($chapter_qry, MYSQLI_BOTH);

     if($coin_data['c_amount'] < $_POST['price']){
      $message = "ยอดเหรียญของคุณไม่เพียงพอ กรุณาเติมเงิน!";
            
      function myAlert($msg, $url){
        echo '<script language="javascript">alert("'.$msg.'");</script>';
        echo "<script>document.location = '$url'</script>";
    }
    myAlert($message, "index.php");
     } else {
      $message = "ซื้อตอนสำเร้จ";
            
    $sql_update="UPDATE nanomashin 
      SET name = '$user_data[username]'  WHERE chapter = '$_POST[chapter]' ";
    $result= mysqli_query($objConnect, $sql_update);

    $new_values = $coin_data['c_amount'] - $_POST['price'];
    $sql_update="UPDATE coin
      SET c_amount = '$new_values'  WHERE c_id = '$_POST[user_id]'";
    $result= mysqli_query($objConnect, $sql_update);

    function myAlert($msg, $url){
      echo '<script language="javascript">alert("'.$msg.'");</script>';
      echo "<script>document.location = '$url'</script>";

    }
    myAlert($message, "index.php");
    }
    ?>