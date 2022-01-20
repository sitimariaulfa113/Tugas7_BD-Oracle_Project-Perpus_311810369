<!------ proses update data buku ----->

<?php
require_once 'Koneksi.php';
if (isset($_POST['submit'])) {
   $id = $_POST['id_buku'];
  $judul = $_POST['judul_buku'];
  $penulis= $_POST['penulis'];
  $penerbit = $_POST['penerbit']; 
  
  // update data berdasarkan id_buku yg dikirimkan
  
	$query = "UPDATE  BUKU  SET ID_BUKU='".$id."', JUDUL_BUKU ='".$judul."', PENULIS ='".$penulis."', PENERBIT ='".$penerbit."' WHERE  ID_BUKU= '".$id."' ";
	$statement = oci_parse($koneksi,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($koneksi);
  if ($res) {
    // pesan jika data berubah
    echo "<script>alert('Data Buku berhasil diubah'); window.location.href='buku.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data Buku gagal diubah'); window.location.href='buku.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: buku.php'); 
}