<?php

const SERVER_NAME = "localhost";
const USERNAME = "testuser";
const PASSWORD = "testpassword";
const DB_NAME = "miniwebcomic";
const COMICS_DIR = "comics/";

$conn = new mysqli(SERVER_NAME, USERNAME, PASSWORD, DB_NAME);

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

function get_comic($page): array
{
    global $conn;
    return $conn->query(
        "SELECT * FROM comics
        INNER JOIN episodes ON episodes.id=comics.episode_id
        WHERE comics.id=" . $page
    )->fetch_assoc();
}

function get_title($comic): string
{
    return $comic["title"];
}

function get_page_number($comic): int
{
    return $comic["page_number"];
}

function get_filepath($comic): string
{
    $p = pathinfo($comic["filename"]);
    return COMICS_DIR . $p["filename"] . "_" . zero_pad($comic["page_number"]) . "." . $p["extension"];
}

function zero_pad($str): string
{
    return str_pad($str, 3, "0", STR_PAD_LEFT);
}

function get_alt($comic): string
{
    return get_title($comic) . " page " . get_page_number($comic);
}

function get_hover($comic): string
{
    return addslashes($comic["hover"]);
}

function get_publish_date($comic): string
{
    return $comic["publish_date"];
}

function get_featured_characters($comic): string
{
    return $comic["featured_characters"];
}
