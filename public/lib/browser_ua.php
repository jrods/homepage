<?php
function browser_ua($ua) {
    $all_engines = [
		'Firefox' => 0,
	    'Chrome' => 0,
	    'Chromium' => 0,
	    'OPR' => 0,
	    'Version' => 0,   // safari
	    'Safari' => 0,
	    'MSIE' => 0
    ];

    foreach ( $all_engines as $browser => $amount ) {
		$all_engines[$browser] = substr_count($ua, (string)$browser);
    }

    if ( $all_engines['Firefox'] == 1 ) {
		return 'Firefox';
    } elseif ( $all_engines['MSIE'] == 1 ) {
		return 'Internet Explorer';
    } elseif ( $all_engines['OPR'] == 1 ) { // opera needs to be before chrome otherwise it's detected as chrome
		return 'Opera'; // why can't you just use OPR and not include chrome and safari in your ua?
    } elseif ( $all_engines['Chrome'] == 1 && $all_engines['Safari'] == 1 ) {
		return 'Chrome';
		// same goes for you, why include safari, you dont even use webkit anymore
		// wouldnt be so bad if there was just a blink tag in there
    } elseif ( $all_engines['Safari'] == 1 && $all_engines['Version'] == 1 ) {
		return 'Safari';
    } elseif ( $all_engines['Chromium'] == 1 ) {
		return 'Chromium';
    } else {
		return false;
    }			 
}
