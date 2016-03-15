<?php

	// requires anti-spam

	if(isset($_REQUEST['onpage'])
			and isset($_REQUEST['text_to_correct']) 
			and isset($_REQUEST['correction']) )
	{
		if(!isset($_REQUEST['from']) || $_REQUEST['from'] == '' )
		{
			$_REQUEST['from'] = '"WotP correction sender" <correction@wonders-of-the-programming.uk>';
		}
		mail(	
					// To
					"angel_of_the_light@zoho.com",
					// subject
					"WotP: correction",
					// message
					"Greetings. " . PHP_EOL
					"On page " . $_REQUEST['onpage'] . " user found error[s] in text: " . PHP_EOL
					 $_REQUEST['text_to_correct'] . PHP_EOL. PHP_EOL. PHP_EOL
					 "he/she proposed to change it to this text: " . PHP_EOL
					 $_REQUEST['correction'] . PHP_EOL . PHP_EOL . " That's all.",
					// headers
					"From: "	.	$_REQUEST['from']												);
	}


?>