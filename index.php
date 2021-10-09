<?php
include_once("./php/database.php");
/**
 * @var int $curr_comic
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
<?php include_once("php/content.php") ?>
<?php include_once("php/footer.php") ?>
<?php include_once("php/tail.php") ?>

</body>
</html>
