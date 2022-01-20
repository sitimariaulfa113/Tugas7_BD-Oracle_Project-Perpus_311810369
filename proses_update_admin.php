<!----- proses update data admin----->
<?php
require_once 'Koneksi.php';
if (isset($_POST['submit'])) {
  $id = $_POST['id_petugas'];
  $nama = $_POST['nama_petugas'];
  
  // update data berdasarkan id_admin yg dikirimkan
  
	$query = "UPDATE  PETUGAS  SET ID_PETUGAS='".$id."', NAMA_PETUGAS ='".$nama."' WHERE  ID_PETUGAS= '".$id."' ";
	$statement = oci_parse($koneksi,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($koneksi);
  if ($res) {
    // pesan jika data berubah
    echo "<script>alert('Data Admin berhasil diubah'); window.location.href='admin.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data Admin gagal diubah'); window.location.href='admin.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: admin.php'); 
}