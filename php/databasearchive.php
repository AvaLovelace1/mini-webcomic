<?php
include_once("database.php");
/**
 * @var $conn
 */

$comics_list = $conn->query(
    "SELECT comics.id, episode_id, title, page_number, publish_date
    FROM comics INNER JOIN episodes ON episodes.id=comics.episode_id
    WHERE publish_date <= CURDATE()
    ORDER BY episodes.id DESC, comics.id"
)->fetch_all(MYSQLI_ASSOC);

$episodes_list = make_episodes_list($comics_list);

function make_episodes_list($comics_list): array
{
    $ret = [];
    $i = 0;
    foreach ($comics_list as $j => $c) {
        if ($j>0 && get_episode_id($c) != get_episode_id($comics_list[$j-1])) {
            $ret[] = array_slice($comics_list, $i, $j-$i);
            $i = $j;
        }
    }
    $ret[] = array_slice($comics_list, $i, count($comics_list)-$i);
    return $ret;
}
