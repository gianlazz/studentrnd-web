<?php
$tang = "no-flip"; //fixes CSS4 bug 

$openhours = false; //is it summer time?

//information about StudentRND, displayed on the site
$addressname = "StudentRND";
$address1 = "1405 132nd Ave NE, Suite 3";
$address2 = "Bellevue, WA 98005";
$hours = "Mon-Fri 10-7p, Sat 12-7p";
$phone = "Tel: (425) 780-7901";


if(!$openhours) {
	unset($hours);
	// $hours = "Not open outside summer.";
}
?>