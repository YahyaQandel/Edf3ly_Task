<?php

include '../IDecorator.php';

// Courier Number Two
class CourierNumberTwo implements Shipment{

	$name = 'courierNumberTwo';


	private function createShipmentInfo(){

	}

	private function createShipmentInstructions(){

	}

	private function getShipmentWayBill(){

	}

	private function getShipmentTrackingDetails{
		return $this->getShipmentWayBill();
	}


	// override interface functions 
	public function createShipment(){
		
		$this->createShipmentInstructions();
		$this->createShipmentInfo();
	}

	public function trackShipment(){
		return $this->getShipmentTrackingDetails();
	}
}

?>