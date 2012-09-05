<div class="hero-unit" style="background-color:transparent;">
	<img src="http://studentrnd.org/images/header.png" style="float:left; margin:-80px 20px 20px -50px"/>
	<h1>Let's Create!</h1>
	<p>We're a community of students who love science and technology. </p>
	<a href="./getinvolved/" class="btn btn-primary btn-large" style="text-decoration:none">Get Involved</a>&nbsp;&nbsp; <a href="#" onclick="javascript:$('#directions').show();">Directions & Hours</a>.
</div>
<div class="row">
	<div class="span6">
		<div class="box"><img src="https://sphotos.xx.fbcdn.net/hphotos-prn1/41013_422690246331_5173310_n.jpg" /><h1>StudentRND Incubator</h1><p>We know you're capable of amazing the world. We'll help you do that. Work with your friends to build amazing products over the course of the summer! </p><p><span class="btn disabled">Apply for Summer 2012</span> <a href="http://studentrndincubator.eventbrite.com/" class="btn">Attend Demo Day</a></p></div>
		<div class="box">
			<h1>Sponsors</h1>
			<img src="http://studentrnd.org/wp-content/uploads/2009/07/medtronic.png"/><br/><br/> 
			<img src="http://studentrnd.org/wp-content/uploads/2009/07/physio.png"/><br/><br/>
			<img src="http://studentrnd.org/wp-content/uploads/2009/07/stratos.jpg"/><br/><br/>
			<img src="http://studentrnd.org/wp-content/uploads/2009/07/blackberry.png"/>
			<img src="http://studentrnd.org/wp-content/uploads/2009/07/coinstar.jpg"/>
			<img src="http://studentrnd.org/wp-content/uploads/2009/07/swSponsor4wp_381_.jpg"/><br/><br/>
			<img src="http://thinkspace.com/wp-content/uploads/2011/12/thinkspace-logo-transparent.png"/><br/><br/>
			<img src="http://studentrnd.org/wp-content/uploads/2009/07/startupcity.png"/><br/><br/>
			<img src="http://studentrnd.org/wp-content/uploads/2009/07/t2k.gif"/><br/><br/>
			<img src="http://www.htc.com/us/img/HTC_logo_tag.gif"/>
		</div>
	</div>
	<div class="span6">
		<div class="box"><img src="http://codeday.org/img/biggestcodeday.jpg" /><h1>CodeDay</h1><p>CodeDay is an amazing 24-hour marathon where we hang out and code!</p><p><a href="http://codeday.org/" class="btn">Learn More</a></p></div>
		<div class="box"><h1>Major Events</h1>
			<table class="table table-striped"><tbody><tr><td><strong>Aug 4-5th</strong></td><td><a href="http://codeday.org/">CodeDay August</a></td></tr>
				<tr><td><strong>August 25th</strong></td><td><a href="http://studentrndincubator.eventbrite.com">Demo Day!</a></td></tr>
				<tr><td><strong>August 31st</strong></td><td>Summer Hours End</td></tr>
			</tbody></table>
			<p><h2>Other Events</h2><a href="http://meetup.com/StudentRND-Meetups" class="btn">Meetups</a> <a href="http://meetup.com/StudentRND-Community" class="btn">Community Events</a></p>
		</div>
		<div class="box"><h1>Presented By:</h1>
			<a href="http://studentrnd.org/"><img src="http://studentrnd.org/images/srndlogotransparent.png"/></a>
			<br/><h2>Follow us on <a href="http://facebook.com/studentrnd">Facebook</a> and <a href="http://twitter.com/studentrnd">Twitter</a>!</h2>
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
		<h3>Directions & Hours</h3>
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
			<div class="span3">
				<h2>Hours</h2>
				<p><?php echo $hours; ?></p>
				<p><i>Need after-hours access? Call us!</i></p>

				<!-- <table class="table table-striped">
					<tbody>
						<tr>
							<td><strong>Monday-Friday</strong></td>
							<td><strong>Saturday</strong></td>
						</tr>
						<tr>
							<td>10-7</td>
							<td>12-7</td>
						</tr>
					</tbody>
				</table> -->
		</div>
	</div>
</div>
<div class="modal-footer">
	<a onclick="$('#directions').hide();" class="btn btn-primary">OK</a>
</div>
</div>
