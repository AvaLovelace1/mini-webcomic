<?php
include_once("./php/database.php");
/**
 * @var int $curr_comic
 */
?>

<section id="comic" class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <?php include("php/comicnav.php"); ?>
            <img class="img-fluid" src="<?= get_filepath($curr_comic) ?>"
                 alt="<?= get_alt($curr_comic) ?>" title="<?= get_hover($curr_comic) ?>"
            />
            <?php include("php/comicnav.php"); ?>
            <div class="mb-3">
                <h1><?= get_title($curr_comic) ?> - Page <?= get_page_number($curr_comic) ?></h1>
            </div>
        </div>
    </div>
</section>
