<?php

class eCards extends DataBaseHelper{

    protected function getAlleCards(){

        $result = $this->connect()->query("SELECT * FROM ecards");

        if ($result->rowCount() > 0) {
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $data[] = $row;
            }
            return $data;
        }

    }

}