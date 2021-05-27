<?php 

   include '../koneksi.php';
   include 'navbar.php';

   $id_pasien = $_GET['id_pasien'];
   $query = mysqli_query($koneksi, "SELECT * FROM covid WHERE id_pasien = '$id_pasien'");

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Detail | E-Karantina</title>
</head>
<body>
   <div class="container">
      <div class="row mt-4">
         <div class="col-lg-8">
            <div class="card">
               <div class="card-header">

                  <?php 
                     while($pasien = mysqli_fetch_assoc($query)):
                  ?>

                  <h2 class="card-title">Detail | <?= $pasien['nama'] ?></h2>

                     

               </div>
               <!-- Akhir card header -->
               
               <!-- Awal Card Body -->

               <div class="card-body">
                  <table class="table">
                     <tr>
                        <th>Id Pasien</th>
                        <td><?= $pasien['id_pasien'] ?></td>
                     </tr>

                     <tr>
                        <th>Nama</th>
                        <td><?= $pasien['nama'] ?></td>
                     </tr>

                     <tr>
                        <th>Tanggal Daftar</th>
                        <td><?= $pasien['tanggal_kontrol'] ?></td>
                     </tr>

                     <tr>
                        <th>Jenis Kelamin</th>
                        <td><?= $pasien['jenis_kelamin'] ?></td>
                     </tr>

                     <tr>
                        <th>Umur</th>
                        <td><?= $pasien['umur'] ?></td>
                     </tr>

                     <tr>
                        <th>Alamat</th>
                        <td><?= $pasien['alamat'] ?></td>
                     </tr>

                     <tr>
                        <th>Suhu</th>
                        <td><?= $pasien['suhu'] ?></td>
                     </tr>

                     <tr>
                        <th>Aksi</th>
                        <td>
                           <!-- <a href="edit.php?id_pasien=<?= $pasien["id_pasien"];?>  " class="btn btn-outline-warning">Edit</a>
                           <a href="hapus.php?id_pasien=<?= $pasien["id_pasien"];?> " onclick="return confirm('Yakin ingin menghapus data?')" class="btn btn-outline-danger">Hapus</a> -->
                           <a href="index.php" class="btn btn-outline-success">Kembali</a>
                        </td>
                     </tr>

                     <?php endwhile; ?>
                  </table>
               </div>

            </div>
         </div>
      </div>
   </div>
</body>
</html>