<?php 

class attr_Furniture extends productAttribute{
    
    public function setAttr($post){

        $sqql = "SELECT * FROM `product` WHERE SKU = :SKU";
        $stmt = $this->connect()->prepare($sqql);
        $stmt->bindValue(':SKU', $post['SKU']);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $attr = ['Height', 'Width', 'Length'];

        //inserting each attribute

        for ($i=0; $i<=2; $i++){

        $sql = "INSERT INTO `attributes` (`attribute`, `value`, `index`)
                VALUES (:attribute, :value, :index);";

        $stmt2 = $this->connect()->prepare($sql);

            $stmt2->bindValue(':attribute', $attr[$i]);
            $stmt2->bindValue(':value', $post[$attr[$i]]);
            $stmt2->bindValue(':index', $row['Product_ID']);
            $stmt2->execute();

    }
    
}
}