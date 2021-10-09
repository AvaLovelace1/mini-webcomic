<?php
include_once("database.php");
/**
 * @var $conn
 */

$total_pages = intval(
    $conn->query(
        "SELECT COUNT(*) FROM (SELECT id FROM comics WHERE publish_date <= CURDATE()) as query"
    )->fetch_assoc()["COUNT(*)"]
);
$curr_page = min($_GET["comic"] ?? $total_pages, $total_pages);

$first_page = 1;
$last_page = $total_pages;
$prev_page = max($curr_page - 1, $first_page);
$next_page = min($curr_page + 1, $last_page);
$random_page = rand($first_page, $last_page);

$curr_comic = get_comic($curr_page);

$episode_first_page = intval(
    $conn->query(
        "SELECT id FROM comics WHERE page_number=1 AND episode_id=" . $curr_comic["episode_id"]
    )->fetch_assoc()["id"]
);
