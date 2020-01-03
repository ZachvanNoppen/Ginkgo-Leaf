<?php
include 'scripts/get_gallery.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Cousine|Merienda&display=swap" rel="stylesheet">

    <title>Landing</title>
  </head>
  <body class="">
    <div class="navbar transparent navbar-inverse navbar-fixed-top">
        <nav class=" w-100 navbar-inner d-flex flex-row justify-content-around w-75">
          <div class="d-flex row-md4 col-sm-4 justify-content-center align-items-center"><a class="nav-text" href="contributors.html">Contribututors</a></div>
          <div class="d-flex row-md4 col-sm-4 justify-content-center" href="#top"><img class=" nav-logo" src="media\images\logo-no-text.png" ></div>
          <div class="d-flex row-md4 col-sm-4 justify-content-center align-items-center"><a class="nav-text" href="submit.html">Submit Work</a></div>
        </nav>
    </div>
   <div class="container d-flex w-75">
     <div class="container desc mb-5">
       <h1>The Project...</h1>
       <p class="text-right">Ginko Leaf is a projec that...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tellus est, luctus quis pretium vitae, tempus ac nisl. Aliquam aliquam tortor tortor, nec tempor mi eleifend sed. Nunc vel gravida urna. Fusce nec neque velit. Etiam commodo semper metus. In hac habitasse platea dictumst. Donec id mi velit. Praesent a vestibulum tortor, sit amet eleifend mi. Duis eu dui eget ipsum vestibulum scelerisque in et nisi. Aliquam venenatis tincidunt mollis. Integer ultricies diam ac est eleifend, sed vestibulum erat placerat. Maecenas imperdiet tellus vitae purus tempus, nec semper lectus convallis. Nam eu justo ac urna commodo dignissim eget sed nulla. Proin cursus mauris quis nisi feugiat, sit amet consequat neque sagittis.
     </div>
   </div>
   <div class="row module-container">
     <div class="d-flex row-sm-4 justify-content-center page-modules2 w-100 align-items-center">
       <button type="button" class="btn btn-outline-secondary btn-contrib h-25">View Gallery</button>
     </div>
     <div class="d-flex row-sm-4 justify-content-center page-modules w-100 align-items-center">
         <button type="button" class="btn btn-outline-secondary btn-contrib h-25">See Contributors</button>
     </div>
     <div class="d-flex row-sm-4 justify-content-center page-modules3 w-100 align-items-center">
        <button type="button" class="btn-contrib btn btn-outline-secondary  h-25">Submit Art</button>
     </div>
   </div>

   <div class = "row module-container">
     <!-- Do some JS  -->
     <p>1.0.2<br>
       <?php
       echo $debug;
       foreach($data as $value){
         echo $result['title'];
       }
       $result = "hi";
       echo $result;
       ?>
     </p>
   </div>
  </body>



  <footer >
    <div class="container">
      <div class="row text-center d-flex justify-content-center pt-5 mb-3">
        <div class="col-md-2 mb-3">
          <h6 class=" font-weight-bold">
            <a href="#!">Contributors</a>
          </h6>
        </div>
        <div class="col-md-2 mb-3">
          <h6 class="font-weight-bold">
            <a href="#top">To the Top</a>
          </h6>
        </div>
        <div class="col-md-2 mb-3">
          <h6 class=" font-weight-bold">
            <a href="#!">Submit Work</a>
          </h6>
        </div>

      </div>
      <!-- Grid row-->
      <hr class="rgba-white-light" style="margin: 0 15%;">

      <!-- Grid row-->
      <div class="row d-flex text-center justify-content-center mb-md-0 mb-4">

        <!-- Grid column -->
        <div class="col-md-8 col-12 mt-5">
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
            accusantium doloremque laudantium, totam rem
            aperiam, eaque ipsa quae ab illo inventore veritatis et quasi</p>
        </div>

      </div>
    <!-- Copyright -->
    <div class="footer-copyright text-center py-5">© 2018 Copyright:
      <a href="https://zacharyvannoppen.com/"> Zachary van Noppen</a>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </footer>
</html>

<!--
Redirect
< ?php
header("Location: index.html");
exit;
?> -->
