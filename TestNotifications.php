<?php

    	require_once('PushNotifications.php');

	// Message payload
	$msg_payload = array (
		'mtitle' => 'Test push notification title',
		'mdesc' => 'Test push notification body',
	);
	
	// For Android
	$regId = 'eQkk2-tz16E:APA91bFYrrqfjVzRMM3weB6h-nghZoWMj-LgoLqdDxrrZ9XjfaS0cPHgei3yKePh9ShtvaEQvqby_qDAoS7G4mAZMS83Fn9HBPJvIWjHqHP4V64_e5LITBLFpWiyMEyM-pQ3wJoO68P1';
	// For iOS
	$deviceToken = 'FE66489F304DC75B8D6E8200DFF8A456E8DAEACEC428B427E9518741C92C6660';
	// For WP8
	$uri = 'http://s.notify.live.net/u/1/sin/HmQAAAD1XJMXfQ8SR0b580NcxIoD6G7hIYP9oHvjjpMC2etA7U_xy_xtSAh8tWx7Dul2AZlHqoYzsSQ8jQRQ-pQLAtKW/d2luZG93c3Bob25lZGVmYXVsdA/EKTs2gmt5BG_GB8lKdN_Rg/WuhpYBv02fAmB7tjUfF7DG9aUL4';
	
	// Replace the above variable values
	
	echo "ok </br>";
    	$result = PushNotifications::android($msg_payload, $regId);

    	echo "result " + $result;

    	
    //	PushNotifications::WP8($msg_payload, $uri);
    	
//    	PushNotifications::iOS($msg_payload, $deviceToken);

?>
