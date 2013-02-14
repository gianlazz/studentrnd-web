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
                        5000 => "Funds one student at StudentRND Labs"
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