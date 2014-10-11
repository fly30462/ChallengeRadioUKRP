<?php 
function who_to_contact($time=null) {
	return "Us";
}


$who = who_to_contact();
?>
<div class="plugin-space">
	<div id="plugin-space">
		<h3 class="widget-title RadFestFont">Contact <?php echo $who; ?></h3>
		<form method="post">
			<div class="form-group">
				<input type="text" class="form-control /">
			</div>
		</form>
		<a href="http://www.challengeradio.co.uk" target="_blank">
			<img src="img/plugin-space-image.png" alt="" style="max-width:100%;border:0;" />
		</a>
	</div>
	<div id="bottom">
		<a class="social-button twitter" href="http://www.twitter.com/challengeradio" target="_blank" title="Follow Challenge Radio on Twitter">
			<i class="fa fa-fw fa-twitter-square fa-4x"></i>
		</a>
		<a class="social-button facebook" href="http://www.facebook.com/challengeradio" target="_blank" title="Follow Challenge Radio on Facebook">
			<i class="fa fa-fw fa-facebook-square fa-4x"></i>
		</a>
		<a class="social-button gplus" href="https://plus.google.com/110474516290880858606" target="_blank" title="Follow Challenge Radio on Google Plus">
			<i class="fa fa-fw fa-google-plus-square fa-4x"></i>
		</a>
		<a id="p2link" href="http://www.psquared.net/" target="_blank">
			<img src="img/sponsor-webstream.png" alt="Our webstreaming is provided by P Squared Limited!" title="Thanks P Squared! :)" />
		</a>
	</div>

</div>