<?php
    session_start();

    include_once('./includes/header.inc.php');
    include("./classes/databasehelper.class.php");
    include("./classes/eCards.class.php");
    include("./controllers/cards.controller.php");

    $ecards = new CardsController;
?>
<div class="row m-2">
<?php
    $ecards->showAlleCards();
?>
</div>