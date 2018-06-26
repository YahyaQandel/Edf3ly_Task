<?php 

include '../couriers/courierFactory.php';

class Item { 
    public $price = '1xxx'; 
    public $shippedByName ; 
    
    public function __construct($price,$shippedByName)
    {
    	$shippedBy   = courierFactory::create($shippedByName);
    	$this->price = $price;
    }

    public function getShippmentCourier(){
    	return $this->shippedBy;
    }

    public function setPrice($price){
    	$this.price = price;
    }

    public function getPrice(){return $price;}
} 

?> 