<?php
    include_once('./includes/admin.header.inc.php');
    include("./classes/databasehelper.class.php");
    include("./classes/eCards.class.php");
    include("./controllers/cards.controller.php");

    $ecards = new CardsController;
?>
<body>
    <div class="row m-2">
        <?php
            $ecards->showAllCardsAdmin();
        ?>
    </div>
</body>