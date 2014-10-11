<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="ie ie6 lte9 lte8 lte7" lang="en"> <![endif]-->
<!--[if IE 7]>     <html class="ie ie7 lte9 lte8 lte7" lang="en"> <![endif]-->
<!--[if IE 8]>     <html class="ie ie8 lte9 lte8" lang="en"> <![endif]-->
<!--[if IE 9]>     <html class="ie ie9 lte9" lang="en"> <![endif]-->
<!--[if gt IE 9]>  <html lang="en"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!--
All intellectual property rights in this Software throughout the world belong to UK Radioplayer, 
rights in the Software are licensed (not sold) to subscriber stations, and subscriber stations 
have no rights in, or to, the Software other than the right to use it in accordance with the 
Terms and Conditions at www.radioplayer.co.uk/terms. You shall not produce any derivate works 
based on whole or part of the Software, including the source code, for any other purpose other 
than for usage associated with connecting to the UK Radioplayer Service in accordance with these 
Terms and Conditions, and you shall not convey nor sublicense the Software, including the source 
code, for any other purpose or to any third party, without the prior written consent of UK Radioplayer.
-->
<meta name="description" content="Challenge Radio - live from Salford at the Radio Festival 2014" />
<meta name="keywords" content="Challenge Radio, Anneka Rice, " /> 
<meta name="DCTERMS.created" content="" /> 
<meta name="DCTERMS.modified" content="" /> 
<link rel="schema.dcterms" href="http://purl.org/dc/terms/" /> 

<title>Challenge Radio</title>  

<link type="text/css" rel="stylesheet" media="screen" href="style/radioplayer.min.css" />
<link type="text/css" rel="stylesheet" media="screen" href="style/theme.css" />
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" type="text/css" />
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<script type="text/javascript">
/**
 * Console Settings
 */

var currentStationID = "1299";
var currentStationName = "Challenge Radio";

// -- nowPlayingSource can be changed from 'default' to one of: 'default-no-stream', 'stream', 'SI', 'PI'
var nowPlayingSource = 'default';

// -- xDomainProxyUrl should be the full URL to the xdomainproxy.html file, which by default is found in the preroll-framework directory
//var xDomainProxyUrl = "http://radioplayer.challengeradio.co.uk/preroll-framework/xdomainproxy.html";
var xDomainProxyUrl = "";

// -- initOptions can be populated with settings for actions when the console starts. See integration guide for details.
var initOptions = {
	interstitial : {
		enabled : false,
		url : 'preroll-framework/'
	},
	songaction : {
		enabled : false,
		type : 'Buy',
		baseurl : 'http://www.your-affiliate-url.com/'
	},
	overlay : {
		enabled : false,
		url : 'preroll-framework/',
		mute : true
	}
};


/**
 * Audio Settings (V3 API)
 */

// -- Set audioLive to true for live streaming, or false for on demand
var audioLive = true;

// -- Added your primary stream details here
var audioFlash = [{
	audioType: 'playlist',
	audioUrl: 'http://mp3streamingb.planetwideradio.com:9910/ChallengeRadioMP3.m3u',
	audioServer: '',
	audioEndpoint: ''
}];

// -- Add your HTML5 supported stream details here
// -- THIS NEEDS TO BE A DIRECT mp3 to work with HTML5 for iPADS! 
var audioHTML = [{
    audioType: 'http',
    audioUrl: 'http://mp3streamingb.planetwideradio.com:9910/ChallengeRadioMP3'
}];

// -- bufferTime may need to be adjusted in rare circumstances to facilitate faster loading
var bufferTime = 5;

</script>
</head> 
<body>

<!--

In the following line starting <div class="radioplayer
dark-theme may be swapped for light-theme

'dark-theme' should be used to display a dark set of buttons, when you have chosen a light background
'light-theme' should be used to display a white set of buttons, when you have chosen a dark background

