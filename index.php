
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
     
    <div >
        <?php
        session_start();
        $objConnect = mysqli_connect("localhost","root","")or die("Can't connect to database");
        $db = mysqli_select_db($objConnect, "dbex");
        mysqli_query($objConnect, "SET NAMES utf8");
        
       
       ?>
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

                   
                  
                  
                 

          <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="false"  style ="margin-top: 50px;" >
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <center><img src="solo.jpg" class="d-block w-50" height = "470px" style = "border-radius: 1%;"></center>
      <div class="carousel-caption d-none d-md-block" >
        
        
        <div class = "desc"><p>Solo Leveling</p></div>
        
         
      </div>
    </div>
    <div class="carousel-item">
    <center><img src="blue.jpg" class="d-block w-50 rounded mx-auto d-block" height = "470px" style = "border-radius: 1%;"></center>
      <div class="carousel-caption d-none d-md-block">
      <div class = "desc"><p>Bleach</p></div>
      </div>
    </div>
    <div class="carousel-item">
    <center><img src="the.jpg" class="d-block w-50  mx-auto d-block" height = "470px"style = "border-radius: 1%;" ></center>
      <div class="carousel-caption d-none d-md-block" st>
      <div class = "desc"><p>The Beginning After The End</p></div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
         


<div class = "f">
<div>
         <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
         <div class="module lr">
          <p class="front">Overgeared</p>
        </div>
</a>

<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Overgeared</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close" ></button>
  </div>
  <div class="offcanvas-body">
    <div>
    ชินยองอู เป็นผู้แพ้อย่างแท้จริงในชีวิตและเป็นหนี้บุญคุณบริษัทประกันภัยอย่างหนัก
เขาอาศัยอยู่กับพ่อแม่ที่ผิดหวังและน้องสาวที่เก่งกาจซึ่งเป็นนักเรียนชั้นนำคนหนึ่งของโรงเรียนของเธอ แม้แต่ในเกมอย่างเกม VRMMORPG ยอดนิยมในซาทิสทาย เขาก็เป็นผู้แพ้ทั้งหมด
แต่อยู่มาวันหนึ่ง ระหว่างทำภารกิจ เขาได้พบกับหนังสือในตำนานอย่างปาฏิหาริย์ที่สามารถมอบประสบการณ์ระดับตำนานที่ไม่เคยเห็นที่ไหนมาก่อนให้กับทุกคนที่อ่านมัน!
เขาวางแผนที่จะขายมันด้วยเงินจำนวนมาก แต่โชคมักเป็นลักษณะที่แย่ที่สุดของเขาเสมอ
ผ่านการเปลี่ยนแปลงที่โชคร้ายของสถานการณ์ ความฝันของเขาอยู่ได้ไม่นานในขณะที่เขาถูกบังคับให้ใช้ไอเท็มสำหรับตัวเอง
ชีวิตของเขาเปลี่ยนไปตลอดกาลตั้งแต่วันนั้นที่เวรกรรม…
    </div>
    <div class="dropdown mt-3">
      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
        เลือกตอน
      </button>
      <ul class="dropdown-menu">
        <div>
      <?php
          $qry = mysqli_query($objConnect, "SELECT*FROM overgeared");
          if(mysqli_num_rows($qry) <= 0){
            echo "NO CHAPTER";
           
          }else{
            while($row = $qry-> fetch_assoc()){
              // echo $row['chapter'];
             $session_username = "".$_SESSION['username']."";
            //   $og = mysqli_query($objConnect, "SELECT * FROM overgeared WHERE  name = $session_username");
            //   $og_data = mysqli_fetch_array($og, MYSQLI_BOTH);
        
              if($row['name'] ==  $session_username ){
                ?>
                <div>
                 <p><button type="submit" class='btn btn-sm btn btn-dark' 
                 style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: 1rem; --bs-btn-font-weight: 600; "> <a class ="chapter" href="<?php echo $row['href'] ?>"><?php echo"ตอน " . $row['chapter']."    " ?><img src="unlock.png" width="25px"></a></button></P>
              </div>
                 
                <?php 
              }else{
               ?>

                <form method="post" action="checkreadovergeared.php">                                                                 
                  <input type="hidden" name="user_id" value="<?=$user_arr['user_id'];?>" >
                  <input type="hidden" name="chapter" value="<?=$row['chapter'];?>" >
                  <input type="hidden" name="price" value="<?=$row['price'];?>" >
          
          
                 <p><button type="submit" class='btn btn-sm btn btn-dark' style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: 1rem; --bs-btn-font-weight: 600;"  > <a class ="chapter" ><?php echo"ตอน " . $row['chapter']."    ".$row['price']."coin       "  ?><img src="lock.png" width="25px"></a></button></P>
              </form>
                <?php
              }
            }
          }
          ?>
          </div>
      </ul>
    </div>
  </div>
</div>
         </div>
         

         





         <div>
         <a data-bs-toggle="offcanvas" href="#offcanvasExample1" role="button" aria-controls="offcanvasExample">
         <div class="module01 lr">
          <p class="front">Nanomashin</p>
        </div>
</a>

