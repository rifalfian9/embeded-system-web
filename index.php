<!doctype html>
<html class="no-js" lang="en">
<head>
    <?php include("koneksi/koneksi.php") ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin - Embeded System</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="admin/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin/vendors/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        $(document).ready( function () {
            setInterval(function(){
                $(".indikator").load("admin/cekindikator.php")
            }, 3000);
        });
         $(document).ready( function () {
            setInterval(function(){
                $(".tanggal").load('admin/cektanggal.php')
            }, 3000);
        });
        $(document).ready( function () {
            setInterval(function(){
                $(".value").load('admin/ceknilai.php')
            }, 3000);
        });
    </script>
    <?php error_reporting(E_ALL ^ E_WARNING || E_NOTICE);?>
</head>

<body class="">
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="">
    <a class="navbar-brand" href="index.php">Web Embedded System</a>
  </div>
  <div class="container collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Dashboard <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="admin/index.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register/register.php">Register</a>
      </li>
    </ul>
    
  </div>
  
</nav>

<div class="container">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h4>Dashboard</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
      
           
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-4">
                    <div class="card-body pb-0">
                        <h4 class="text-light fw-bold pb-3">Indikator</h4>
                        <h4 class="mb-0">
                            <h5 class="mb-5"><span class="indikator"> - </span></h4>
                        </h4>
                    </div>
                </div>
            </div>
            <!--/.col-->
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-2">
                    <div class="card-body pb-0">  
                        <h4 class="text-light fw-bold pb-3">Value</h4>
                        <h4 class="mb-0">
                            <h5 class="mb-5"><span class="value"> - </span></h5>
                        </h4>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-3">
                    <div class="card-body pb-0">  
                        <h4 class="text-light fw-bold pb-3">Value Convert</h4>
                        <h4 class="mb-0">
                            <h5 class="count mb-5"><span class="value"> - </span></h5>
                        </h4>
                    </div>
                </div>
            </div>
             <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-5">
                    <div class="card-body pb-0">  
                        <h4 class="text-light fw-bold pb-3">Time and Date</h4>
                        <h4 class="mb-0">
                            <h5 class=" pb-5"><span class="tanggal"> - </span></h5>
                        </h4>
                    </div>
                </div>
            </div>

        </div> <!-- .content -->


</body>

</html>
