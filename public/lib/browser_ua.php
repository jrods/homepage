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

function getBrowser()
{
    $u_agent = $_SERVER['HTTP_USER_AGENT'];
    $bname = 'Unknown';
    $platform = 'Unknown';
    $version= "";

    //First get the platform?
    if (preg_match('/linux/i', $u_agent)) {
        $platform = 'linux';
    }
    elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
        $platform = 'mac';
    }
    elseif (preg_match('/windows|win32/i', $u_agent)) {
        $platform = 'windows';
    }
   
    // Next get the name of the useragent yes seperately and for good reason
    if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent))
    {
        $bname = 'Internet Explorer';
        $ub = "MSIE";
    }
    elseif(preg_match('/Midori/i',$u_agent))
    {
    	$bname = 'Midori';
    	$ub = "Midori";
    }
    elseif(preg_match('/Firefox/i',$u_agent))
    {
        $bname = 'Mozilla Firefox';
        $ub = "Firefox";
    }
    elseif(preg_match('/Chrome/i',$u_agent))
    {
        $bname = 'Google Chrome';
        $ub = "Chrome";
    }
    elseif(preg_match('/Safari/i',$u_agent))
    {
        $bname = 'Apple Safari';
        $ub = "Safari";
    }
    elseif(preg_match('/Opera/i',$u_agent))
    {
        $bname = 'Opera';
        $ub = "Opera";
    }
    elseif(preg_match('/Netscape/i',$u_agent))
    {
        $bname = 'Netscape';
        $ub = "Netscape";
    }
   
    // finally get the correct version number
    $known = array('Version', $ub, 'other');
    $pattern = '#(?<browser>' . join('|', $known) . ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
    if (!preg_match_all($pattern, $u_agent, $matches)) {
        // we have no matching number just continue
    }
   
    // see how many we have
    $i = count($matches['browser']);
    if ($i != 1) {
        //we will have two since we are not using 'other' argument yet
        //see if version is before or after the name
        if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){
            $version= $matches['version'][0];
        }
        else {
            $version= $matches['version'][1];
        }
    }
    else {
        $version= $matches['version'][0];
    }
   
    // check if we have a number
    if ($version==null || $version=="") {$version="?";}
   
    return array(
        'userAgent' => $u_agent,
        'name'      => $bname,
        'version'   => $version,
        'platform'  => $platform,
        'pattern'    => $pattern
    );
}

// now try it
/*
$ua=getBrowser();
$yourbrowser= "Your browser: " . $ua['name'] . " " . $ua['version'] . " on " .$ua['platform'] . " reports: <br >" . $ua['userAgent'];
print_r($yourbrowser);
*/