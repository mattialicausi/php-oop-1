<?php

// includo Movie.php nella index
include_once __DIR__ . '/Models/Movie.php';

// classe in oggetto

// oggetto 1

$description1 = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus soluta nam explicabo animi rerum consequatur sit quia aut maxime voluptas.";
$image1 = "https://i0.wp.com/www.badtaste.it/cinema/wp-content/uploads/sites/1/2022/11/avatar-2-la-via-dellacqua-poster.jpg?fit=1200%2C1501&quality=85&strip=all&ssl=1";


$imgCast1 = "https://movieplayer.net-cdn.it/t/images/2020/01/27/sam-worthington_jpg_400x0_crop_q85.jpg";
$cast1 = new Cast("Sam", "Worthington", 46, "Jake Sully", $imgCast1, "American");

$movie1 = new Movie("Avatar 2", "science", $description1, "06/12/2022", $image1, "American", 5, $cast1);

var_dump($movie1);
echo 'Il film e: ' .$movie1->popular;

echo "<br><br>";

// oggetto 2 

$description2 = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus soluta nam explicabo animi rerum consequatur sit quia aut maxime voluptas.";
$image2 = "https://pad.mymovies.it/filmclub/2020/02/199/locandinapg2.jpg";

$imgCast2 = "https://m.media-amazon.com/images/M/MV5BZjdkYjg1NzMtOTY2YS00ZWI1LWEwZWYtOTU1YTM2ODA2ZWY5XkEyXkFqcGdeQXVyMTM1MjAxMDc3._V1_.jpg";
$cast2 = new Cast("Chris", "Pratt", 43, "Owen Grady", $imgCast2, "American");

$movie2 = new Movie("Jurassic World", "science", $description2, "23/05/2022", $image2, "American", 3, $cast2);

var_dump($movie2);
echo 'Il film è: ' . $movie2->popular;

?>