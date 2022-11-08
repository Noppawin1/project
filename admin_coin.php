
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

<link rel="stylesheet" href="table.css">
        <title>
            เติมเงิน
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

    <section class="intro">
  <div class="bg-image h-100" style="background-image: url('https://mdbootstrap.com/img/Photos/new-templates/tables/img2.jpg');">
    <div class="mask d-flex align-items-center h-100">
      <div class="container">
        <div class="justify-content-center">
          <div class="col-12">
            <div class="card">
              <div class="card-body p-0">
                <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true" style="position: relative; height: 700px">
                  <table class="table table-striped mb-0">
                    <thead style="background-color: #212F3D ;">
                      <tr>
                        <th scope="col" style = "text-align: center;">ลำดับ</th>
                        <th scope="col" style = "text-align: center;">สลิป</th>
                        <th scope="col" style = "text-align: center;">Username</th>
                        <th scope="col" style = "text-align: center;">Name</th>
                        <th scope="col" style = "text-align: center;">จำนวนที่เติมเข้ามา</th>
                        <th scope="col" style = "text-align: center;">เวลา</th>
                        <th scope="col"> </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                      <?php
// Include the database configuration file
include 'dbConfig.php';

// Get images from the database
$query = $db->query("SELECT * FROM images ORDER BY uploaded_on ASC");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = 'uploads/'.$row["file_name"];
        ?>
        
        <html>
        <form method="post" action="checkpay.php">
        <th scope="row" style = "padding-top: 100px;text-align: center;font-size: 20px;"><?php echo $row["id"];?></th>
        <td style = "padding-top: 10px;text-align: center;font-size: 20px;"><img src="<?php echo $imageURL; ?>" width ="220px"/> </td>
                        <td style = "padding-top: 100px;text-align: center;font-size: 20px;"><?php echo $row["username"];?> </td>
                        <td style = "padding-top: 100px;text-align: center;font-size: 20px;"> <?php echo $row["name"];?> </td>
                        <td style = "padding-top: 100px;text-align: center;font-size: 20px;"><?php echo $row["price"];?></td>
                        <td style = "padding-top: 100px;text-align: center;font-size: 20px;"><?php echo $row["uploaded_on"];?></td>       
            <?php 
            $img = $db->query("SELECT * FROM images ORDER BY id ASC");
            $img_data = mysqli_fetch_array($img, MYSQLI_BOTH);
            ?>
            <input name="price" id="price" class="form-control" placeholder="Price" type="hidden" value = <?php echo $row["price"];?> >
            <input name="username" id="username" class="form-control" placeholder="Price" type="hidden" value = <?php echo $row["username"];?> >
            <?php if($img_data['status'] == 1): ?>
              <td style = "padding-top: 100px;text-align: center;font-size: 20px;"><button type="submit" class="btn btn-success btn-sm" style="padding-top: 10px"> Check </button></td>
            <?php else: ?>
              <td style = "padding-top: 100px;text-align: center;font-size: 20px;">SUCCESS</td>
            <?php endif; ?>
          </form>
        </html>
        <?php }
}else{ ?>
    <p>No Data</p>
<?php } ?>
                      </tr>
                      
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
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
</body >
</html>
<?php
