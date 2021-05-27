<?php 

   include '../koneksi.php';

   $id_pasien = $_GET['id_pasien'];

   $query = mysqli_query($koneksi, "DELETE FROM covid WHERE id_pasien = '$id_pasien'");
   
   if($query > 0) {

      echo 
         "<script> 
            alert('Hei, Data Berhasil Dihapus'); 
            document.location.href='index.php';
         </script>";

   } else {

      echo 
         "<script> 
            alert('Yah, Data Gagal Dihapus'); 
            document.location.href='index.php';
         </script>";

   }

?>