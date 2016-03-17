<?php
	require 'mysql_open.php';
	// requires anti-spam

	if(isset($_REQUEST['onpage'])
			and isset($_REQUEST['text_to_correct']) 
			and isset($_REQUEST['correction']) )
	{
		if(!isset($_REQUEST['from']) || $_REQUEST['from'] == '' )
		{
			$_REQUEST['from'] = '"WotP correction sender" <correction@wonders-of-the-programming.uk>';
		}


		$query = 'insert into `grammar` values
																		(uuid(), "' . $_REQUEST['onpage'] . '", "' . $_REQUEST['from'] . '", "' . $_REQUEST['text_to_correct'] . '", "' . $_REQUEST['correction'] . '", now(), 0);';
		if (!mysqli_query($connection, $query))
		{
			echo 'Inserting to grammar... Oh... <br />query is `' . $query . '`.';
		}
	}
?>