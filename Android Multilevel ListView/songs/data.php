<?php
/*
 * Simple JSON generation from static array
 * Author: Ravi Tamada
 * web: www.androidhive.info
 */

$album_tracks = array(
    1 => array(
        "id" => 1,
        "album" => "127 Hours",
        "songs" => array(
            array("id" => 1, "name" => "Never Hear Surf Music Again", "duration" => "5:52"),
            array("id" => 2, "name" => "The Canyon", "duration" => "3:01"),
            array("id" => 3, "name" => "Liberation Begins", "duration" => "2:14"),
            array("id" => 4, "name" => "Touch of the Sun", "duration" => "4:39"),
            array("id" => 5, "name" => "Lovely Day", "duration" => "4:16"),
            array("id" => 6, "name" => "Ca Plane Pour Moi", "duration" => "3:00"),
            array("id" => 7, "name" => "Liberation In A Dream", "duration" => "4:06"),
            array("id" => 8, "name" => "If You Love Me (Really Love Me)", "duration" => "3:27"),
            array("id" => 9, "name" => "Acid Darbari", "duration" => "4:21"),
            array("id" => 10, "name" => "R.I.P.", "duration" => "5:11"),
            array("id" => 11, "name" => "Festival", "duration" => "9:26"),
            array("id" => 12, "name" => "If I Rise", "duration" => "4:38"),
            array("id" => 13, "name" => "Liberation", "duration" => "3:11"),
            array("id" => 14, "name" => "Nocturne No. 2 in E flat", "duration" => "4:01")
        )
    ),
    2 => array(
        "id" => 2,
        "album" => "Adele 21",
        "songs" => array(
            array("id" => 1, "name" => "Rolling In The Deep", "duration" => "03:48"),
            array("id" => 2, "name" => "Rumour Has It", "duration" => "03:43"),
            array("id" => 3, "name" => "Turning Tables", "duration" => "04:10"),
            array("id" => 4, "name" => "Don’t You Remember", "duration" => "04:03"),
            array("id" => 5, "name" => "Set Fire To The Rain", "duration" => "04:02"),
            array("id" => 6, "name" => "He Won’t Go", "duration" => "04:38"),
            array("id" => 7, "name" => "Take It All", "duration" => "03:48"),
            array("id" => 8, "name" => "I’ll Be Waiting", "duration" => "04:01"),
            array("id" => 9, "name" => "One And Only", "duration" => "05:48"),
            array("id" => 10, "name" => "Lovesong", "duration" => "05:16"),
            array("id" => 11, "name" => "Someone Like You", "duration" => "04:45")
        )
    ),
    3 => array(
        "id" => 3,
        "album" => "Lana Del Rey - Born to Die",
        "songs" => array(
            array("id" => 1, "name" => "Born to Die", "duration" => "4:46"),
            array("id" => 2, "name" => "Off to the Races", "duration" => "5:00"),
            array("id" => 3, "name" => "Blue Jeans", "duration" => "3:29"),
            array("id" => 4, "name" => "Video Games", "duration" => "4:42"),
            array("id" => 5, "name" => "Diet Mountain Dew", "duration" => "3:43"),
            array("id" => 6, "name" => "National Anthem", "duration" => "3:51"),
            array("id" => 7, "name" => "Dark Paradise", "duration" => "4:03"),
            array("id" => 8, "name" => "Radio", "duration" => "3:35"),
            array("id" => 9, "name" => "Carmen", "duration" => "4:09"),
            array("id" => 10, "name" => "Million Dollar Man", "duration" => "3:50"),
            array("id" => 11, "name" => "Summertime Sadness", "duration" => "4:25"),
            array("id" => 12, "name" => "This Is What Makes Us Girls", "duration" => "4:00")
        )
    ),
    4 => array(
        "id" => 4,
        "album" => "Once",
        "songs" => array(
            array("id" => 1, "name" => "Falling Slowly", "duration" => "4:05"),
            array("id" => 2, "name" => "If You Want Me", "duration" => "3:47"),
            array("id" => 3, "name" => "Broken Hearted Hoover Fixer Sucker Guy", "duration" => "0:52"),
            array("id" => 4, "name" => "When Your Mind's Made Up", "duration" => "3:42"),
            array("id" => 5, "name" => "Lies", "duration" => "3:58"),
            array("id" => 6, "name" => "Gold", "duration" => "3:59"),
            array("id" => 7, "name" => "The Hill", "duration" => "4:34"),
            array("id" => 8, "name" => "Fallen From The Sky", "duration" => "3:24"),
            array("id" => 9, "name" => "Leave", "duration" => "2:46"),
            array("id" => 10, "name" => "Trying To Pull Myself Away", "duration" => "3:35"),
            array("id" => 11, "name" => "All The Way Down", "duration" => "2:38"),
            array("id" => 12, "name" => "Once", "duration" => "3:37"),
            array("id" => 13, "name" => "Say It To Me Now", "duration" => "2:36")
        )
    ),
    5 => array(
        "id" => 5,
        "album" => "Away We Go",
        "songs" => array(
            array("id" => 1, "name" => "All My Days", "duration" => "4:56"),
            array("id" => 2, "name" => "Blue Mind", "duration" => "5:42"),
            array("id" => 3, "name" => "What Is Life", "duration" => "4:24"),
            array("id" => 4, "name" => "Song For You", "duration" => "4:37"),
            array("id" => 5, "name" => "Golden Brown", "duration" => "3:31"),
            array("id" => 6, "name" => "Towards The Sun", "duration" => "4:40"),
            array("id" => 7, "name" => "Meet Me In The Morning", "duration" => "4:22"),
            array("id" => 8, "name" => "Breathe", "duration" => "4:16"),
            array("id" => 9, "name" => "Wait", "duration" => "5:55"),
            array("id" => 10, "name" => "The Ragged Sea", "duration" => "3:20"),
            array("id" => 11, "name" => "Oh! Sweet Nuthin'", "duration" => "7:29"),
            array("id" => 12, "name" => "Orange Sky", "duration" => "6:09"),
            array("id" => 13, "name" => "Crinan Wood", "duration" => "5:45")
        )
    ),
    6 => array(
        "id" => 6,
        "album" => "Eminem Curtain Call",
        "songs" => array(
            array("id" => 1, "name" => "My Name Is", "duration" => "4:28"),
            array("id" => 2, "name" => "The Way I Am", "duration" => "4:51"),
            array("id" => 3, "name" => "Lose Yourself", "duration" => "5:21"),
            array("id" => 4, "name" => "Shake That", "duration" => "4:34"),
            array("id" => 5, "name" => "Sing For The Moment", "duration" => "5:40"),
            array("id" => 6, "name" => "Without Me", "duration" => "4:47"),
            array("id" => 7, "name" => "Like Toy Soldiers", "duration" => "4:51"),
            array("id" => 8, "name" => "The Real Slim Shady", "duration" => "4:44"),
            array("id" => 9, "name" => "Mockingbird", "duration" => "4:11"),
            array("id" => 10, "name" => "Guilty Conscience", "duration" => "3:19"),
            array("id" => 11, "name" => "Cleanin' Out My Closet", "duration" => "4:58"),
            array("id" => 12, "name" => "Just Lose It", "duration" => "4:08"),
            array("id" => 13, "name" => "When I'm Gone", "duration" => "4:40"),
            array("id" => 14, "name" => "Stan", "duration" => "6:21")
        )
    ),
    7 => array(
        "id" => 7,
        "album" => "Bad Meets Evil Eminem",
        "songs" => array(
            array("id" => 1, "name" => "Lighters", "duration" => "5:21"),
            array("id" => 2, "name" => "Fast Lane", "duration" => "3:19"),
            array("id" => 3, "name" => "Above the Law", "duration" => "6:21"),
            array("id" => 4, "name" => "Welcome 2 Hell", "duration" => "4:34"),
            array("id" => 5, "name" => "Take from Me", "duration" => "4:51"),
            array("id" => 6, "name" => "The Reunion", "duration" => "4:44"),
            array("id" => 7, "name" => "A Kiss", "duration" => "3:19"),
            array("id" => 8, "name" => "Echo", "duration" => "6:21"),
            array("id" => 9, "name" => "Lighters", "duration" => "4:40"),
            array("id" => 10, "name" => "Living Proof", "duration" => "3:49"),
            array("id" => 11, "name" => "Loud Noises", "duration" => "3:19")
        )
    ),
    8 => array(
        "id" => 8,
        "album" => "Safe Trip Home",
        "songs" => array(
            array("id" => 1, "name" => "Don't Believe in Love", "duration" => "3:52"),
            array("id" => 2, "name" => "Quiet Times", "duration" => "3:16"),
            array("id" => 3, "name" => "Never Want to Say It's Love", "duration" => "3:34"),
            array("id" => 4, "name" => "Grafton Street", "duration" => "5:56"),
            array("id" => 5, "name" => "It Comes And It Goes", "duration" => "3:26"),
            array("id" => 6, "name" => "Look No Further", "duration" => "3:15"),
            array("id" => 7, "name" => "Us 2 Little Gods", "duration" => "4:48"),
            array("id" => 8, "name" => "The Day Before The Day", "duration" => "4:12"),
            array("id" => 9, "name" => "Let's Do the Things We Normally Do", "duration" => "4:08"),
            array("id" => 10, "name" => "Burnin Love", "duration" => "4:10"),
            array("id" => 11, "name" => "Northern Skies", "duration" => "8:53")
        )
    ),
    9 => array(
        "id" => 9,
        "album" => "No Angel",
        "songs" => array(
            array("id" => 1, "name" => "Here With Me", "duration" => "4:05"),
            array("id" => 2, "name" => "Hunter", "duration" => "3:55"),
            array("id" => 3, "name" => "Don't Think Of Me", "duration" => "4:32"),
            array("id" => 4, "name" => "My Lover's Gone", "duration" => "4:27"),
            array("id" => 5, "name" => "All You Want", "duration" => "3:53"),
            array("id" => 6, "name" => "Thank You", "duration" => "3:36"),
            array("id" => 7, "name" => "Honestly Ok", "duration" => "4:37"),
            array("id" => 8, "name" => "Slide", "duration" => "4:50"),
            array("id" => 9, "name" => "Isobel", "duration" => "3:55"),
            array("id" => 10, "name" => "I'm No Angel", "duration" => "3:55"),
            array("id" => 11, "name" => "My Life", "duration" => "2:59"),
            array("id" => 12, "name" => "Take My Hand", "duration" => "6:50")
        )
    )
);
?>
