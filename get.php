<?php

	$items = array(
		'syllabus', 
		'first-lesson', 'first-homework', 
		'second-lesson', 'second-homework', 
		'third-lesson', /*'third-homework', 
		'fourth-lesson', 'fourth-homework', 
		'fifth-lesson', 'fifth-homework', */
		'home', './tools/html-playground', './tools/js-playground'
		);

	if ( isset($_REQUEST['page'])
		and in_array($_REQUEST['page'], $items))
	{
		require $_REQUEST['page'] . '.html';
	}

?>