<?php
include_once("./php/database.php");
/**
 * @var int $first_page
 * @var int $prev_page
 * @var int $next_page
 * @var int $last_page
 * @var int $random_page
 */
?>

<div class="container p-0">
    <div class="row text-center g-0">
        <div class="col">
            <a href="index.php?comic=<?= $first_page ?>" class="btn btn-light" role="button">First</a>
        </div>
        <div class="col">
            <a href="index.php?comic=<?= $prev_page ?>" class="btn btn-light" role="button">Prev</a>
        </div>
        <div class="col">
            <a href="index.php?comic=<?= $random_page ?>" class="btn btn-light" role="button">Random</a>
        </div>
        <div class="col">
            <a href="index.php?comic=<?= $next_page ?>" class="btn btn-light" role="button">Next</a>
        </div>
        <div class="col">
            <a href="index.php?comic=<?= $last_page ?>" class="btn btn-light" role="button">Last</a>
        </div>
    </div>
</div>
