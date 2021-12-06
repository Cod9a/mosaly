<?php

    use Jenssegers\Agent\Facades\Agent;
    
    function getAgent() {
        $agent = new Agent();
        return $agent;
    }

	function getRoomDetails($room) {
		$suite = [];
		if($room == "chambre-standard") {
        	$name = "Chambre Standard";
        	$price = "20 000F";
        	$mainImage = "1.jpg";
        } elseif($room == "suite") {
        	$name = "Suite";
        	$price = "25 000F";
        	$mainImage = "2.jpg";
        } elseif($room == "caboma1") {
        	$name = "Appart Suite Caboma 1E";
        	$price = "51 500F";
        	$mainImage = "3.jpeg";
        } elseif($room == "caboma2") {
        	$name = "Appart Suite Caboma 2E";
        	$price = "51 500F";
        	$mainImage = "4.jpeg";
        } elseif($room == "caboma3") {
        	$name = "Appart Suite Caboma 3E";
        	$price = "36 500F";
        	$mainImage = "5.jpeg";
        } else {
        	$name = "Chambre simple";
        	$price = "20 000F";
        	$mainImage = "1.jpg";
        }

        $suite[0] = $name;
        $suite[1] = $price;
        $suite[2] = $mainImage;

        return $suite;
    }

 ?>