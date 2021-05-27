<?php 

   include '../koneksi.php';

   if (isset($_POST['edit'])){

      $id_pasien        = $_POST['id_pasien'];
      // date_default_timezone_set('Asia/Jakarta');
      // $tanggal_kontrol  = date("Y-m-d H:i:s");tanggal_kontrol   = '$tanggal_kontrol',
      $nama             = $_POST['nama'];
      $jenis_kelamin    = $_POST['jenis_kelamin'];
      $umur             = $_POST['umur'];
      $alamat           = $_POST['alamat'];
      $suhu             = $_POST['suhu'];

      $query = "UPDATE covid SET nama              = '$nama',
                                 jenis_kelamin     = '$jenis_kelamin',
                                 umur              = '$umur',
                                 alamat            = '$alamat',
                                 suhu              = '$suhu' WHERE id_pasien = '$id_pasien'";

      $res     = mysqli_query($koneksi, $query);
      $count   = mysqli_affected_rows($koneksi);

      if ($res > 0) {

         echo 
         "<script>
            alert('Hei, Data Berhasil Diedit');
            document.location.href = 'index.php';
         </script>";

      } else {

         echo 
         "<script>
            alert('Hei, Data Gagal Diedit');
            document.location.href = 'form-tambah.php';
         </script>";

      }

   }

?>