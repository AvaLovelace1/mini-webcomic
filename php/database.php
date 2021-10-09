<?php

const SERVER_NAME = "localhost";
const USERNAME = "testuser";
const PASSWORD = "testpassword";
const DB_NAME = "miniwebcomic";
const COMICS_DIR = "comics/";

$conn = new mysqli(SERVER_NAME, USERNAME, PASSWORD, DB_NAME);

function get_comic($page): array
{
    global $conn;
    return $conn->query(
        "SELECT * FROM comics
        INNER JOIN episodes ON episodes.id=comics.episode_id
        WHERE comics.id=" . $page
    )->fetch_assoc();
}

function get_id($comic): int
{
    return $comic["id"];
}

function get_episode_id($comic): int
{
    return $comic["episode_id"];
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
