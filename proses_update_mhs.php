<!---- proses update data anggota --->
<?php
require_once 'Koneksi.php';
if (isset($_POST['submit'])) {
  $id= $_POST['NIM'];
  $nama= $_POST['nama_mhs'];
  $no = $_POST['no_HP']; 
  $gen = $_POST['gender']; 
  $tempat = $_POST['tempat_lahir']; 
  $tanggal = $_POST['tanggal_lahir']; 
  $alamat = $_POST['alamat']; 

  // update data berdasarkan id_anggota yg dikirimkan
  
  $query = "UPDATE MHS  SET NIM='".$id."', NAMA_MHS ='".$nama."', NO_HP ='".$no."', GENDER ='".$gen."',TEMPAT_LAHIR ='".$tempat."',TANGGAL_LAHIR ='".$tanggal."',ALAMAT ='".$alamat."' WHERE  NIM= '".$id."' ";
  $statement = oci_parse($koneksi,$query);
  $r = oci_execute($statement,OCI_DEFAULT);
   $res = oci_commit($koneksi);
  if ($res) {
    // pesan jika data berubah
    echo "<script>alert('Data berhasil diubah'); window.location.href='mhs.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data gagal diubah'); window.location.href='mhs.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: mhs.php'); 
}