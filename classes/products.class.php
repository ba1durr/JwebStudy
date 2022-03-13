<?php

class Products extends Dbh{

protected function getProduct() {
    $sql = "SELECT * FROM products WHERE Product_Name = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();

    $results = $stmt->fetchAll();
    return $results;
}

protected function saveProduct($post) {

    echo "ass";
    die();


}

}