<?php
include __DIR__ . '/Models/Movie.php';
$movies = [
    new Movie(" Via Col Vento", "Gone With The Wind", "en", " https://m.media-amazon.com/images/I/51FvKgUQ1lL.jpg", "8.6"),
    new Movie(" Gravity", "Gravity", "en", " https://www.themoviedb.org/t/p/w600_and_h900_bestv2/4pRXqT7wQmoH5sH6Z4WYmbAFG4t.jpg", "7.8"),
    new Movie(" Toy Story - Il Mondo Dei Giocattol", "Toy Story", "it", "https://www.themoviedb.org/t/p/w600_and_h900_bestv2/mGnOtBmpkQ5CndwxeIKDUqkUkre.jpg", "9.0")
]
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP OOP </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <div class="container">
        <h1>Titolo</h1>
        <?php foreach ($movies as $movies) { ?>
            <div class="card">
                <?php echo $movies->image ?>
                <div class="card-body">
                    <h3 class="card-title"> <?php echo $movies->title ?></h3>
                    <h5 class="fs-6"> <?php echo $movies->origine_title ?></h5>

                </div>


            </div>
        <?php } ?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>