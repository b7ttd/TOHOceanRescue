<?php

/*
 *  Copyright (c) 2010-2013 Tinyboard Development Group
 */
require '/srv/http/tohorweb/inc/config.php';
/*
 * ========================
 *  General/misc functions
 * ========================
 */
function writetosys($staff){
	global $config;
	if (($handle = fopen($csvFile, 'r')) !== false) {
        	// Read CSV header
        	$header = fgetcsv($handle);

        	// Loop through rows to find the user
        	while (($data = fgetcsv($handle)) !== false) {
            	$storedUsername = $data[0];
            	$storedPasswordHash = $data[1];
		}
	}
	// Close that shit, no memory leak
	fclose($handle);
}
/*
 * ======================
 * Math Funcs
 * ======================
 */
function hcf($a, $b){
	$gcd = 1;
	if ($a>$b) {
		$a = $a+$b;
		$b = $a-$b;
		$a = $a-$b;
	}
	if ($b==(round($b/$a))*$a) 
		$gcd=$a;
	else {
		for ($i=round($a/2);$i;$i--) {
			if ($a == round($a/$i)*$i && $b == round($b/$i)*$i) {
				$gcd = $i;
				$i = false;
			}
		}
	}
	return $gcd;
}

function fraction($numerator, $denominator, $sep) {
	$gcf = hcf($numerator, $denominator);
	$numerator = $numerator / $gcf;
	$denominator = $denominator / $gcf;

	return "{$numerator}{$sep}{$denominator}";
}

/*
 * =======================
 * Login related functions
 * =======================
 */

function makeuser($username, $password) {
	global $config;
	$salt = substr(base64_encode(sha1(rand() . time(), true) 
		. $config['cookies'] ['salt']), 0, 15);
	// generate salt, encodes random hash number and returns first 15 digits
	 
	$password = md5($password . $salt);
	// append it to db
	$csvFile = $config['dbpath'];
	
	// open it. do i need to make a new post? idk
	// if (($handle = fopen($csvFile,'w') 
}
function login($username, $password) {
    // very bad very basic login func i created to find whether or not 
    // the inputted username and pass r alid.
    global $config;	
    $csvFile = $config['dbpath'];
    // Hash the submitted password for comparison
    $hashedPassword = md5($password);

    // Open and read CSV file
    if (($handle = fopen($csvFile, "r")) !== false) {
        // Read CSV header
        $header = fgetcsv($handle);

        // assign func ggetcsv to data, while it isn't false, iterate and find details
        while (($data = fgetcsv($handle)) !== false) {
            $storedUsername = $data[0];
            $storedPasswordHash = $data[1];

            if ($storedUsername === $username && $storedPasswordHash === $hashedPassword) {
                // these two are the session cookies
                session_start();
                $_SESSION['username'] = $username;
                $_SESSION['authenticated'] = true;

                // Redirect to mod.php? as a protected page
		$modredirect = $config['mod']['dashboard_path'];
                header("Location: " . $modredirect);
                exit;
            }
        }
        fclose($handle);
    }

    // If no match, return false
    return false;
}

function destroyCookies() {
	// logout
	session_start();
	$_SESSION['authenticated'] = false;
	echo "get fucked";
	header("Location: /");
	exit;	
}
/*
 * =======================
 * Login related funcs
 * =======================
 */
function event() {
	global $events;
	
	$args = func_get_args();
	
	$event = $args[0];
	
	$args = array_splice($args, 1);
	
	if (!isset($events[$event]))
		return false;
	
	foreach ($events[$event] as $callback) {
		if (!is_callable($callback))
			error('Event handler for ' . $event . ' is not callable!');
		if ($error = call_user_func_array($callback, $args))
			return $error;
	}
	
	return false;
}

function event_handler($event, $callback) {
	global $events;
	
	if (!isset($events[$event]))
		$events[$event] = array();
	
	$events[$event][] = $callback;
}

function reset_events() {
	global $events;
	
	$events = array();
}


