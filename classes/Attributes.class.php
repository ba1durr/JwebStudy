<?php

abstract class productAttribute extends Dbh{

    protected function getAttr() {

        $sql = "SELECT * FROM attributes WHERE Attribute = ? /*here we will link to the index of the specified product*/";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        $results = $stmt->fetchAll();
        return $results;
    
    }

   abstract protected function setAttr($post);

}