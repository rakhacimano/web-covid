<?php 

   include '../koneksi.php';

   if(isset($_POST['submit'])) {

      date_default_timezone_set('Asia/Jakarta');
      $tanggal_kontrol  = date("Y-m-d H:i:s");
      $nama             = $_POST['nama'];
      $jenis_kelamin   = $_POST['jenis_kelamin'];
      $umur             = $_POST['umur'];
      $alamat           = $_POST['alamat'];
      $suhu             = $_POST['suhu'];

      $query = mysqli_query($koneksi, "INSERT INTO covid (tanggal_kontrol, nama, jenis_kelamin, umur, alamat, suhu) VALUES ('$tanggal_kontrol', '$nama', '$jenis_kelamin', '$umur', '$alamat', '$suhu')");

      if ($query > 0) {

         echo
            "<script>
               alert('Hei, Data Berhasil Ditambah');
               document.location.href = 'index.php';
            </script>";

      } else {

         echo
            "<script>
               alert('Loh, Data Kok Gagal Ditambah!');
               document.location.href = 'form-tambah.php';
            </script>";

      }

   }
   
?>