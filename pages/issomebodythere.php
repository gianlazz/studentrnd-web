<?php
if($open == true) {
	echo <<<TANG
	<h1>Yes, somebody is here</h1>
	<p>You'll be able to get in.</p>
TANG;
} else {
	echo <<<TANG
	<h1>No, nobody is here</h1>
	<p>...but, you can call us if you need after hours access.</p>
	<p>$phone;</p>
TANG;
}
?>