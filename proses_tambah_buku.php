<!----proses tambah buku----->

<?php
require_once 'Koneksi.php';
if (isset($_POST['submit'])) {
   $id = $_POST["id_buku"];
   $judul = $_POST["judul_buku"];
   $penulis = $_POST["penulis"];
   $penerbit = $_POST["penerbit"];

  $query = "INSERT INTO BUKU (ID_BUKU,JUDUL_BUKU,PENULIS,PENERBIT) VALUES ('".$id."','".$judul."','".$penulis."','".$penerbit."')";
  $statement = oci_parse($koneksi,$query);
  $r = oci_execute($statement,OCI_DEFAULT);
   $res = oci_commit($koneksi);
  if ($res) {
    // pesan jika data tersimpan
    echo "<script>alert('Data Buku berhasil ditambahkan'); 
  window.location.href='buku.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data Buku gagal ditambahkan');
  window.location.href='buku.php'</script>";
  }
} else {
  //jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: buku.php'); 
}
