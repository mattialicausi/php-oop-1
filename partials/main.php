<?php
?>

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
