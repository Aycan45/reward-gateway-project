<?php 
    session_start();

    include('./includes/header.inc.php');
?>
<body>
    
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