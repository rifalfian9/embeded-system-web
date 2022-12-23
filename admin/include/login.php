
<html>
    <head>
        <?php include("parts/head.php")?>
    </head>
    <body>
        <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="images/logo.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <?php  if(isset($_SESSION['error']) && $_SESSION['error'] = true ){?>
                     <div class="col-sm-12">
                    <div class="alert  alert-danger alert-dismissible fade show" role="alert">
                        <span class="badge badge-pill badge-danger">Failed </span> You Failed Login.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div> 
                </div>  
                <?php }?>
                    <form action="index.php?include=konfirmasilogin" method="post">
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                               
                                <button type="submit" name="login" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                                
                                <div class="register-link m-t-15 text-center">
                                    <p>Don't have account ? <a href="../register/register.php"> Sign Up Here</a></p>
                                    <p> << back dashboard << <a href="../index.php"> back</a></p>
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
