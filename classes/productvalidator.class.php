<?php

class productValidator{

    private $data;
    private $errors = [];
    private static $fields = ['SKU' , 'Name', 'Price', 'Size', 'Weight', 'Height', 'Width', 'Length'];
    
    public function __construct($post_data){
    $this->data = $post_data;
    }
    
    public function  validateForm(){
        foreach(self::$fields as $field){
            if(!array_key_exists($field, $this->data)){
                trigger_error("$field is not present in data");
                return;
            }
        }
    
        $this->validateSKU();
        $this->validateName();
        $this->validatePrice();
        $this->validateSize();
        $this->validateWeight();
        $this->validateHeight();
        $this->validateWidth();
        $this->validateWeight();
        return $this->errors;
    }
    
    private function validateSKU(){
    
//gotta add functionality to check uniqueness in the DB

        $val = trim($this->data['SKU']);
    
        if(empty($val)){
            $this->addError('SKU', 'SKU cannot be empty');
        } else {
    
            if(!preg_match('/^[a-zA-Z0-9]{6,12}$/', $val)) {
                $this->addError('SKU' , 'Please provide proper SKU!');
            }
        }
    }
    
    private function validateName(){
    
        $val = $this->data['Name'];
    
        if(empty($val)){
            $this->addError('Name', 'Name cannot be empty');
        } else {
    
            if(!preg_match('/^[a-zA-Z0-9]{6,12}$/', $val)) {
                $this->addError('Name' , 'Name must be a valid Name');
            }
        }
    }

    private function validatePrice(){
    
        $val = trim($this->data['Price']);
    
        if(empty($val)){
            $this->addError('Price', 'Price cannot be empty');
        } else {
    
            if(!preg_match('/^[0-9]*$/', $val)) {
                $this->addError('Price' , 'Price must be a valid Price');
            }
        }
    }

    private function validateSize(){
    
        $val = trim($this->data['Size']);
    
        if(empty($val)){
            $this->addError('Size', 'Size cannot be empty');
        } else {
    
            if(!preg_match('/^[0-9]*$/', $val)) {
                $this->addError('Size' , 'Size must be a valid Size');
            }
        }
    }

    private function validateWeight(){
    
        $val = trim($this->data['Weight']);
    
        if(empty($val)){
            $this->addError('Weight', 'Weight cannot be empty');
        } else {
    
            if(!preg_match('/^[0-9]*$/', $val)) {
                $this->addError('Weight' , 'Weight must be a valid Weight');
            }
        }  
    }
    
    private function validateHeight(){
    
        $val = trim($this->data['Height']);
    
        if(empty($val)){
            $this->addError('Height', 'Height cannot be empty');
        } else {
    
            if(!preg_match('/^[0-9]*$/', $val)) {
                $this->addError('Height' , 'Height must be a valid Height');
            }
        }
    }

    private function validateWidth(){
    
        $val = trim($this->data['Width']);
    
        if(empty($val)){
            $this->addError('Width', 'Width cannot be empty');
        } else {
    
            if(!preg_match('/^[0-9]*$/', $val)) {
                $this->addError('Width' , 'Width must be a valid Width');
            }
        }   
    }

    private function validateLength(){
    
        $val = trim($this->data['Length']);
    
        if(empty($val)){
            $this->addError('Length', 'Length cannot be empty');
        } else {
    
            if(!preg_match('/^[0-9]*$/', $val)) {
                $this->addError('Length' , 'Length must be a valid email');
            }
        }
    }

    private function addError($key, $val){
    $this->errors[$key] = $val;
    }
}
    