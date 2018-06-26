<?php

include '../IDecorator.php';

// Courier Number One
class CourierNumberOne implements Shipment{ 
        
	$name = 'courierNumberOne';


    private function createShipmentAndGetWayBill() { 
        // ...
    } 
    private function getShipmentTrackingDetails(){
    	// ....
    }


    // override interface functions 
	public function createShipment(){
		$this->createShipmentAndGetWayBill();
	}

	public function trackShipment(){
		return $this->getShipmentTrackingDetails();
	}
} 
?>