-->

  <div  class="radioplayer light-theme" >
  
    <h1 class="access">Challenge Radio</h1>
	
	<div class="radioplayer-globalnav-wrapper">

		<div class="radioplayer-globalnav">
		
		  <button type="button" class="menu-btn" rel="toggle" role="button" aria-haspopup="true" aria-owns="overlay-container">
		    <span>Toggle Radioplayer Menu</span>
		  </button>
		  
		  <div class="search-box">
			<fieldset>
				<h2 class="access">Search</h2>
				<input type="text" name="searchq" id="search-input" value="" maxlength="27" autocomplete="off" />
				<button type="button" id="search-button" title="Search"><span>Search</span></button>
				<button type="button" id="search-clear" title="Clear search terms"><span>Clear search terms</span></button>
			</fieldset>
		  </div>
		  
		  <span class="rp-logo">
			Radioplayer
		  </span>
		
		</div>
	
	</div>
	
	<div id="overlay-container" class="overlay-container">
		
		  <div class="search-container">
		  
			<div class="tabs">
			  <ul>
				<li class="first" data-content="searchall">
				  <a href="#" role="button" aria-owns="search-all-cont"><span>All</span></a>
				</li>
				<li data-content="searchlive">
				  <a href="#" role="button" aria-owns="search-live-cont"><span>Live</span></a>
				</li>
				<li data-content="searchod">
				  <a href="#" role="button" aria-owns="search-od-cont"><span>Catch Up</span></a>
				</li>
			  </ul>
			</div>
			
			<div class="tabs-wrapper">
			
			  <div class="tab-container scrollable-wrapper" id="search-all-cont"></div>
			  
			  <div class="tab-container scrollable-wrapper" id="search-live-cont"></div>
			  
			  <div class="tab-container scrollable-wrapper" id="search-od-cont"></div>
			
			  <span class="spinner"><img src="img/spinner.gif" alt="" /></span>
			
			</div>
		  
		  </div>
		  
		  <div class="suggest-container" data-results="0">
		  
			<div class="scrollable-wrapper">
			
				<div id="suggest-results"></div>
				
				<div class="suggest-item show-all"><a href="#"></a></div>
			
			</div>
		  
		  </div>
		
		  <div class="menu-container">
		  
			<div class="tabs">
			  <ul>
				<li class="first" data-color="#ff4539" data-content="mystations">
				  <a href="#" role="button" aria-owns="mystations-container"><span>My Stations</span></a>
				</li>
				<li data-color="#9b2d77" data-content="history">
				  <a href="#" role="button" aria-owns="history-container"><span>Recent</span></a>
				</li>
				<li data-color="#03303d" data-content="recommended">
				  <a href="#" role="button" aria-owns="recom-container"><span>Recommended</span></a>
				</li>
				<li data-color="#f6b220" data-content="azlist">
				  <a href="#" role="button" aria-owns="az-container"><span>A-Z List</span></a>
				</li>
			  </ul>
			</div>
			
			<div class="tabs-wrapper">
			
			  <div class="tab-container scrollable-wrapper" id="mystations-container"></div>
			  
			  <div class="tab-container scrollable-wrapper" id="history-container"></div>
			  
			  <div class="tab-container scrollable-wrapper" id="recom-container"></div>
			  
			  <div class="tab-container" id="az-container">
				
				<div class="alphabet">
				  <ul></ul>
				</div>
				
				<div class="sticky-divide-wrapper">
				  <div class="sticky-divide">#</div>
				
				  <div class="scrollable-wrapper azlist-container" id="azlist-container"></div>
				</div>
				
			  </div>
			  
			  <span class="spinner"><img src="img/spinner.gif" alt="" /></span>
			  
			</div>
			
		  </div>
		
	</div>

    <div class="radioplayer-emp-container">
        <div id="empv3"></div>
    </div>

	<div class="radioplayer-localwrapper">
	
		<div class="radioplayer-head">
		
			<a class="stn-logo"  href="http://www.challengeradio.co.uk" target="_blank"   id="station-logo-link" rel="external">Challenge Radio</a>
		  
			<div id="controls">
				<h2 class="access">Player Controls</h2>  
				
				<div id="mystations-toggle">
					<button type="button" id="toggle-mystations"><span>Toggle this station in My Stations</span></button>
				</div>
				 
				<div id="play-controls">
					<button type="button" id="play" title="Play"><span>Play</span></button>
					<button type="button" id="pause" title="Pause"><span>Pause</span></button>
					<button type="button" id="stop" title="Stop"><span>Stop</span></button>
				</div>
				
				<div id="volume-controls">
					<div id="volume-control" class="p100"></div>
					<button type="button" id="volume-mute" class="access" tabindex="0"><span>Mute or unmute volume</span></button>
					<button type="button" id="volume-1" class="access" tabindex="0"><span>Set volume to 20%</span></button>
					<button type="button" id="volume-2" class="access" tabindex="0"><span>Set volume to 40%</span></button>
					<button type="button" id="volume-3" class="access" tabindex="0"><span>Set volume to 60%</span></button>
					<button type="button" id="volume-4" class="access" tabindex="0"><span>Set volume to 80%</span></button>
					<button type="button" id="volume-5" class="access" tabindex="0"><span>Set volume to 100%</span></button>
				</div>
				
			</div>
			
			<div class="now-playing-strip">
			
			  <div id="live-strip" class="loading">

                <div class="loading-indicator"></div>
                <div class="live-info">
                    <span id="live" class="live-indicator"></span>
                    <div class="scrolling-container" tabindex="0">
                        <div class="scrolling-text"></div>
                    </div>
                </div>
			  </div>
			  
			  <div id="od-strip">
		  
		  		<div id="duration">Loading...</div>
		  
		  		<div id="progress-scrubber-background">
				
					<div id="progress-scrubber-playback-bar"></div> 
					<div id="progress-scrubber-load-bar"></div> 
					<div id="od-title"></div>
					
					<div id="progress-scrubber-handle"></div> 
				
				</div>
			  
			  </div>	
				
			</div>
			
		</div>
		<div class="radioplayer-body">
			<div class="radioplayer-plugin">     
				<?php require_once('plugin-space.php'); ?>         
			</div>
		</div>  
	
	</div>
  </div>
	
<!-- jQuery UI with only: core, widget, mouse, position, draggable and droppable -->
<script type="text/javascript" src="js/radioplayer.min.js"></script>
 
<script type="text/javascript">
radioplayer.init();
</script>
</body>
</html>