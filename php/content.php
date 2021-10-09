<?php
include_once("./php/database.php");
/**
 * @var int $curr_comic
 */
?>

<section id="comic" class="my-3 container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <?php include("php/comicnav.php"); ?>
            <img class="img-fluid" src="<?= get_filepath($curr_comic) ?>"
                 alt="<?= get_alt($curr_comic) ?>" title="<?= get_hover($curr_comic) ?>"/>
            <?php include("php/comicnav.php"); ?>
            <div class="comic-info m-3">
                <h1><?= get_title($curr_comic) ?> - Page <?= get_page_number($curr_comic) ?></h1>
                <p>
                    <strong>Published:</strong> <?= get_publish_date($curr_comic) ?><br/>
                    <strong>Featuring:</strong> <?= get_featured_characters($curr_comic) ?><br/>
                </p>
            </div>
        </div>
    </div>
</section>
