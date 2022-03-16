<?php


class productsContr extends Products {

    public function setProduct($post_Data) {
  
        $post_edited = ['SKU' => $post_Data['SKU'], 'Product_Name' => $post_Data['Name'], 'Product_Price' => $post_Data['Price'], 'Product_Type' => $post_Data['Type']];

        $this->saveProduct($post_edited);

    }

}