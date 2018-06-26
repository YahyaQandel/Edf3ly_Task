<?php 
include 'one.php';
include 'two.php';
include 'three.php';


class CourierFactory { 

	private $courierName;
	private $courier ;

    public function __construct($courierName)
    {
    	switch ($courierName) {

		    case "courierNumberOne":
		        $courier = new courierNumberOne();
		        break;

		    case "courierNumberTwo":
		        $courier = new courierNumberTwo();
		        break;

			case "courierNumberThree":
		        $courier = new courierNumberThree();
		        break;
		}
    }

} 

?> 