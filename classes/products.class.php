<?php

class Products extends Dbh{

protected function getProduct() {
    $sql = "SELECT * FROM users WHERE users_firstName = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();

    $results = $stmt->fetchAll();
    return $results;
}

protected function setProduct($SKU, $name, $price, $type) {
//     $sql = "INSERT INTO users(Users_firstName, Users_lastName, Users_DOB) VALUES (?, ?, ?)";
//     $stmt = $this->connect()->prepare($sql);
//     $stmt->execute([$firstName, $lastName, $DOB]);
    
    //}
}

}