<?php

/*
 * Simple JSON generation from static array
 * Author: Ravi Tamada
 * web: www.androidhive.info
 */

include_once './data.php';

// check if song id is posted as GET param
if (isset($_GET["album"]) && $_GET["album"] != "" && isset($_GET["song"]) && $_GET["song"] != "") {
    $album_id = $_GET["album"];
    $song_id = $_GET["song"];
    // get the album
    $album = array_key_exists($album_id, $album_tracks) ? $album_tracks[$album_id] : NULL;
    if ($album != NULL) {
        // album found 
        // get the song
        $song = array_key_exists($song_id - 1, $album["songs"]) ? $album["songs"][$song_id - 1] : NULL;
        $song["album_id"] = $album_id;
        $song["album"] = $album["album"];
        echo json_encode($song);
    } else {
        // no album found
        echo "no album";
    }
}
?>
