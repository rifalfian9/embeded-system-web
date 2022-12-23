<?php session_start() ; ?>
<?php include("koneksi/koneksi.php") ?>
 <?php if(isset($_GET["include"])){ 
     $include = $_GET["include"]; 
     if ( $include == "hapus") {
          include("include/hapusdata.php");
     }else if ( $include == "logout") {
          include("include/logout.php");
     }else if ( $include == "konfirmasilogin") {
          include("include/konfirmasilogin.php");
     }
     }?>
<!DOCTYPE html>
<html lang="en">
<head> 
   <?php include("parts/head.php")?>
</head>
<body>
<?php
if (isset($_GET['include'])) {
    $include = $_GET["include"];
    //cek ada session login dan session id_user
        if (isset($_SESSION["id_user"])) {
            include("parts/sidebar.php");?>
            <div id="right-panel" class="right-panel">
                <?php include("parts/header.php"); ?>
                <?php if ($include == "dashboard") {
                        include("include/dashboard.php");
                      }else if ($include == "data") {
                        include("include/data.php");
                      }else if ($include == "profile") {
                        include("include/profile.php");}
                    //   }else{
                    //     include("include/dashboard.php");
                    //   }
               ?>  
            </div>

   <?php }else{ //jika tidak ada session
            include("include/login.php");
         } ?>

<?php 
}else{
      if (isset($_SESSION['id_user'])) {
      include("parts/sidebar.php"); ?>
      <div id="right-panel" class="right-panel">
          <?php include("parts/header.php"); 
                include("include/dashboard.php"); 
          ?>
      </div>
      <?php }
      else{
          include("include/login.php");
      } ?>
<?php }?>

        <?php include("parts/script.php") ?>
</body> 
   
       
       

</html>


