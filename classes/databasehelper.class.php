<?php 

class DataBaseHelper{
    protected function connect(){
        try {
            $username = 'root';
            $password = '';

            $databasehelper = new PDO("mysql:host=localhost; dbname=ecards" , $username, $password);
            $databasehelper->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $databasehelper;


        } catch (PDOException $e) {

            echo "Error" . $e->getMessage(). "<br/>";
            die();
            
        }
    }
}
?>