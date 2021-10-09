<?php
include_once("./php/database.php");
/**
 * @var int $total_pages
 * @var int $curr_page
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>

    <title>Mini Webcomic</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

    <!-- Custom CSS styles -->
    <link href="css/style.css" rel="stylesheet"/>

</head>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="index.php">A Webcomic</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
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

<?php $c = get_comic($curr_page); ?>

<!-- Comic -->
<section id="comic" class="container">
    <div class="row justify-content-center">
        <div class="col-lg-9 col-xl-8">
            <?php include("php/comicnav.php"); ?>
            <img class="img-fluid" src="<?= get_filepath($c) ?>"
                 alt="<?= get_alt($c) ?>" title="<?= get_hover($c) ?>"
            />
            <?php include("php/comicnav.php"); ?>
            <div class="mb-3">
                <h1><?= get_title($c) ?> | Page <?= get_page_number($c) ?></h1>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="py-3 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white small">Copyright &copy; Your Name 2021</p>
    </div>
</footer>

<?php include_once("php/tail.php") ?>

</body>
</html>
