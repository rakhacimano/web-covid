<?php  
include '../koneksi.php';
include 'navbar.php';

session_start();

if (! isset($_SESSION['username'])){
	header("location: ../index.php");
}

$query = "SELECT * FROM covid ORDER BY tanggal_kontrol";
	$res = mysqli_query($koneksi, $query);

	$pasien = array();

	while ($data = mysqli_fetch_assoc($res)){
		$pasien[] = $data;
   }
   
?>

<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

      <link rel="stylesheet" href="http://localhost/tugas_akhir/aset/fontawesome/css/all.min.css">
      <link rel="stylesheet" href="aset/style.css">

      <title>Home | E-Karantina</title>
   </head>
   <body>
      <div class="container">
         <div class="row mt-4">
            <div class="col-lg">
               <div class="card">
                  <div class="card-header">
                     <h2 class="card-title"><i class="fas fa-user-injured">
                        </i> Data Pasien ODP</i>
                        <a href="form-tambah.php"><button type="button" class="btn btn-outline-info"><i class="fas fa-plus"></i> Tambah data</button></a> 
                     </h2>
                  </div>

                  <!-- Card Body -->

                     <div class="card-body">
                        <hr>
                     <table class="table table-hover">
                        <thead class="thead thead-dark">
                           <tr>
                              <th scope="col">#</th>
                              <th scope="col">Waktu Daftar</th>
                              <th scope="col">Nama</th>
                              <th scope="col">Jenis Kelamin</th>
                              <th scope="col">Umur</th>
                              <th scope="col">Alamat</th>
                              <th scope="col">Suhu</th>
                              <th scope="col">Aksi</th>
                           </tr>
                        </thead>

                        <?php
                           $no = 1;
                           foreach ($pasien as $p) { 
                        ?>

                        <tbody>
                           <tr>
                              <th scope="row"><?= $no ?></th>
                              <td><?= $p['tanggal_kontrol'] ?></td>
                              <td><?= $p['nama'] ?></td>
                              <td><?= $p['jenis_kelamin'] ?></td>
                              <td><?= $p['umur'] ?></td>
                              <td><?= $p['alamat'] ?></td>
                              <td><?= $p['suhu'] ?></td>
                              <td>
                                 <a href="detail.php?id_pasien=<?= $p['id_pasien'] ?>" class="badge badge-success">Detail</a>
                                 <!-- <a href="edit.php?id_pasien=<?= $p['id_pasien'] ?>" class="badge badge-warning">Edit</a>
                                 <a href="delete.php?id_pasien=<?= $p['id_pasien'] ?>" class="badge badge-danger">Delete</a> -->
                              </td>
                           </tr>

                        <?php 
                           $no++;
                           }
                        ?>

                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>




   

      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   </body>
</html>