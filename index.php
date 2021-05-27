<?php 

   include 'header.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

      <!-- Font Poppins -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">

      <!-- Font awesome -->
      <link rel="stylesheet" href="http://localhost/siperpus/aset/fontawesome/css/all.min.css">

      <!-- CSSku -->
      <link rel="stylesheet" href="style.css">

      <title>Karantina.in | E-Karantina</title>
   </head>
   <body>

      <div class="preloader">
         <div class="counter">0</div>
      </div>

         <!-- Jumbotron -->

         <div class="jumbotron jumbotron-fluid">
            <div class="container">
               <h1 class="display-4">Quarantine bersama <span>Karantina.in</span> <br><span>bantu</span> negara <span>memutus</span> rantai <br>--penyebaran--</h1>
            </div>
         </div>

         <!-- Akhir Jumbotron -->

         <!-- Container -->

         <div class="container">

            <!-- info panel -->

            <div class="row justify-content-center">
               <div class="col-lg-12 info-panel">
                  <div class="row">
                     <div class="col-lg">
                        <img src="trusted.png" alt="trusted" class="float-left">
                        <h4>Trusted</h4>
                           <p>Terpercaya oleh ribuan pasien. Daftar segera untuk menikmati layanan karantina online yang sesungguhnya hanya dengan duduk di rumah saja</p>
                     </div>
                     <div class="col-md">
                        <img src="care.png" alt="care" class="float-left">
                        <h4>Care</h4>
                           <p>Rasakan kepedulian kami. Mencoba untuk mengembangkan layanan yang pas untuk masyarakat. Aplikasi ini gratis untuk semua kalangan masyarakat</p>
                     </div>
                     <div class="col-md">
                        <img src="comfy.png" alt="comfy" class="float-left">
                        <h4>Comfy</h4>
                           <p>Kenyamanan menurut kami adalah kunci. Pasien akan merasa bahagia apabila dirinya nyaman, kami berusaha untuk membuat para pasien nyaman.</p>
                     </div>
                     <div class="col-md">
                        <img src="secured.png" alt="secured" class="float-left">
                        <h4>Secured</h4>
                           <p>Privasi? Tenang kami sudah menciptakan aplikasi sederhana berikut dengan enkripsi sehingga data data dari para pasien akan aman dari ancaman.</p>
                     </div>
                  </div>
               </div>
            </div>

            <!-- akhir info panel -->

            <!-- Awal Dampak -->

            <div class="row dampak">
               <div class="col-lg-6">
                  <img src="dampak.jpg" alt="Dampak" class="img-fluid">
               </div>
               <div class="col-lg-6">
                  <h2><span>Bantu</span> negara dengan rebahan <span>#dirumahaja</span></h2>
                  <p>Menanggapi himbauan dari pemerintah dan menteri kesehatan RI untuk tetap menjaga jarak dan tetap di rumah aja. Oleh karena itu kami mengembangkan aplikasi ini sebagai layanan masyarakat. Pemantauan bagi pasien ODP yang memiliki resiko terpapar SARS-Cov2. Sebagai upaya preventif maka dibentuklah aplikasi Pemantauan tersebut.</p>
                  <a href="http://localhost/tugas_akhir/login-user" class="btn btn-info tombol daftar">Daftar</a>
               </div>
            </div>

            <!-- Akhir Dampak -->

            <!-- Awal Testimoni -->

            <section class="testimoni">
               <div class="row justify-content-center">
                  <div class="col-lg-8">
                     <h5>"Kami sangat percaya dengan kualitas Karantina.in. Mereka membuat saya nyaman dan kami bisa melewati masa pemantauan dengan nyaman"</h5>
                  </div>
               </div>

               <div class="row justify-content-center">
                  <div class="col-lg-6 justify-content-center d-flex">
                     <figure class="figure">
                        <img src="gambar.jpg" class="figure-img img-fluid rounded-circle" alt="testi 1">
                     </figure>

                     <figure class="figure">
                        <img src="gambar.jpg" class="figure-img img-fluid rounded-circle utama" alt="testi 2">
                        <figcaption class="figure-caption">
                           <h5>Toldo</h5>
                           <p>Pasien Asal Malang</p>
                        </figcaption>
                     </figure>

                     <figure class="figure">
                        <img src="gambar.jpg" class="figure-img img-fluid rounded-circle" alt="testi 3">
                     </figure>
                  </div>
               </div>

            </section>

            <!-- Akhir Testimoni -->
         
         </div>
            

   


      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

      <!-- Counter Loading -->

      <script type="text/javascript">
         function counter(){
            var count = setInterval(function(){
               var c = parseInt($('.counter').text());
               $('.counter').text((++c).toString());
               if (c == 100) {
                  clearInterval(count);
                  $('.counter').addClass('hide')
                  $('.preloader').addClass('active')
               }
            },60)
         }
         counter()
      </script>

      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   </body>
</html>

<?php 

   include 'tujuan/footer.php';

?>