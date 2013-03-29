<div class="hero-unit" style="background-color:transparent;">
	<img src="/img/header.png" style="float:left; margin:-60px 20px 20px -50px"/>
	<h1 style="font-size:40px">The Workspace!</h1>
	<p>Come check us out and join us in utilizing our public space, tools and helpful community to build amazing stuff! <br><br> Check us out: <br></p>
	<a href="#" onclick="javascript:$('#directions').show();"> 1405 132nd Ave NE #3, Bellevue, WA 98005<?php if(isset($hours)) {echo ' & Hours';} ?></a><br><br><a href="./getinvolved/" class="btn btn-primary btn-large" style="text-decoration:none">Get Involved</a>&nbsp;&nbsp;
</div>

<div class="row">
	<div class="span6">
		<div class="box">
			<img src="/img/workspacegarage.jpg" />
			<h1><center>The Workspace</center></h1>
			<p>The StudentRND workspace is a two story maker/hackerspace, offering access to tools such as a new Makerbot 2 3D printer, Lasercutter in the prototyping area upstares. Downstairs we have a large garage space offering many tools for all kinds of engineering projects, presentation room and rec. room for lounging.</p>

		</div>
<div class="box">
			<img src="/img/laser.jpg" />
			<h1><center>The Projects</center></h1>
			<p>The StudentRND workspace has helped make, young entrepreneurs, been the work place of software/web developers, electrical engineers and has lead to many completed projects that might not have exsisted if it weren't for the community workspace.</p>

		</div>
		<div class="box" id="sponsors">
			<h1>Sponsors</h1>
			<img src="http://studentrnd.org/wp-content/uploads/2009/07/medtronic.png" id="medtronic">
			<img src="http://studentrnd.org/wp-content/uploads/2009/07/physio.png" id="physio">
			<img src="http://studentrnd.org/wp-content/uploads/2009/07/stratos.jpg" id="stratos">
			<img src="http://i.imgur.com/Sntxx.png" id="splunk">
			<img src="http://studentrnd.org/wp-content/uploads/2009/07/blackberry.png" id="blackberry">
			<img src="http://studentrnd.org/wp-content/uploads/2009/07/coinstar.jpg" id="coinstar">
			<img src="http://studentrnd.org/wp-content/uploads/2009/07/swSponsor4wp_381_.jpg" id="startupweekend">
			<img src="http://studentrnd.org/wp-content/uploads/2009/07/startupcity.png" id="startupcity">
			<img src="http://studentrnd.org/wp-content/uploads/2009/07/t2k.gif" id="visiport">
		</div>
	</div>
	<div class="span6">
		<div class="box">
			<img src="/img/recroom.jpg" />
			<h1><center>Memberships</center></h1>
			<p>Along with the support from our sponsors, the StudentRND workspace is made possible by the generous support of our community in the form of memberships. Memberships come in $10 and $25 a month packages. Head over to our contact page and ask us how to sign up today!</p>

		</div>
	<div class="box">
			<img src="/img/class.jpg" />
			<h1><center>Classes</center></h1>
			<p>Along with the support from our sponsors, the StudentRND workspace is made possible by the generous support of our community in the form of memberships. Paying members also will be taught how to use our equipment.</p>

		</div>
		<div class="box">
			<h1>Presented By:</h1>
			<a href="http://studentrnd.org/"><img src="http://studentrnd.org/images/srndlogotransparent.png"/></a>
			<h2>Follow us on <a href="http://facebook.com/studentrnd">Facebook</a> and <a href="http://twitter.com/studentrnd">Twitter</a>!</h2>
		</div>
	</div>
</div>
<div id="fb-root"></div>




<script>(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="modal hide" id="directions">
	<div class="modal-header">
		<h3>Directions<?php if(isset($hours)) {echo ' & Hours';} ?></h3>
	</div>
	<div class="modal-body">
		<div class="row">
			<div class="span3">
				<h2>Directions</h2>
				<address>
					<p class="address"><?php echo "<b>$addressname</b><br>$address1<br>$address2"; ?></p>
					<p class="link"><a href="https://maps.google.com/?q=StudentRND,+Bellevue,+WA&hq=StudentRND,&hnear=Bellevue,+King,+Washington&t=m&cid=15801779745460243267&z=13&iwloc=A" title="View StudentRND on a map" target="_BLANK">View Map</a></p>
				</address>
				<p><?php echo $phone; ?></p>
			</div>
<?php
if(isset($hours)) {
	echo <<<TANG
			<div class="span3">
					<h2>Hours</h2>
					<p>$hours</p>
					<p><i>Need after-hours access? Call us!</i></p>
			</div>
TANG;
} ?>
		</div>
	</div>
	<div class="modal-footer">
		<a onclick="$('#directions').hide();" class="btn btn-primary">OK</a>
	</div>
</div>
