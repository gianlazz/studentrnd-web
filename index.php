<?php //Simple request router app
$edward = strtolower(trim($_SERVER['REQUEST_URI'], "/"));
switch($edward) {
	case '':
		$route = "index.php";
		$title = "Home";
		break;
	case 'getinvolved':
		$route = "getinvolved.php";
		$title = "Get Involved";
		break;
	case 'about':
		$route = "about.php";
		$title = "About";
		break;
	case 'contact':
		$route = "contact.php";
		$title = "Contact Us";
		break;
	case 'donate':
		$route = "donate.php";
		$title = "Donate";
		break;
	case 'open':
		$route = "issomebodythere.php";
		$title = "Are we open?";
		break;
	default:
		//check if route is a filename (has characters, a dot ., and 3-4 more characters)
		// if(preg_match('/[^.]+\.[^.]{3,4}$/', $edward)) {
		// 	header('Location: http://oldwww.studentrnd.org' . $_SERVER['REQUEST_URI']);
		// } else {
		// 	$route = "404.php";
		// 	$title = "404";
		// }

		header('Location: http://oldwww.studentrnd.org' . $_SERVER['REQUEST_URI']);
		break;
}

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

set_include_path("./pages/");
include "header.php";
include $route;
include "footer.php";
?>
