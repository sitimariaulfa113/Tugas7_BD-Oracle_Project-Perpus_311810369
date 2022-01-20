<!-------- proses tambah anggota -------->

<?php
require_once 'Koneksi.php';
if (isset($_POST['submit'])) {
  $id= $_POST['NIM'];
  $nama= $_POST['nama_mhs'];
  $no = $_POST['no_hp']; 
  $gen = $_POST['gender']; 
  $tempat = $_POST['tempat_lahir']; 
  $tanggal = $_POST['tanggal_lahir']; 
  $alamat = $_POST['alamat'];  

  $query = "INSERT INTO MHS (NIM, NAMA_MHS, NO_HP, GENDER, TEMPAT_LAHIR, TANGGAL_LAHIR, ALAMAT) VALUES ('".$id."','".$nama."','".$no."','".$gen."','".$tempat."','".$tanggal."','".$alamat."')";
  $statement = oci_parse($koneksi,$query);
  $r = oci_execute($statement,OCI_DEFAULT);
   $res = oci_commit($koneksi);
  if ($res) {
    // pesan jika data tersimpan
    echo "<script>alert('Data berhasil ditambahkan'); 
  window.location.href='mhs.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data gagal ditambahkan');
  window.location.href='mhs.php'</script>";
  }
} else {
  //jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: mhs.php'); 
}
