
<?php
      include('sesction.php');
   ?>     
 <?php
 ?>
<!DOCTYPE html>
        <html>
        <head>
        <meta charset="UTF-8">
        <meta name = "viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
<meta name = "viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href ="main.css" >
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css"
  rel="stylesheet"
/>

        <title>
            แก้ไขโปรไฟล์
        </title>
    </head>

    <div >
      
       </div>
          
          <link rel="stylesheet" href ="main.css" >
         

          <style>
            body {
              background-color: rgb(49, 49, 49);
            }
            </style>
    <body >
    <script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"
></script>
      
<nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 2000;">
    <div class="container-fluid">
      <!-- Navbar brand -->
      <a class="navbar-brand nav-link" target="_blank" href="https://mdbootstrap.com/docs/standard/">
        <strong>RMUTT COMIC</strong>
      </a>
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
        aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarExample01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="index.php">หน้าหลัก</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pay.php" rel="nofollow"
              target="_blank">การชำระเงิน</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profile.php" target="_blank">โปรไฟล์</a>
          </li>
        </ul>

        <ul class="navbar-nav list-inline">
         
          <?php if(isset($_SESSION['username'])): ?>
                <?php
                  $susername = $_SESSION['username'];
                  $user_qry = mysqli_query($objConnect, "SELECT * FROM user WHERE username = '$_SESSION[username]'");
                  $user_arr = mysqli_fetch_array($user_qry, MYSQLI_BOTH);
                  
                 $coin_qry = mysqli_query($objConnect, "SELECT * FROM coin WHERE c_id = $user_arr[user_id]");
                 $coin_arr = mysqli_fetch_array($coin_qry, MYSQLI_BOTH);
                 ?>
         <div>
         
          <div class="btn-group">
  <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
  <?php echo $_SESSION['username']; ?>
  </button>
  <ul class="dropdown-menu">
  <li><a class="dropdown-item" href="pay.php">เติมเงิน</a></li>
  <li>
                    <form method="post" action="logout.php">
                      
                      
                      <button type="submit" class="btn btn-link">Logout</button>
                      
                    </form>
                    
                  </li>
  </ul>
</div>
         มีเงิน <img src="coin.png" width="20px"/><?php echo "$coin_arr[c_amount]" ?>
         <?php else: ?>
          <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#ModalForm"> LOGIN </button>
         <?php endif; ?>

            <div class="modal fade" id="ModalForm" tabindex="-1" aria-labelledby="ModalFormLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div style="border-radius: 5px;" class="myform bg-dark">
                            <h1 class="text-center">Login Form</h1>
                            <form name="formLogin"  method="post" action="login.php">
                                <div class="mb-3 mt-4">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="username" class="form-control"  name = "username" id="username" aria-describedby="usernameHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" name = "password"  id="password">
                                </div>
                                <p>Not a member? <a href="register.php">Signup now</a></p>
                                <button type="submit" class="btn btn-light mt-3">LOGIN</button>
                            </form>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
              
            </div>
        </ul>
      </div>
    </div>
  </nav>
          
         </div>

         <?php
         
         $strSQL = "SELECT * FROM user WHERE username = '".$_SESSION['username']."' ";
        $objQuery = mysqli_query($objConnect, $strSQL);
          $objResult = mysqli_fetch_array($objQuery);
          ?>

        
    <div class="row1 rounded-5 btn btn-light " >

    <form action="p_insertprofile.php" method="get">
                <h1>แก้ไขข้อมูลส่วนตัว</h1>
                
                
                <label for="username">ชื่อผู้ใช้</label><br>
                <input type="text"name ="username" id ="username" size="25" value="<?=$objResult['username'];?>"  >   </p>
        
                    <lable for="_name" >ชื่อ-นามสกุล </lable><br> 
                <input type="text"name ="_name" id ="_name" size="25" value="<?=$objResult['_name'];?>" > </p>
        
                     <lable for="tel">เบอร์โทร </lable><br>  
                <input type="text"name ="tel" id ="tel" size="25"  value="<?=$objResult['tel'];?>" ></p>
        
                     <lable for="email">อีเมล </lable><br> 
                <input type="text"name ="email" id ="email" size="25" value="<?=$objResult['email'];?>">   </p>
        
                     <lable for="passw" >รหัสผ่าน </lable><br> 
                <input type="text"name ="passw" id ="passw" size="25" value="<?=$objResult['passw'];?>" ></p>

                <button class="btn btn-dark" type="submit">ยืนยัน</button>
                <a class="btn btn-danger" href="profile.php">ยกเลิก</a>
       
    </div>

        </html>