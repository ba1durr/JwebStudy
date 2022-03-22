<?php

class Products extends Dbh{

public function getProduct() {

    $sql = "SELECT * FROM product";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();

    $results = $stmt->fetchAll();
    return $results;

}

public function saveProduct($post) {

    $sql = "INSERT INTO `product` (`SKU`, `Product_Name`, `Product_Price`, `Product_Type`)
            VALUES (:SKU, :name, :price, :type);";
    $stmt = $this->connect()->prepare($sql);
    $stmt->bindValue(':SKU', $post['SKU']);
    $stmt->bindValue(':name', $post['Product_Name']);
    $stmt->bindValue(':price', $post['Product_Price']);
    $stmt->bindValue(':type', $post['Product_Type']);
    $stmt->execute();

}

public function getSKU(){

    $sql = "SELECT SKU FROM product";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();

    $SKU = $stmt->fetch(PDO::FETCH_ASSOC);
    return $SKU;
}

}