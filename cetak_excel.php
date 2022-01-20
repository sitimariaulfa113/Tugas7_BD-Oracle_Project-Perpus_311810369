<!DOCTYPE html>
<?php
include 'Koneksi.php';


header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=DataPeminjamanBuku.xls");
?>
<html>

<head>
	<title>Cetak Data</title>
</head>
<body>
<h3><center>Laporan Peminjaman Buku </h3>
			 <br>
			  
			  <br><br>
          <!-- Row -->
          <div class="row">
		  
           
 <!-- DataTable with Hover -->
			 <center>
 			<div class="col-lg-12">
              <div class="card mb-4">
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" border="1">
                    <thead class="thead-light">
                      <tr>
						<th>NO</th>
						<th>ID_PINJAM</th>
			            <th>NIM</th>
			            <th>NAMA_MHS</th>
						<th>ID_BUKU</th>
						<th>JUDUL_BUKU</th>
						<th>TGL_PINJAM</th>
            			<th>TGL_KEMBALI</th>   						
                      </tr>
                    </thead>
                    <tbody>
					<?php 
					include'Koneksi.php';
					$no = 1;
					$total_semua = 0;
					$stid = oci_parse($koneksi,'select peminjaman.id_pinjam,mhs.NIM,mhs.nama_mhs,buku.id_buku,buku.judul_buku,peminjaman.tgl_pinjam,peminjaman.tgl_kembali FROM peminjaman JOIN mhs ON peminjaman.NIM=mhs.NIM JOIN buku ON peminjaman.id_buku=buku.id_buku');


					oci_execute($stid);

					while (($row = oci_fetch_array ($stid, OCI_BOTH)) != false) {
						
						?>
                      <tr>
                        <td>
						 <?php echo $no; ?>
						</td>
						<td>
						 <?php echo $row["ID_PINJAM"];?>
						</td>
						<td>
						 <?php echo $row["NIM"]?>
						</td>
						<td>
						 <?php echo $row["NAMA_MHS"]?>
						</td>						
						  <td> 
						<?php echo $row["ID_BUKU"]?>
						</td>
						<td>
						 <?php echo $row["JUDUL_BUKU"]?>
						</td>
            <td>
             <?php echo $row["TGL_PINJAM"]?>
            </td>
            <td>
             <?php echo $row["TGL_KEMBALI"]?>
            </td>          
                    </tbody>
					 <?php
						$no++;
						}
					?>
                  </table>
                </div>
              </div>
            </div>
			
			
          </div>
          </center>
		  <!-- Row -->
          <div class="row">
            <div class="col-lg-6">
              <!-- Popover basic -->
              <div class="card mb-4">
               
                <div class="card-body">
                 
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <!-- Dismiss on next click -->
              <div class="card mb-4">
                <div class="card-body"></br>
                	<br>
                	<br><br>
                	<br>
                 <center>Bekasi, 20 Januari 2022 </center>
							<b><center>Kepala Perpustakaan</center></b>
							<p>&nbsp;</p>
							<p>&nbsp;</p>
							<b><center>Siti Maria Ulfa</center></b>
                </div>
              </div>
            </div>
	
 

 
</body>
</html>