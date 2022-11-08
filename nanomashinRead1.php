
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
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
            RMUTT Comic
        </title>
    </head>
    <?php include 'sesction.php'; ?>
     
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
         <h2 class="text-center" style ="color: white; margin-top:2%">Nanomashin ตอนที่1</h2>
         
         <div class="btn-group" style ="margin-left: 400px;" role="group" aria-label="Button group with nested dropdown">
  <button type="button" class="btn btn-secondary btn-lg" onclick="history.back()" >ย้อนกลับ</button>
 

  <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle btn-lg" data-bs-toggle="dropdown" aria-expanded="false">
      เลือกตอน
    </button>
    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
    <?php
         $qry = mysqli_query($objConnect, "SELECT*FROM nanomashin");
         if(mysqli_num_rows($qry) <= 0){
           echo "NO CHAPTER";
          
         }else{
           while($row = $qry-> fetch_assoc()){
             // echo $row['chapter'];
            $session_username = "".$_SESSION['username']."";
           //   $og = mysqli_query($objConnect, "SELECT * FROM nanomashin WHERE  name = $session_username");
           //   $og_data = mysqli_fetch_array($og, MYSQLI_BOTH);
       
             if($row['name'] ==  $session_username ){
               ?>
                <p><button type="submit" class='btn btn-sm btn btn-dark' > <a class ="chapter" href="<?php echo $row['href'] ?>"><?php echo"ตอน " . $row['chapter']."    " ?><img src="unlock.png" width="25px"></a></button></P>
                
               <?php 
             }else{
              ?>

               <form method="post" action="checkreadnano.php">                                                                 
                 <input type="hidden" name="user_id" value="<?=$user_arr['user_id'];?>" >
                 <input type="hidden" name="chapter" value="<?=$row['chapter'];?>" >
                 <input type="hidden" name="price" value="<?=$row['price'];?>" >
         
         
                <p><button type="submit" class='btn btn-sm btn btn-dark' > <a class ="chapter" ><?php echo"ตอน " . $row['chapter']."    ".$row['price']."coin "  ?><img src="lock.png" width="25px"></a></button></P>
             </form>
               <?php
             }
           }
         }
         ?>
    </ul>
  </div>
</div>
 
</div>       

         <a type="button" class="btn-close shadow p-2 mb-5 bg-body rounded" aria-label="Close" href = "index.php" style =" margin-top:1%;margin-right:100px"></a>

         <div class="text-bg-light p-3 rounded-5" style="margin-left:400px; margin-right:400px; margin-top:1%">
         <img src="readingnano1/1.jpg" class="rounded mx-auto d-block"   style= "margin-top: 8%" width =" 700px" alt="...">
         <img src="readingnano1/2.jpg" class="rounded mx-auto d-block"    width =" 700px" alt="...">
         <img src="readingnano1/3.jpg" class="rounded mx-auto d-block"  width =" 700px" alt="...">
         <img src="readingnano1/4.jpg" class="rounded mx-auto d-block"    width =" 700px"alt="...">
         <img src="readingnano1/5.jpg" class="rounded mx-auto d-block"    width =" 700px"alt="...">
         <img src="readingnano1/6.jpg" class="rounded mx-auto d-block"    width =" 700px"alt="...">
         <img src="readingnano1/7.jpg" class="rounded mx-auto d-block"    width =" 700px"alt="...">
         <img src="readingnano1/8.jpg" class="rounded mx-auto d-block"    width =" 700px"alt="...">
         <img src="readingnano1/9.jpg" class="rounded mx-auto d-block"    width =" 700px"alt="...">
         <img src="readingnano1/10.jpg" class="rounded mx-auto d-block"    width =" 700px"alt="...">
         <img src="readingnano1/11.jpg" class="rounded mx-auto d-block"    width =" 700px"alt="...">
         <img src="readingnano1/12.jpg" class="rounded mx-auto d-block"    width =" 700px"alt="...">
         <img src="readingnano1/13.jpg" class="rounded mx-auto d-block"    width =" 700px"alt="...">
         <img src="readingnano1/14.jpg" class="rounded mx-auto d-block"    width =" 700px"alt="...">
         <img src="readingnano1/15.jpg" class="rounded mx-auto d-block"    width =" 700px"alt="...">
         <img src="readingnano1/16.jpg" class="rounded mx-auto d-block"    width =" 700px"alt="...">
         <img src="readingnano1/17.jpg" class="rounded mx-auto d-block"    width =" 700px"alt="...">
         <img src="readingnano1/18.jpg" class="rounded mx-auto d-block"    width =" 700px"alt="...">
         <img src="readingnano1/19.jpg" class="rounded mx-auto d-block"    width =" 700px"alt="...">
         <img src="readingnano1/20.jpg" class="rounded mx-auto d-block"    width =" 700px"alt="...">
         <img src="readingnano1/21.jpg" class="rounded mx-auto d-block"    width =" 700px"alt="...">
         </div>

         <div class="btn-group" style ="margin-left: 1270px;" role="group" aria-label="Button group with nested dropdown">
  <button type="button" class="btn btn-secondary btn-lg" onclick="history.back()">ย้อนกลับ</button>
 

  <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle btn-lg" data-bs-toggle="dropdown" aria-expanded="false">
      เลือกตอน
    </button>

    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
    <?php
         $qry = mysqli_query($objConnect, "SELECT*FROM nanomashin");
         if(mysqli_num_rows($qry) <= 0){
           echo "NO CHAPTER";
          
         }else{
           while($row = $qry-> fetch_assoc()){
             // echo $row['chapter'];
            $session_username = "".$_SESSION['username']."";
           //   $og = mysqli_query($objConnect, "SELECT * FROM nanomashin WHERE  name = $session_username");
           //   $og_data = mysqli_fetch_array($og, MYSQLI_BOTH);
       
             if($row['name'] ==  $session_username ){
               ?>
                <p><button type="submit" class='btn btn-sm btn btn-dark' > <a class ="chapter" href="<?php echo $row['href'] ?>"><?php echo"ตอน " . $row['chapter']."    " ?><img src="unlock.png" width="25px"></a></button></P>
                
               <?php 
             }else{
              ?>

               <form method="post" action="checkreadnano.php">                                                                 
                 <input type="hidden" name="user_id" value="<?=$user_arr['user_id'];?>" >
                 <input type="hidden" name="chapter" value="<?=$row['chapter'];?>" >
                 <input type="hidden" name="price" value="<?=$row['price'];?>" >
         
         
                <p><button type="submit" class='btn btn-sm btn btn-dark' > <a class ="chapter" ><?php echo"ตอน " . $row['chapter']."    ".$row['price']."coin "  ?><img src="lock.png" width="25px"></a></button></P>
             </form>
               <?php
             }
           }
         }
         ?>
    </ul>
  </div>
</div>
 
</div>     
         
         <footer class="bg-light text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #3b5998;"
        href="https://www.facebook.com/profile.php?id=100006989194899"
        role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #55acee;"
        href="#!"
        role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #dd4b39;"
        href="#!"
        role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #ac2bac;"
        href="#!"
        role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #0082ca;"
        href="#!"
        role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>
      <!-- Github -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #333333;"
        href="#!"
        role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
         </body>
         </html>