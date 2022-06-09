<?php
include("../classes/databasehelper.class.php");
include("../classes/eCards.class.php");
include("../controllers/cards.controller.php");


if (isset($_GET['id'])) {
    
    $id = intval($_GET["id"]);

    $card = new CardsController;

    $result = $card->deleteCard($id);

    if ($result) {

        echo "<script>alert('Card deleted succesfully')</script>";

        header("location: ../admin.php");
    }
    else{
        echo "<script>alert('Card not deleted')</script>";
        //echo "Card not deleted";

        header("location: ../admin.php");
    }

}


?>