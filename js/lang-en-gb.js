/**
 * All intellectual property rights in this Software throughout the world belong to UK Radioplayer, 
 * rights in the Software are licensed (not sold) to subscriber stations, and subscriber stations 
 * have no rights in, or to, the Software other than the right to use it in accordance with the 
 * Terms and Conditions at www.radioplayer.co.uk/terms. You shall not produce any derivate works 
 * based on whole or part of the Software, including the source code, for any other purpose other 
 * than for usage associated with connecting to the UK Radioplayer Service in accordance with these 
 * Terms and Conditions, and you shall not convey nor sublicense the Software, including the source 
 * code, for any other purpose or to any third party, without the prior written consent of UK Radioplayer.
 *
 * @name lang
 * @description Localisation resource for user-visible strings
 *
 * @author Gav Richards <gav@gmedia.co.uk>
 *
 */
 
radioplayer.lang = {
	
	general: {
		radioplayer: 			'Radioplayer',		// Accessibility
		open_menu: 				'Open Radioplayer Menu',	// Accessibility
		close_menu:				'Close Radioplayer Menu',	// Accessibility
		close_search:			'Close Radioplayer Search',	// Accessibility
		
		fail_message:			'<h1>We have a problem...</h1>' + 
								'<p><strong>Sorry</strong>, there\'s a temporary glitch. Please check your internet connection.</p>' +
								'<p>If the problem\'s at our end, we\'ll have spotted it already, and we\'ll be working on it.<br />Try again shortly.</p>',
		
		reduced_func_anno:		'You\'re not getting the full Radioplayer experience in this browser. ' + 
								'<a href="http://www.radioplayer.co.uk/cookiehelp/?mob=false" target="_blank">Change cookie settings</a>, or <a href="http://www.radioplayer.co.uk/apps" target="_blank">upgrade to our app.</a>',

	    cookie_anno:            'Radioplayer uses cookies to enhance your experience.<br />' +
	                            'To find out how, <a href="http://www.radioplayer.co.uk/" target="_blank">click here</a>. ' +
	                            'If you continue, we\'ll assume you\'re happy to receive all Radioplayer cookies.'
	},
	
	controls: {
		loading: 				'Loading...',
		player_controls: 		'Player Controls',		// Accessibility
		play: 					'Play',					// Accessibility
		pause: 					'Pause',				// Accessibility 
		stop: 					'Stop', 				// Accessibility
		mute: 					'Mute',					// Accessibility
		unmute: 				'Unmute',				// Accessibility
		set_volume:				'Set volume',			// Accessibility
		set_volume_20: 			'Set volume to 20%',	// Accessibility
		set_volume_40: 			'Set volume to 40%',	// Accessibility
		set_volume_60: 			'Set volume to 60%',	// Accessibility
		set_volume_80: 			'Set volume to 80%',	// Accessibility
		set_volume_100: 		'Set volume to 100%',	// Accessibility
		use_device_controls:	'Please use the volume controls on your device.',
		press_play_prompt:		'Press play to start listening',
        skip_forward_5_seconds: 'Skip forward 5 seconds',
        skip_back_5_seconds:    'Skip back 5 seconds',
        skip_forward_30_seconds:'Skip forward 30 seconds',
        skip_back_30_seconds:   'Skip back 30 seconds',
        skip_forward_1_minute:  'Skip forward 1 minute',
        skip_back_1_minute:     'Skip back 1 minute',
        skip_forward_5_minutes: 'Skip forward 5 minutes',
        skip_back_5_minutes:    'Skip back 5 minutes',
        skip_forward_10_minutes:'Skip forward 10 minutes',
        skip_back_10_minutes:   'Skip back 10 minutes',
        skip_forward_30_minutes:'Skip forward 30 minutes',
        skip_back_30_minutes:   'Skip back 30 minutes'
	},

	playing: {
		live:					'Live',
		live_width:				28,
        format:                 '{artist} - {track}'
	},
	
	menu_tabs: {										// width values must total 380px
		tab_1_text: 			'My Stations',
		tab_1_width:			'107px',
		tab_2_text:				'Recent',
		tab_2_width:			'75px',
		tab_3_text:				'Recommended',
		tab_3_width:			'120px',
		tab_4_text: 			'A-Z List',
		tab_4_width:			'78px'
	},
	
	recommendations: {
		locale: 				'en_GB'
	},
	
	azlist: {
		alphabet_array:			['#','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'],
		no_stations_beginning: 	'There are no stations beginning with {letter}',
		view_stations_beginning:'View stations beginning with {letter}',
		a_number:				'a number', // This is used in place of {letter} for the previous two strings, where the user is hovering over #
		no_stations: 			'No stations for this letter'
	},
	
	mystations: {
		add_this:				'Add this station to My Stations',		// Accessibility
		remove_this:			'Remove this station from My Stations',	// Accessibility
		no_items: 				'<h1>Add to My Stations</h1>' + 
								'<p>You haven\'t saved any stations yet.<br />Click the grey heart icon next to your favourite stations to save them here.</p>'
	},
	
	search: {
		search: 				'Search',				// Accessibility
		clear:					'Clear search terms',	// Accessibility
		search_radioplayer: 	'Search UK Radio',
		
		suggested_title:		'Suggested Search Results',
		suggested_stations:		'Suggested Stations',
		suggested_catch_up:		'Suggested Catch Up',
		show_all_results_for:	'Show all results for {terms}', // {terms} will be swapped for the search string in this message
		
		tab_all:				'All',
		tab_all_title:			'All Search Results',
		tab_live:				'Live',
		tab_live_title:			'Live Search Results',
		tab_catchup:			'Catch Up',
		tab_catchup_title:		'Catch Up Search Results',
		
		show_fewer_stations: 	'Show fewer {group} stations',	// The {group} placeholder will be swapped for the name of the station group
		show_more_stations: 	'Show more {group} stations',
		show_information: 		'Show Information',		// Accessibility
		hide_information: 		'Hide Information',		// Accessibility
		
		no_all_results:			'<h1>No Results</h1>' + // {terms} will be swapped for the search string in these three messages
								'<p>We can\'t find any stations or programmes relating to <br /><span class="terms">{terms}</span></p>' +
								'<p>Please check your spelling - or try searching again, using a <strong>station name</strong>, a <strong>programme name</strong>, or a <strong>place</strong>.</p>',
		
		no_live_results:		'<h1>No Results</h1>' + 
								'<p>We can\'t find any stations relating to <br /><span class="terms">{terms}</span></p>' +
								'<p>Please check your spelling - or try searching again, using a <strong>station name</strong>, a <strong>programme name</strong>, or a <strong>place</strong>.</p>',
		
		no_od_results:			'<h1>No Results</h1>' + 
								'<p>We can\'t find any programmes relating to <br /><span class="terms">{terms}</span></p>' +
								'<p>Please check your spelling - or try searching again, using a <strong>station name</strong>, a <strong>programme name</strong>, or a <strong>place</strong>.</p>',
								
		live: 					'Live',
		coming_up: 				'Coming Up',
		broadcast: 				'Catch Up',

		in_seconds: 			'in seconds',
		in_minute: 				'in 1 minute',
		in_minutes: 			'in {n} minutes',		// {n} placeholder will be swapped for the number
		second_ago: 			'1 second ago',
		seconds_ago: 			'{n} seconds ago',
		minute_ago: 			'1 minute ago',
		minutes_ago: 			'{n} minutes ago',
		hour_ago:				'1 hour ago',
		hours_ago:				'{n} hours ago',
		day_ago:				'1 day ago',
		days_ago:				'{n} days ago',
		week_ago:				'1 week ago',
		weeks_ago:				'{n} weeks ago',
		month_ago:				'1 month ago',
		months_ago:				'{n} months ago',
		year_ago:				'1 year ago',
		years_ago:				'{n} years ago'
	},
	
	stream_error: {
		unavailable: 			'<h1>The sound of silence</h1>' +
								'<p>We\'re trying to play this station, but we\'re having problems. Apologies.</p>' +
								'<p>The station\'s stream may be broken, or there may be a mis-match between this stream, and your device.</p>' +
								'<p>Fortunately, there\'s another way of listening. <a href="http://www.radioplayer.co.uk/apps" target="_blank">Download our free app</a>, and put Radioplayer on your phone or tablet.</p>',
		
		device_incompatible: 	'<h1>The sound of silence</h1>' +
								'<p>Radioplayer\'s trying to play this station, but there may be a mis-match between this stream, and your device.</p>' +
								'<p>Fortunately, there\'s another way of listening. <a href="http://www.radioplayer.co.uk/apps" target="_blank">Download our free app</a>, and put Radioplayer on your phone or tablet.</p>'
	}
	
};