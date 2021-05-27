<?php 

   include '../koneksi.php';

   if (isset($_POST['submit'])) {

      $username = $_POST['username'];
      $email    = $_POST['email'];
      $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

      $query = mysqli_query($koneksi, "INSERT INTO admin_user (username, email, password) VALUES ('$username', '$email', '$password')");

      if ($query > 0) {

         echo 
            "<script>
               alert('Hei, Data Berhasil Ditambah');
               document.location.href = '../login-user';
             </script>";

      }

   }

?>