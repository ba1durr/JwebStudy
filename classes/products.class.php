<?php

class Products extends Dbh{

protected function getProduct() {

    $sql = "SELECT * FROM product";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();

    $results = $stmt->fetchAll();
    return $results;
}

protected function saveProduct($post) {

    $sql = "INSERT INTO `product` (`SKU`, `Product_Name`, `Product_Price`, `Product_Type`)
            VALUES (:SKU, :name, :price, :type);";
    $stmt = $this->connect()->prepare($sql);
    $stmt->bindValue(':SKU', $post['SKU']);
    $stmt->bindValue(':name', $post['Product_Name']);
    $stmt->bindValue(':price', $post['Product_Price']);
    $stmt->bindValue(':type', $post['Product_Type']);
    $stmt->execute();

}

}