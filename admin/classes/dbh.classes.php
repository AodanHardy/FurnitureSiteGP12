<?php

class Dbh{
    private function connect(){
        try{
            $username = "root";
            $password = "";
            $dbh = new PDO('mysql:host=localhost;dbname=funiturestoredb', $username, $password);
            return $dbh;
        }



        catch (PDOException $e){
            echo "Error" . $e->getMessage(). "<br>";
        }
    }

    
}