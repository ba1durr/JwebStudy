<?php


class productsView extends Products {
    
    public function showProduct() {
        $results = $this->getProduct();
    }

}