<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample1" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Nanomashin</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div>
    ชอน ยออุน เป็นบุตรนอกสมรสของเจ้าสำนักพรรคอสูร ซึ่งมีพรรคย่อย 6 พรรค แต่ละพรรคก็มีทายาทอย่างเป็นทางการที่เกิดจากเจ้าสำนัก นอกจากนี้ ยออุนยังเกิดมาไร้พรสวรรค์ในวิทยายุทธ 
        ทำให้เขาถูกกลั่นแกล้งและตกเป็นเป้าหมายลอบสังหารของทายาทคนอื่น ๆ เสมอ ก่อนที่เขาจะถูกลอบฆ่าสำเร็จ ลูกหลานในอนาคตอันไกลโพ้นของยออุนก็ปรากฏตัวมาช่วย และฉีดนาโนแมชชีน
        จากโลกอนาคตให้พี่แก  เพื่อให้มั่นใจว่าต้นตระกูลของตนจะไม่ถูกฆ่าในเหตุการณ์ดังกล่าว ถามว่านาโนแมชชีนทำอะไรได้บ้างเท่าที่เห็นจากการอ่านมา 5 ตอนก็คือ รักษาบาดแผล เป็นระบบ
        ผู้ช่วย AI ที่คุยโต้ตอบกับยออุนได้ อ่านหนังสือได้รวดเร็ว และสามารถจดจำรายละเอียดของสิ่งที่อ่านได้ทั้งหมด
    </div>
    <div class="dropdown mt-3">
      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
        เลือกตอน
      </button>
      <ul class="dropdown-menu">
        <div>
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
          </div>
      </ul>
    </div>
  </div>
</div>
         </div>





         <div>
         <a data-bs-toggle="offcanvas" href="#offcanvasExample2" role="button" aria-controls="offcanvasExample">
         <div class="module02 lr">
          <p class="front">Blue lock</p>
        </div>
</a>

<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample2" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Blue lock</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div>
    ป็นเรื่องราวหลังจาก ประเทศญี่ปุ่นตกรอบ 16 ทีมสุดท้ายฟุตบอลโลก 2018 ทำให้เหล่าสหพันธ์และผู้คนในญี่ปุ่นไม่พอใจ ทำให้เกิดโปรเจค "Blue Lock" 
        หรือก็คือการรวบรวมซึ่งเด็กมัธยมปลายที่เล่นตำแหน่งกองหน้าที่มีอีโก้สูง มารวมตัวกันทั้งหมด 300 คน 
        เพื่อเป็นแคมป์เพื่อคัดสรรค์นักกองหน้าเพื่อทำให้ญี่ปุ่นเป็นแชมป์โลก ใครกันจะได้ไปชิงแชมป์ฟุตบอลโลก เรื่องราวการแข่งขันจะสนุกมันแค่ไหนกันนะ
    </div>
    <div class="dropdown mt-3">
      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
        เลือกตอน
      </button>
      <ul class="dropdown-menu">
        <div>
        <?php
         $qry = mysqli_query($objConnect, "SELECT*FROM bluelock");
         if(mysqli_num_rows($qry) <= 0){
           echo "NO CHAPTER";
          
         }else{
           while($row = $qry-> fetch_assoc()){
             // echo $row['chapter'];
            $session_username = "".$_SESSION['username']."";
           //   $og = mysqli_query($objConnect, "SELECT * FROM bluelock WHERE  name = $session_username");
           //   $og_data = mysqli_fetch_array($og, MYSQLI_BOTH);
       
             if($row['name'] ==  $session_username ){
               ?>
                <p><button type="submit" class='btn btn-sm btn btn-dark' > <a class ="chapter" href="<?php echo $row['href'] ?>"><?php echo"ตอน " . $row['chapter']."    " ?><img src="unlock.png" width="25px"></a></button></P>
                
               <?php 
             }else{
              ?>

               <form method="post" action="checkreadbluelock.php">                                                                 
                 <input type="hidden" name="user_id" value="<?=$user_arr['user_id'];?>" >
                 <input type="hidden" name="chapter" value="<?=$row['chapter'];?>" >
                 <input type="hidden" name="price" value="<?=$row['price'];?>" >
         
         
                <p><button type="submit" class='btn btn-sm btn btn-dark' > <a class ="chapter" ><?php echo"ตอน " . $row['chapter']."    ".$row['price']."coin "  ?><img src="unlock.png" width="25px"></a></button></P>
             </form>
               <?php
             }
           }
         }
         ?>
        
          </div>
      </ul>
    </div>
  </div>
</div>
         </div>














         
         
       
        
        <div class="module03 lr">
          <p class="front">Solo Leveling</p>
        </div>
        <div class="module04 lr">
          <p class="front">The Beginning After The End</p>
        </div>
        <div class="module05 lr">
          <p class="front">Bleach</p>
        </div>
        
         
         
         
        
        
<center>
        <div class ="pag" style ="margin-top: 25%">
        <nav aria-label="Page navigation example">
  <ul class="pagination" >
    <li class="page-item"><a class="page-link" onclick="history.back()">Previous</a></li>
    <li class="page-item"><a class="page-link" href="index.php">1</a></li>
    <li class="page-item"><a class="page-link" href="index2.php">2</a></li>
    <li class="page-item"><a class="page-link" href="#">4</a></li>
    <li class="page-item"><a class="page-link" href="#">5</a></li>
    <li class="page-item"><a class="page-link" href="#">6</a></li>
    <li class="page-item"><a class="page-link" href="#">7</a></li>
    <li class="page-item"><a class="page-link" href="#">8</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>
         </div>
         </center>

        
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
