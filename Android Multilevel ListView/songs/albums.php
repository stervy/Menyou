<?php

/*
 * Simple JSON generation from static array
 * Author: Ravi Tamada
 * web: www.androidhive.info
 */

include_once './data.php';
$albums = array();

// looping through each album
foreach ($album_tracks as $album) {
    $tmp = array();
    $tmp["id"] = $album["id"];
    $tmp["name"] = $album["album"];
    $tmp["songs_count"] = count($album["songs"]);

    // push album
    array_push($albums, $tmp);
}

// printing json
echo json_encode($albums);
?>
