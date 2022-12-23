<?php 
$koneksi = mysqli_connect('localhost', 'root', '', 'web_admin');
if (!$koneksi)
    {
        die ('Error Koneksi' . mysqli_connect_errno());
    }
?>