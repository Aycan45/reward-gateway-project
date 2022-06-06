<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>eCard sending system</title>
</head>
<body>
    <?php
        include('./includes/header.inc.php');
    ?>
    <div class="row m-2">
    <?php 
        include("./classes/databasehelper.class.php");
        include("./classes/eCards.class.php");
        include("./controllers/cards.controller.php");

        $ecards = new CardsController;

        $ecards->showAlleCards();
    
    ?>
    </div>
</body>
</html>