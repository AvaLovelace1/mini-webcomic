<?php
include_once("./php/databasearchive.php");
/**
 * @var array $episodes_list
 */
?>

<section class="my-3 container">
    <div class="row justify-content-center">
        <div class="col m-3">
            <h1>Archive</h1>
            <p>Hover over a comic to see the date it was posted.</p>
            <?php foreach ($episodes_list as $episode): ?>
                <h2>
                    <a href="index.php?comic=<?= get_id($episode[0]) ?>" title="<?= get_publish_date($episode[0]) ?>">
                        <?= get_title($episode[0]) ?>
                    </a>
                </h2>
                <p>
                    <?php foreach ($episode as $comic): ?>
                        <a href="index.php?comic=<?= get_id($comic) ?>" title="<?= get_publish_date($comic) ?>">
                            Page <?= get_page_number($comic) ?></a>
                    <?php endforeach; ?>
                </p>
            <?php endforeach; ?>
        </div>
    </div>
</section>