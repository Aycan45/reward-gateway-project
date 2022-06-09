<?php 
    include("./classes/databasehelper.class.php");
    include("./classes/eCards.class.php");
    include("./controllers/cards.controller.php");


    if (isset($_POST['add'])) {

        $card = new CardsController;
        
        $name = $_POST['title'];
        $description = $_POST['description'];

        $imageName = $_FILES['myFile']['name'];

        $filePath = 'images/' . $imageName;

        $extension = pathinfo($imageName, PATHINFO_EXTENSION);

        $file = $_FILES['myFile']['tmp_name'];

        if (!in_array($extension, ['jpg', 'jpeg', 'png'])) {
            echo "Your file extension must be .jpg, .jpeg, .png";
        }
        else{
            if (move_uploaded_file($file, $filePath)) {
            
                $card->addCard($name, $filePath, $description);
                echo '<script>alert(File uploaded succesfully)</script>';
                header('refresh: 2 url=./add-card.php');
            }
            else{
                echo "<script>alert(File not uploaded succesfully)</script>";
                header('refresh: 2 url=./add-card.php');
            }
        }
    }



?>