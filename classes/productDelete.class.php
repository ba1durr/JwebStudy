<?php

include ('classes/Dbh.class.php');

class productDelete extends Dbh{

    function __construct($post_data){
    $this->ProductID = $post_data;
    }

    function deleteProducts() {
      //cycled through $this->ProductIDs
        foreach($this->ProductID as $ID){
            $sql = "DELETE FROM `attributes` WHERE `Index` = :ID;
            DELETE FROM `product` WHERE Product_ID = :ID";
            $stmt = $this->connect()->prepare($sql);
            $stmt->bindValue(':ID', $ID);
            $stmt->execute();
        }
    }   
}