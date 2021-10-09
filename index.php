<?php
include_once("./php/database.php");
/**
 * @var int $curr_comic
 * @var int $curr_page
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mini Webcomic - <?= get_title($curr_comic) ?> Page <?= get_page_number($curr_comic) ?></title>
    <?php include_once("php/head.php") ?>
</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="index.php">Mini Webcomic</a>
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
                <h1><?= get_title($c) ?> - Page <?= get_page_number($c) ?></h1>
            </div>
        </div>
    </div>
</section>

<?php include_once("php/footer.php") ?>
<?php include_once("php/tail.php") ?>

</body>
</html>
