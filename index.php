<?php
require_once __DIR__ ."/models/movies.php";
require_once __DIR__ ."/models/director.php";
require_once __DIR__ ."/models/actors.php";
require __DIR__ ."./data/posts.php";  

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&display=swap">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- Css -->
  <link rel="stylesheet" href="style.css">
  <title>Movies</title>
</head>
<body>
    <main>
        <div class="container p-5">
          <h1 class="text-center mb-3">Movies</h1>
            <div class="row">
                <?php foreach($movies as $movie) :?>
                    <div class="col-6 d-flex justify-content-center">
                        <div class="card" style="width: 18rem;">
                            <img src="<?php echo $movie->image; ?>" class="card-img-top img-fluid" alt="<?php echo $movie->name; ?>">
                            <div class="card-body">
                                <h4 class="card-title text-center"><?php echo $movie->name; ?></h4>
                                <p class="card-text"><strong>Genre:</strong> <?php echo $movie->genre; ?></p>
                                <p class="card-text"><strong>Duration:</strong> <?php echo $movie->getFormattedTime(); ?>h</p>
                                <p class="card-text"><strong>Platform:</strong> <?php echo $movie->platform; ?></p>
                                <p class="card-text"><strong>Director:</strong> <?php echo $movie->director->name; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </main>
</body>

</html>