<?php //Simple request router app
switch($_SERVER['REQUEST_URI']) {
	case '/':
		$route = "index.php";
		$title = "Home";
		break;
	case '/getinvolved/':
	case '/getinvolved':
		$route = "getinvolved.php";
		$title = "Get Involved";
		break;
	case '/about/':
	case '/about':
		$route = "about.php";
		$title = "About";
		break;
	case '/contact/':
	case '/contact':
		$route = "contact.php";
		$title = "Contact Us";
		break;
	case '/donate/':
	case '/donate':
		$route = "donate.php";
		$title = "Donate";
		break;
	default:
		header('Location: http://oldwww.studentrnd.org' . $_SERVER['REQUEST_URI']);
		break;
}

$tang = "no-flip"; //fixes CSS4 bug

//information about StudentRND, displayed on the site
$addressname = "StudentRND";
$address1 = "1405 132nd Ave NE, Suite 3";
$address2 = "Bellevue, WA 98005";
$hours = "Mon-Fri 10-7p, Sat 12-7p";
$phone = "Tel: (425) 780-7901";


set_include_path("./pages/");
include "header.php";
include $route;
include "footer.php";
?>