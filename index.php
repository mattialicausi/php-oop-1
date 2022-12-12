<?php

// includo Movie.php nella index
include_once __DIR__ . '/Models/Movie.php';

// classe in oggetto

// oggetto 1

$description1 = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus soluta nam explicabo animi rerum consequatur sit quia aut maxime voluptas.";
$image1 = "https://i0.wp.com/www.badtaste.it/cinema/wp-content/uploads/sites/1/2022/11/avatar-2-la-via-dellacqua-poster.jpg?fit=1200%2C1501&quality=85&strip=all&ssl=1";


$imgCast1 = "https://movieplayer.net-cdn.it/t/images/2020/01/27/sam-worthington_jpg_400x0_crop_q85.jpg";
$cast1 = new Cast("Sam", "Worthington", 46, "Jake Sully", $imgCast1, "American");
$genres1 = new Genres("Science");


$movie1 = new Movie("Avatar 2", $genres1, $description1, "06/12/2022", $image1, "American", 5, $cast1);


var_dump($movie1);
echo 'Il film e: ' .$movie1->popular;

echo "<br><br>";



// oggetto 2 

$description2 = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus soluta nam explicabo animi rerum consequatur sit quia aut maxime voluptas.";
$image2 = "https://pad.mymovies.it/filmclub/2020/02/199/locandinapg2.jpg";


$imgCast2 = "https://m.media-amazon.com/images/M/MV5BZjdkYjg1NzMtOTY2YS00ZWI1LWEwZWYtOTU1YTM2ODA2ZWY5XkEyXkFqcGdeQXVyMTM1MjAxMDc3._V1_.jpg";
$cast2 = new Cast("Chris", "Pratt", 43, "Owen Grady", $imgCast2, "American");
$genres2 = new Genres("Science");


$movie2 = new Movie("Jurassic World", $genres2, $description2, "23/05/2022", $image2, "American", 3, $cast2);

var_dump($movie2);
echo 'Il film è: ' . $movie2->popular;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js" defer></script>
    <title>OOP</title>
</head>
<body>
    <header>
        <h1 class="text-center p-4">
            Movies
        </h1>
    </header>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <img class="img-fluid cover-film" src="<?php echo $movie1->image ?>" alt="<?php echo $movie1->title ?>">
                    <div class="container_card">
                        <h3>
                            <?php echo $movie1->title ?>
                        </h3>
                        <div>
                            <?php echo $movie1->genres->genres1 ?>
                        </div>
                        <div>
                            <?php echo $movie1->description ?>
                        </div>
                        <div>
                            Uscito il: <?php echo $movie1->releaseDate ?>
                        </div>
                        <div class="container_cast p-4">
                            <img class="img-fluid img-cast" src="<?php echo $movie1->cast->image ?>" alt="<?php echo $movie1->title ?>">
                            <div class="container-info">
                                <div>Name: <?php echo $movie1->cast->name ?></div>
                                <div>Surname: <?php echo $movie1->cast->surname ?></div>
                                <div><?php echo $movie1->cast->yearsOld ?> years old</div>
                                <div>Role: <?php echo $movie1->cast->role ?></div>
                                <div>Nationality: <?php echo $movie1->cast->nationality ?></div>
                            </div>

                        </div>
                    </div>
                </div>



                <div class="col-6">
                    <img class="img-fluid cover-film" src="<?php echo $movie2->image ?>" alt="<?php echo $movie2->title ?>">
                    <div class="container_card">
                        <h3>
                            <?php echo $movie2->title ?>
                        </h3>
                        <div>
                            <?php echo $movie2->genres->genres1 ?>
                        </div>
                        <div>
                            <?php echo $movie2->description ?>
                        </div>
                        <div>
                            Uscito il: <?php echo $movie2->releaseDate ?>
                        </div>
                        <div class="container_cast p-4">
                            <img class="img-fluid img-cast" src="<?php echo $movie2->cast->image ?>" alt="<?php echo $movie2->title ?>">
                            <div class="container-info">
                                <div>Name: <?php echo $movie2->cast->name ?></div>
                                <div>Surname: <?php echo $movie2->cast->surname ?></div>
                                <div><?php echo $movie2->cast->yearsOld ?> years old</div>
                                <div>Role: <?php echo $movie2->cast->role ?></div>
                                <div>Nationality: <?php echo $movie2->cast->nationality ?></div>
                            </div>

                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </main>

    <footer class="text-center p-4">
        Made by Mattia Li Causi
    </footer>
</body>
</html>