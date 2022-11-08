<?php
 session_start();
        $objConnect = mysqli_connect("localhost","root","")or die("Can't connect to database");
        $db = mysqli_select_db($objConnect, "dbex");
        mysqli_query($objConnect, "SET NAMES utf8");
 
 $strSQL = "SELECT * FROM user WHERE username = '$username' and passw = '$password'";
      $objQuery = mysqli_query($objConnect, $strSQL);
      $objResult = mysqli_fetch_array($objQuery);
?>
      <?php if(isset($_SESSION['user_id'])): ?>
         <div>
             <li class="dropdown btn-logout-position">
                 <a class="nav-link dropdown-toggle btn-right" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                     WELCOME - <?php echo $_SESSION['user_id']; ?>
                 </a>
                 <ul class="dropdown-menu dropdown-menu-white" aria-labelledby="navbarDarkDropdownMenuLink">
                     <li><a class="dropdown-item" href="Account.php">ACCOUNT</a></li>
                     <li><a class="dropdown-item" href="../Assets/Logout.php">LOGOUT</a></li>
                 </ul>
             </li>
         </div>
         <?php else: ?>
             <button type="button" class="btn btn-primary mx-auto show-modal" data-bs-toggle="modal" data-bs-target="#sign-in">LOGIN</button>
         <?php endif; ?>