<?php 
function who_to_contact($time=null) {
	return "Us";
}


$who = who_to_contact();
?>
<div class="plugin-space">
	<div id="plugin-space">
		<div class="winegum pink">
			<img src="http://www.challengeradio.co.uk/wp-content/uploads/2014/09/KenBruce-150x150.jpg?68863" class="show-photo" />
			<h3 class="widget-title RadFestFont">Ken Bruce</h3>
			<div class="show-blurb">
				<p>Join Ken in his onsie broadcasting live from the dome...</p>
			</div>
			<div class="back-link">
				<a href="http://www.challengeradio.co.uk">Visit Website</a>
			</div>
			<div class="clear clearfix">&nbsp;</div>
		</div>
		<div class="winegum orange">
			<h3 class="widget-title RadFestFont">Contact <?php echo $who; ?></h3>
			<form method="post" id="contactform" action="">
				<div class="form-group">
					<input type="text" placeholder="Your Name..." class="form-control" name="name" />
				</div>
				<div class="form-group">
					<textarea class="form-control" placeholder="Your Message to the studio" name="message"></textarea>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-orange">Send</button>
				</div>
			</form>
			<div id="results"><div id="content"></div></div>
		</div>
		
		
		<a href="http://www.challengeradio.co.uk" target="_blank">
			<img src="img/flare-footer.png" alt="" style="max-width:100%;border:0;" />
		</a>
	</div>
	<div id="bottom">
		<div class="social">
		<a class="social-button twitter" href="http://www.twitter.com/challengeradio" target="_blank" title="Follow Challenge Radio on Twitter">
			<img src="img/social-icons/64-twitter.png" />
		</a>
		<a class="social-button facebook" href="http://www.facebook.com/challengeradio" target="_blank" title="Follow Challenge Radio on Facebook">
			<img src="img/social-icons/64-facebook.png" />
		</a>
		<a class="social-button youtube" href="https://plus.google.com/110474516290880858606" target="_blank" title="Watch Challenge Radio's Videos on YouTube">
			<img src="img/social-icons/64-youtube-2.png" />
		</a>
		</div>
		<a id="p2link" href="http://www.psquared.net/" target="_blank">
			<img src="img/sponsor-webstream.png" alt="Our webstreaming is provided by P Squared Limited!" title="Thanks P Squared! :)" />
		</a>
	</div>

</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script type="text/javascript">
// Attach a submit handler to the form
// variable to hold request
var request;
// bind to the submit event of our form
jQuery("#contactform").submit(function(event){
    // abort any pending request
    if (request) {
        request.abort();
    }
    // setup some local variables
    var $form = jQuery(this);
    // let's select and cache all the fields
    var $inputs = $form.find("input, select, button, textarea");
    // serialize the data in the form
    var serializedData = $form.serialize();

    // let's disable the inputs for the duration of the ajax request
    // Note: we disable elements AFTER the form data has been serialized.
    // Disabled form elements will not be serialized.
    $inputs.prop("disabled", true);

    // fire off the request to /form.php
    request = $.ajax({
        url: "contactus.php",
        type: "post",
        data: serializedData
    });

    // callback handler that will be called on success
    request.done(function (response, textStatus, jqXHR){
        // log a message to the console
        console.log("Hooray, it worked!");
        jQuery("#contactform").html("Thankyou!");
    });

    // callback handler that will be called on failure
    request.fail(function (jqXHR, textStatus, errorThrown){
        // log the error to the console
        console.error(
            "The following error occured: "+
            textStatus, errorThrown
        );
    });

    // callback handler that will be called regardless
    // if the request failed or succeeded
    request.always(function () {
        // reenable the inputs
        $inputs.prop("disabled", false);
    });

    // prevent default posting of form
    event.preventDefault();
});</script>