<?php 
 
//membangun koneksi 
$username="perpus369";
$password="perpus369";
$database="LOCALHOST/XE";

$koneksi=oci_connect($username,$password,$database);

if (!$koneksi) { 
$erroci_error ();

echo "Gagal tersambung ke ORACLE";

} else{
//echo "koneksi berhasil";

}

?>