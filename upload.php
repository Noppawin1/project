<?php
// Include the database configuration file
include 'dbConfig.php';
$statusMsg = '';

// File upload path
$targetDir = "uploads/";

$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . uniqid(). $fileName;

$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);



if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $db->query("INSERT into images (file_name,username,name,price, uploaded_on) VALUES ('".$fileName."','$_POST[username]','$_POST[name]','$_POST[price]', NOW())");
           
            if($insert){
                function myAlert($msg, $url){
                    echo '<script language="javascript">alert("'.$msg.'");</script>';
                    echo "<script>document.location = '$url'</script>";
                }
                myAlert("เติมเงินสำเร็จระบบกำลังดำเนินการเติมเงิน", "index.php");
            }else{
                function myAlert($msg, $url){
                    echo '<script language="javascript">alert("'.$msg.'");</script>';
                    echo "<script>document.location = '$url'</script>";
                }
                myAlert("อัพโหลดล้มเหลวกรุณาทำการอัพโหลดใหม่", "pay.php");
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'กรุณาเลือกไฟล์ที่จะอัพโหลด';
}

// Display status message
echo $statusMsg;
?>

