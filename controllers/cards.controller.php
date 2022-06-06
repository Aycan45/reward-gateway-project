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
                        <p class="card-text"><?=$data['description']?></p>
                        <a href="#" class="btn btn-primary">Send</a>
                    </div>
                </div>


            <?php
        }

    }

}
?>