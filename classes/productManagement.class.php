<?php

require "dbh.class.php";

class ProductManagement extends Dbh{

    public function getProducts(){
        $sql = "SELECT * 
                FROM Product
                LIMIT 0, 9";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        $results = $stmt->fetchAll();
        return $results;
    }
}

