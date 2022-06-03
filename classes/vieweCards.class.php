<?php

class VieweCards extends eCards{

    public function showAlleCards(){

        $datas = $this->getAlleCards();
        foreach ($datas as $data) {
            echo $data['cardName']."<br>";
            echo $data['cardImg']."<br>";
            echo $data['description']."<br>";
        }

    }

}