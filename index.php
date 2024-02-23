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
  <title>Document</title>
</head>
<body>
  <main>
    <div class="container">
      <ul>
        <?php foreach($movies as $movie) :?>
          <li>Name: <?php echo $movie->name; ?>, Genre: <?php echo $movie->genre; ?>, Duration: <?php echo $movie->getFormattedTime() ?>h, Platform: <?php echo $movie->platform; ?> <?php echo $movie->director->name ?></li>
        <?php endforeach ?>
      </ul>
    </div>
  </main>
</body>
</html>