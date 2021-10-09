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

<?php include_once("php/header.php") ?>

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
