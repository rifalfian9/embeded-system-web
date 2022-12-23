<?php 
$GET = $_GET['id'];
        mysqli_query($koneksi, "DELETE FROM `data` where id_data = '$GET' ");
        header("Location: index.php?include=data&delete=success");
        exit;
    
?>