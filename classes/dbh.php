<?php

class Dbh {
    protected function connect()
    {
        try {
            $username = "root";
            $password = "";
            $dbh = new PDO('mysql:host=localhost; dbname=crud_pdo', $username, $password);
            return $dbh;
        } catch (PDOException $exception) {
            //throw $th;
            print "Error!: " . $exception->getMessage(). "<br />";
            die();
        }
    }
}

?>