<?php 

   include '../koneksi.php';
   include 'navbar.php';

   $id_pasien = $_GET['id_pasien'];

   $query = mysqli_query($koneksi, "SELECT * FROM covid WHERE id_pasien = '$id_pasien'");
   $pasien = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="aset/style.css">
   <title>Form-Edit | Karantina.in</title>
</head>
<body>
   <div class="container">
      <div class="row mt-4">
         <div class="col-md">
            <center>
               <div class="card">
                  <div class="card-header">
                     <h2 class="card-title">
                        Form Edit Data Pasien ODP
                     </h2>
                  </div>
                  <!-- akhir Card Header -->

                  <!-- Awal Card Body -->
                  <div class="card-body">
                     <form action="proses-edit.php" method="post">
                        <table class="table">
                           <input type="hidden" name="id_pasien" value="<?= $pasien['id_pasien']; ?>">

                           <tr>
                              <th>Nama</th>
                              <td><input type="text" name="nama" value="<?= $pasien['nama']; ?>" required></td>
                           </tr>
                           <tr>
                              <th>Jenis Kelamin</th>
                              <td>
                              <select name="jenis_kelamin" required style="width: 80%">
                                 <option value="<?= $pasien['jenis_kelamin'] ?>"><?= $pasien['jenis_kelamin'] ?></option>
                                 <option value="Laki-laki">Laki-laki</option>
                                 <option value="Perempuan">Perempuan</option>
                              </select>
                              </td>
                           </tr>

                           <tr>
                              <th>Umur</th>
                              <td><input type="number" name="umur" value="<?= $pasien['umur'] ?>" required></td>
                           </tr>

                           <tr>
                              <th>Alamat</th>
                              <td><input type="text" name="alamat" value="<?= $pasien['alamat'] ?>" required></td>
                           </tr>

                           <tr>
                              <th>Suhu</th>
                              <td><input type="number" name="suhu" value="<?= $pasien['suhu'] ?>" required></td>
                           </tr>

                           <tr>
                              <th></th>
                              <td>
                                 <button type="submit" class="btn btn-outline-primary" name="edit">Edit</button>
                                 <a href="index.php"></a>
                              </td>
                           </tr>
                        </table>
                     </form>
                  </div>
               </div>
            </center>
         </div>
      </div>
   </div>
</body>
</html>