<?php 

   include '../koneksi.php';
   include 'navbar.php';

   session_start();

   if (! isset($_SESSION['username'])){
	header("location: ../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Link bootstrap -->
   <script src="http://localhost/siperpus/aset/bootstrap/js/bootstrap.min.js"></script>

   <!-- Link font awesome -->
   <link rel="stylesheet" href="http://localhost/tugas akhir/aset/fontawesome/css/all.min.css">

   <!-- CSSku -->
   <link rel="stylesheet" href="aset/style.css">

   <title>Form-Tambah Pasien| E-Karantina</title>
</head>
<body>
   <div class="container">
      <div class="row mt-4">
         <div class="col-md">
            <center>
               <div class="card" style="width: 100%"> 
                  <div class="card-header" >
                     <h2 class="card-title">
                        <i class="fas fa-plus"></i> Tambah Data Pasien
                     </h2>
                  </div>
               </div>

               <!-- Akhir Card Header -->

               <!-- Awal Card Body -->
               <div class="card-body">
                  <form action="proses-tambah.php" method="post">
                     <table class="table">
                        <tr>
                           <th>Nama</th>
                           <td><input type="text" name="nama" style="width: 80%" placeholder="masukkan nama"></td>
                        </tr>
                        <tr>
                           <th>Jenis Kelamin</th>
                           <td>
                              <select name="jenis_kelamin" style="width: 80%">
                                 <option class="" value="">--Pilih Jenis Kelamin--</option>
                                 <option value="Laki-laki">Laki-laki</option>
                                 <option value="Perempuan">Perempuan</option>
                              </select>
                           </td>
                        </tr>
                        <tr>
                           <th>Umur</th>
                           <td><input type="number" name="umur" style="width: 80%" placeholder="masukkan umur"></td>
                        </tr>
                        <tr>
                           <th>Alamat</th>
                           <td><input type="text" name="alamat" style="width: 80%" placeholder="masukkan alamat"></td>
                        </tr>
                        <tr>
                           <th>Suhu</th>
                           <td><input type="double" name="suhu" style="width: 80%" placeholder="masukkan suhu"></td>
                        </tr>
                        <tr>
                           <th></th>
                           <th>
                              <button type="submit" name="submit" class="btn btn-outline-info">Tambah</button>
                           </th>
                        </tr>
                     </table>
                  </form>
               </div>
            </center>
         </div>
      </div>
   </div>
</body>
</html>