<?php //Simple request router app
$strippeduri = strtolower(trim($_SERVER['REQUEST_URI'], "/"));
switch($strippeduri) {
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
		$route = "areweopen.php";
		$title = "Are we open?";
		break;
	case 'community':
		header('https://www.facebook.com/groups/studentrnd/');
		break;
	default:
		//check if route is a filename (has characters, a dot ., and 3-4 more characters)
		// if(preg_match('/[^.]+\.[^.]{3,4}$/', $strippeduri)) {
		// 	header('Location: http://oldwww.studentrnd.org' . $_SERVER['REQUEST_URI']);
		// } else {
		// 	$route = "404.php";
		// 	$title = "404";
		// }
		header('Location: http://oldwww.studentrnd.org' . $_SERVER['REQUEST_URI']);
		break;
}

set_include_path("./pages/");
include "config.php";
include "header.php";
include $route;
include "footer.php";
?>
