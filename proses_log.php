<?php @session_start();
 //koneksi database
include ("Koneksi.php");
$username = $_POST['USERNAME'];
$password = $_POST['PASSWORD'];
$query = "SELECT * FROM LOG_ADMIN WHERE USERNAME='$username' and PASSWORD='$password' ";
$hasil = oci_parse($koneksi,$query);
$data  = oci_execute($hasil,OCI_DEFAULT);

//Validasi Data dari form dengan database
if ($data >= 1)
 {
  $_SESSION['USERNAME']=$username;
  header("location:index.php");
 }
else
 {
   echo "<script type='text/javascript'>alert('Maaf! Data yang anda masukan tidak benar');document.location='login.php'</script>";
  }
?>