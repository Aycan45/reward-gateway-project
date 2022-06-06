<?php

class eCards extends DataBaseHelper{

    protected function getAlleCards(){

        $statement =$this->connect()->prepare("SELECT * FROM ecards;");

        if ($statement->rowCount() > 0) {
            while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                $data[] = $row;
            }
            return $data;
        }
        else{
            echo "No data";
        }

    }

}
?>