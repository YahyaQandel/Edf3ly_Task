<?php 
include 'one.php';
include 'two.php';
include 'three.php';


class CourierFactory { 

	private $courierName;
	private $courier ;

    public function __construct($courierName)
    {
    	// 
    }

    public static create(){
    	switch ($courierName) {

		    case "courierNumberOne":
		        return new courierNumberOne();

		    case "courierNumberTwo":
		        return new courierNumberTwo();

			case "courierNumberThree":
		        return new courierNumberThree();

		    default:
        		return null;
		}
    }

} 

?> 