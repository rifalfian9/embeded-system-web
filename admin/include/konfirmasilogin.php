<?php 
    if (isset($_POST['login'])) {
            if(empty($_POST['email'])){
                $_SESSION['error'] = true;
                header("Location : index.php");
            }elseif (empty($_POST['password'])) {
                $_SESSION['error'] = true;
                header("Location: index.php");
            }else {
                $email = $_POST['email'];
                $password = MD5($_POST["password"]);
                $kueri = "SELECT * FROM  user where  `email` = '$email' ";
                $cek = mysqli_query($koneksi, $kueri);
                $ceksedia = mysqli_num_rows($cek);
                if ($ceksedia == 0) {
                    $_SESSION['error'] = true;
                    header("Location: index.php");
                }else{
                    $data = mysqli_fetch_assoc($cek);
                    $id_user = $data['id_user'];
                    $pass = $data['password'];
                    if($password == $pass){
                        $_SESSION["id_user"] = $id_user; 
                         
                        header("Location: index.php?include=dashboard");
                    }
                    else{
                        $_SESSION['error'] = true;
                        header("Location: index.php");
                    }
                }
            }  
        }

        
    

?>