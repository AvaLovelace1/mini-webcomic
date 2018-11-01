<!DOCTYPE html>

<?php require("./php/comiclist.php"); ?>

<html lang="en">
  
  <head>
    
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    
    <title>Webcomic Template</title>
    
    <!-- Bootstrap CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    
    <!-- Custom CSS styles -->
    <link href="css/style.css" rel="stylesheet"/>
    
  </head>
  
  <body id="page-top">
    
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="index.php">A Webcomic</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Archive</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    <!-- Comic -->
    <section id="comic">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-9 col-xl-8">
            <!-- Comic title -->
            <div class="mb-3">
              <h4 class="text-center"><?php echo($comicList[CURR_N - 1]->__get(title)) ?></h4>
              <?php
                if ($comicList[CURR_N - 1]->__get(totalPages) > 1) {
                  echo("<div class='text-center'>" . "Page " . $comicList[CURR_N - 1]->__get(page) . "</div>");
                }
              ?>
            </div>
            <?php require("./php/comicnav.php"); ?>
            <!-- Comic image-->
            <img class="img-fluid" src=<?php echo($comicList[CURR_N - 1]->__get(url))?> alt=<?php echo("'" . $comicList[CURR_N - 1]->__get(alt) . "'")?> title=<?php echo("'" . $comicList[CURR_N - 1]->__get(hover) . "'")?> />
              <?php require("./php/comicnav.php"); ?>
            </div>
        </div>
      </div>     
    </section>
    
    <!-- Footer -->
    <footer class="py-3 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white small">Copyright &copy; Your Name 2018</p>
      </div>
    </footer>
    
    <!-- Bootstrap JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
  </body>
  
</html>
