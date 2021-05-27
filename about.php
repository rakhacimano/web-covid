<?php 

   include 'header.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About Me!</title>

   <style>
      .jumbotron{
         background-size: cover;
      }

      body{
         background-color: #acacac;
      }

      .card{
         text-align: center;
         margin: 0 auto;
      }

      .card-img-top{
         padding: 5px;
         background-color: #acacac;
         
      }
      

   </style>

</head>
<body>   
   <div class="jumbotron jumbotron-fluid" style="background-image: url(rakha.jpg)">
      <div class="container">
         <h1 class="display-4" style="font-size: 90px; font-weight: 500;">About Me</h1>
      </div>
   </div>
      <div class="card" style="width: 18rem;">
         <img src="rakha.jpg" class="card-img-top" alt="">
         <div class="card-body">
            <ul class="list-group list-group-flush">
               <li class="list-group-item">Rakha Putra Pratama</li>
               <li class="list-group-item">Pelajar | SMK Telkom Malang</li>
               <li class="list-group-item">Dampit, Malang</li>
            </ul>
         </div>
      </div>
</body>
</html>

<?php 

   include 'tujuan/footer.php';

?>