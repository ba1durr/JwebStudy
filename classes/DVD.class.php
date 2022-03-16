<?php 

class attr_DVD extends productAttribute{
    
    public function setAttr($post){

        $sqql = "SELECT * FROM `product` WHERE SKU = :SKU";
        $stmt = $this->connect()->prepare($sqql);
        $stmt->bindValue(':SKU', $post['SKU']);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $sql = "INSERT INTO `attributes` (`attribute`, `value`, `index`)
                VALUES ('Size', :value, :index);";

        $stmt2 = $this->connect()->prepare($sql);

            $stmt2->bindValue(':value', $post['Size']);
            $stmt2->bindValue(':index', $row['Product_ID']);
            $stmt2->execute();

    }
    
}