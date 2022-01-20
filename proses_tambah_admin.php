<!-------- proses tambah admin -------->

<?php
require_once 'Koneksi.php';
if (isset($_POST['submit'])) {
  $id = $_POST['id_petugas'];
  $nama = $_POST['nama_petugas'];

  $query = "INSERT INTO PETUGAS(ID_PETUGAS, NAMA_PETUGAS) VALUES ('".$id."','".$nama."')";
  $statement = oci_parse($koneksi,$query);
  $r = oci_execute($statement,OCI_DEFAULT);
   $res = oci_commit($koneksi);
  if ($res) {
    // pesan jika data tersimpan
    echo "<script>alert('Data berhasil ditambahkan'); 
  window.location.href='admin.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data gagal ditambahkan');
  window.location.href='admin.php'</script>";
  }
} else {
  //jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: admin.php'); 
}
