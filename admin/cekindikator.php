<?php 
error_reporting(E_ALL ^ E_WARNING || E_NOTICE);
include ("koneksi/koneksi.php");
$data = mysqli_query($koneksi, "SELECT *FROM `data` ORDER BY id_data DESC");

$dt = mysqli_fetch_array($data);
                            // $tanggal = $dt[1];
$indikator = $dt[2];
                            // $nilai = $dt[3];
                            // $nilai_v = $dt[4];
                            // $id = $dt[0];
                    
                        
echo $indikator;                      
?>