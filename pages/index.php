<div class="hero-unit" style="background-color:transparent;">
	<img src="http://studentrnd.org/images/header.png" style="float:left; margin:-80px 20px 20px -50px"/>
	<h1 style="font-size:40px">Change the World.</h1>
	<p>We create an ecosystem of students who help each other do amazing things. </p>
	<a href="./getinvolved/" class="btn btn-primary btn-large" style="text-decoration:none">Get Involved</a>&nbsp;&nbsp; <a href="#" onclick="javascript:$('#directions').show();">Directions<?php if(isset($hours)) {echo ' & Hours';} ?></a>
</div>

<div class="row">
	<div class="span6">
		<div class="box">
			<img src="http://sphotos-b.xx.fbcdn.net/hphotos-snc7/309250_10150992470226332_944192564_n.jpg" />
			<h1>StudentRND Incubator</h1>
			<p>The StudentRND Incubator provides an opportunity for passionate, motivated student teams to focus on building something amazing during the summer. </p>
			<p><span class="btn disabled">Apply for Summer 2012</span> <a href="http://www.geekwire.com/2012/meet-teams-student-rnd-summer-incubator/" class="btn">View Teams</a></p>
		</div>
		<div class="box" id="sponsors">
			<h1>Sponsors</h1>
			<img src="http://studentrnd.org/wp-content/uploads/2009/07/medtronic.png" id="medtronic">
			<img src="http://studentrnd.org/wp-content/uploads/2009/07/physio.png" id="physio">
			<img src="http://studentrnd.org/wp-content/uploads/2009/07/stratos.jpg" id="stratos">
			<img src="http://studentrnd.org/wp-content/uploads/2009/07/blackberry.png" id="blackberry">
			<img src="http://studentrnd.org/wp-content/uploads/2009/07/coinstar.jpg" id="coinstar">
			<img src="http://studentrnd.org/wp-content/uploads/2009/07/swSponsor4wp_381_.jpg" id="startupweekend">
			<img src="http://thinkspace.com/wp-content/uploads/2011/12/thinkspace-logo-transparent.png" id="thinkspace">
			<img src="http://studentrnd.org/wp-content/uploads/2009/07/startupcity.png" id="startupcity">
			<img src="http://studentrnd.org/wp-content/uploads/2009/07/t2k.gif" id="visiport">
			<img src="http://www.htc.com/us/img/HTC_logo_tag.gif" id="htc">
		</div>
	</div>
	<div class="span6">
		<div class="box">
			<img src="http://codeday.org/img/biggestcodeday.jpg" />
			<h1>CodeDay</h1>
			<p>Stop thinking about building the next big thing. Go and build it. Join us at CodeDay and pitch your idea, form a team, and build something amazing. All in 24 hours.</p>
			<p><a href="http://codeday.org/" class="btn">Learn More</a></p>
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
