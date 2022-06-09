<?php

class CardsController extends eCards{

    public function showAlleCards(){

        $datas = $this->getAlleCards();
        foreach ((array) $datas as $data) {

            ?>
                <div class="card m-1" style="width: 18rem;">
                    <img class="card-img-top" src=<?=$data['cardImage']?> alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?=$data['cardName']?></h5>
                        <input type="text" name="description" placeholder="Description">
                        <a href="#" class="btn btn-primary">Send</a>
                    </div>
                </div>


            <?php
        }

    }

    public function showAllCardsAdmin(){
        $datas = $this->getAlleCards();
        foreach ((array) $datas as $data) {

            ?>
                <div class="card m-1" style="width: 18rem;">
                    <img class="card-img-top" src=<?=$data['cardImage']?> alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?=$data['cardName']?></h5>
                        <p class="card-text"><?=$data['description']?></p>
                        <a href="./delete/delete-card.php?id=<?=$data["ID"]?>" class="btn btn-danger">Delete</a>
                    </div>
                </div>


            <?php
        }
    }

    public function deleteCard($id){
            
        $statement = $this->connect()->prepare("DELETE FROM ecards WHERE ID = :id");

        $statement->bindValue("id", $id, PDO::PARAM_INT);

        $result = $statement->execute();

        if ($result) {
            return true;
        }
        else{
           return false;
        }
    }

}
?>