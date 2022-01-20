<!---- proses update data peminjaman --->
<?php
require_once 'Koneksi.php';
if (isset($_POST['submit'])) {
  $id = $_POST['id_pinjam'];
  $nim= $_POST['NIM'];
  $idbuku= $_POST['id_buku'];
  $tglpinjam = $_POST['tgl_pinjam']; 
  $tglkembali = $_POST['tgl_kembali']; 

  // update data berdasarkan id_produk yg dikirimkan
  
	$query = "UPDATE  PEMINJAMAN  SET ID_PINJAM='".$id."', NIM ='".$nim."', ID_BUKU ='".$idbuku."', TGL_PINJAM ='".$tglpinjam."',TGL_KEMBALI ='".$tglkembali."' WHERE  ID_PINJAM= '".$id."' ";
	$statement = oci_parse($koneksi,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($koneksi);
  if ($res) {
    // pesan jika data berubah
    echo "<script>alert('Data berhasil diubah'); window.location.href='peminjaman.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data gagal diubah'); window.location.href='peminjaman.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: peminjaman.php'); 
}