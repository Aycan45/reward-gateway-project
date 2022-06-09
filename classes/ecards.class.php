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

    protected function setCard($name, $image, $description)
    {
        $statement = $this->connect()->prepare("INSERT INTO ecards (`cardName`, `cardImage`, `description`) VALUES (:name,:image,:description);");  
        
        $statement->bindValue('name', $name, PDO::PARAM_STR);

        $statement->bindValue('image', $image, PDO::PARAM_STR);

        $statement->bindValue('description', $description, PDO::PARAM_STR);

        try {
            if (!$statement->execute()) {
                $statement = null;
                header("location: ./index.php?error=stmtfailed1");
                exit();
            }
        } catch (Exception $e) {
            echo $e->getMessage();
            exit();
        }

        $statement=null;
    }

}