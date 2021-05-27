<?php 

   include '../koneksi.php';

   if (isset($_POST['submit'])) {

      $username = $_POST['username'];
      $email    = $_POST['email'];
      $password = $_POST['password'];

      $query = mysqli_query($koneksi, "INSERT INTO admin (username, email, password) VALUES ('$username', '$email', '$password')");

      if ($query > 0) {

         echo 
            "<script>
               alert('Hei, Data Berhasil Ditambah');
               document.location.href = '../login';
             </script>";

      }

   }

?>