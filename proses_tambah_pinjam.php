<!-------- proses tambah peminjaman ------>


<?php
require_once 'Koneksi.php';
if (isset($_POST['submit'])) {
  $id = $_POST['id_pinjam'];
  $nim= $_POST['NIM'];
  $idbuku= $_POST['id_buku'];
  $tglpinjam = $_POST['tgl_pinjam']; 
  $tglkembali = $_POST['tgl_kembali'];

  $query = "INSERT INTO PEMINJAMAN (ID_PINJAM,NIM,ID_BUKU,TGL_PINJAM, TGL_KEMBALI) VALUES ('".$id."','".$nim."','".$idbuku."','".$tglpinjam."','".$tglkembali."')";
  $statement = oci_parse($koneksi,$query);
  $r = oci_execute($statement,OCI_DEFAULT);
   $res = oci_commit($koneksi);
  if ($res) {
    // pesan jika data tersimpan
    echo "<script>alert('Data berhasil ditambahkan'); 
  window.location.href='peminjaman.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data gagal ditambahkan');
  window.location.href='peminjaman.php'</script>";
  }
} else {
  //jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: peminjaman.php'); 
}
