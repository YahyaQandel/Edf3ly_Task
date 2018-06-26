<?php
include '../IDecorator.php';


// Courier Number Three
class CourierNumberThree implements Shipment{

	$name = 'courierNumberThree';

	private function createShipmentAndGetWayBill(){

	}

	private function registerNumberToGetTrackingDetails(){

	}

	private function getTrackingDetails(){

	}


	// override interface functions 
	public function createShipment(){

		$this->createShipmentAndGetWayBill();
		$this->registerNumberToGetTrackingDetails();
	}

	public function trackShipment(){
		return $this->getTrackingDetails();
	}
}

?>