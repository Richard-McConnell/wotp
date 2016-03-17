<?php

	require '../mysql_open.php';


	$queries = array('grammar' =>  'create table if not exists grammar
								(
									id varchar(38) primary key,
									from_page varchar(255),
									from_email varchar(63),
									text_to_correct text,
									proposal text,
									when_sent datetime,
									edited bool
								);' );

	foreach ($queries as $table => $query) 
	{	
		print '`' . $table . '`';
		if(mysqli_query($connection, $query))
			print ' is okay. <br />'; 
		else
			print '... Oh... <br />';
	}






?>