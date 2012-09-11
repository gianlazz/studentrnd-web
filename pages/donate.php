<?php


$image = "cubeview.jpg";
$caption = "CubeView, a startup created during StudentRND's summer incubator";
$photocredit = "Photo &copy; 2012 Kyle Kesterson";

//information about what donation levels can fund

$donationLevels = array(
                        100 => "Fund a small event or meetup",
						500 => "Pays for a week of StudentRND's space",
                        1000 => "Buys food for a CodeDay",
                        2500 => "Start a CodeDay in a new city!",
                        5000 => "Seed an Incubator Team"
                        );

?>
<div class="row">
	<div class="span12">
		<div class="box">

			<div class="hero-unit">
				<div class="donate-image">
					<?php
						echo '<img src="../img/' . $image . '">';
						echo '<div id="description-text">';
						echo '<p id="caption">' . $caption . '</p>';
						if($photocredit != "") {
							echo '<p id="credit">' . $photocredit . '</p>';
						}
						echo '</div>';
					?>
				</div>


				<!-- <div class="donate-text"> -->
				<div class="donate-text align-right">
					<h1>Support learning</h1>
					<p>Help us give back to the community.  Each dollar you contribute helps us provide our high-quality programs and resources to enhance student learning.</p>
					<p><a href="https://www.stayclassy.org/checkout/donation?eid=20102" class="btn btn-success btn-large" title="Donate via PayPal">Donate Now <i class="icon-white icon-play-circle"></i></a></p>
				</div>

			</div>

			<h2>See what your donation can help fund!</h2>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Amount</th>
						<th>Cause</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach($donationLevels as $key => $message) {
						echo "<tr><td>$key</td><td>$message</td></tr>";
					}
					?>
				</tbody>
			</table>

			<p><a href="https://www.stayclassy.org/checkout/donation?eid=20102" class="btn btn-success btn-large" title="Donate via PayPal">Donate Now <i class="icon-white icon-play-circle"></i></a></p>

		</div>
	</div>
</div>



<!--
<script>
var donationLevels = {};
var donationDefault = 0;
var donationMax = 2500;
var donationStep = 50;
donationLevels[0] = "&nbsp;"; //non-breaking spce

//these must be in order
donationLevels[0] = "Drag the slider to see what your donation can help create!";
donationLevels[50] = "Fund a small event! Dry Ice, 3D Printing";
donationLevels[100] = "Fund a small project";
donationLevels[250] = "Do a different thing!";
donationLevels[500] = "Fund a large event! Super dry Ice, 4D Printing";
donationLevels[1000] = "Fund a large project";
donationLevels[1500] = "Buy Michael a new computer";
donationLevels[2500] = "Do a very different thing!";



var msg = "";
var msgprev = msg;
function checkDonationLevel(amount) {
	var topLevel = 0;
	$.each(donationLevels, function(index) {
		if(amount >= index) {
			topLevel = index;
		}
	});
msg = donationLevels[topLevel];
if(msg != msgprev) {
	displayDonationMessage();
}
msgprev = msg;
}

function displayDonationMessage() {
	$("#topLevel").fadeOut('fast', function() {
		$("#topLevel").html(msg);
		$("#topLevel").fadeIn('fast');
	});
}

$(function() {

	checkDonationLevel(donationDefault);

	$("#slider").slider({
		value:donationDefault,
		min: 0,
		max: donationMax,
		step: donationStep,
		slide: function( event, ui ) {
			$("#amount").val(ui.value);
			checkDonationLevel(ui.value);
		}
	});
$("#amount").val($("#slider").slider("value"));

$("#amount").keyup(function() {
	$("#slider").slider("value", $("#amount").val());
	checkDonationLevel(($("#slider").slider("value")));
});

$("#amount").focus(function() {
	this.select();
});

});
</script>
<div id="topLevel"></div>
<div id="slider"></div>
<div class="input-prepend">
<span class="add-on"><span class="sign">$</span></span><input type="number" id="amount" name="amount">
</div>
-->


<!-- <div class="row">

<center><div class="span12" >
<div class="box">
<center><h1> Donation Levels</h1></center>
</div>
</div></center>
</div>
<div class="row">

<div class="span4">
<div class="box"><h2>$50</h2>
<p>Fund a small event! Dry Ice, 3D Printing</p>
</div>
</div>
<div class="span4">
<div class="box"><h2>$100</h2>
<p>Fund a small a project</p>
</div>
</div>
<div class="span4">
<div class="box"><h2>$250</h2>
<p>Do a different thing!</p>
</div>
</div>
<div class="span4">
<div class="box"><h2>$500</h2>
<p>Fund a small event! Dry Ice, 3D Printing</p>
</div>
</div>
<div class="span4">
<div class="box"><h2>$1000</h2>
<p>Fund a small a project</p>
</div>
</div>
<div class="span4">
<div class="box"><h2>$1500</h2>
<p style="font-weight:bold; color:red;">Buy Michael a new laptop</p>
</div>
</div>
<div class="span4">
<div class="box"><h2>$2500</h2>
<p>Do a different thing!</p>
</div>
</div>
</div> -->
