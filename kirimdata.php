<?php
//konfigurasi database
$servername = "sql305.epizy.com";
$username = "epiz_33198030";
$password = "f6hI9cWRb0TM";
$dbname = "epiz_33198030_webadminsensor";
 
 
 
$idalat = htmlspecialchars($_GET['indikator']);
$nilai= htmlspecialchars($_GET['nilai']);
 
// cara aksesnya contoh  :   https://alamatweb/service_1.php?nilai=43&idalat=3
 
date_default_timezone_set("Asia/Jakarta");
$today = date("Y-m-d H:i:s");
 
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO status_realtime (id_data ,tanggal_data, indikator, nilai_pv, nilai_sv) VALUES ('', '$today', '$idalat','$nilai',$nilai')";
 
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
 
$conn = null;
?>
