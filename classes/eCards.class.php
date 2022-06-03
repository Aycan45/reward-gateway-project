<?php

class eCards extends DataBaseHelper{

    protected function getAlleCards(){

        $sql = "SELECT * FROM eCards";
        $result = $this->connect()->query($sql);
        $numRows = $result->num_rows;

        if ($numRows > 0) {
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $data[] = $row;
            }
            return $data;
        }

    }

}