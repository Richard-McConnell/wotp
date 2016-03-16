<?php

	require 'mysql_open.php';
	if ($connection) 
	{
		print 'Connection is Ok. <br />';	
			$result = mysqli_query($connection, 'select * from test');
			if ($result) 
				print 'Query is Ok.';
			else
			{
				print 'Query... Oh... <br /> ' . var_dump($connection) ;
			}
	}
	else
	{
		print 'Connection... Oh...';
	}

?>
