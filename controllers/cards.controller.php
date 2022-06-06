<?php

class CardsController extends eCards{

    public function showAlleCards(){

        $datas = $this->getAlleCards();
        foreach ((array) $datas as $data) {
            echo $data['cardName']."<br>";
            echo $data['cardImage']."<br>";
            echo $data['description']."<br>";
        }

    }

}
?>