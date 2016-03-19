<?php

	$items = array(
		'syllabus', 
		'first-lesson', 'first-homework', 
		'second-lesson', 'second-homework', 
		'third-lesson', /*'third-homework', 
		'fourth-lesson', 'fourth-homework', 
		'fifth-lesson', 'fifth-homework', */
		'js',
		'home', './tools/html-playground', './tools/js-playground',
		'cabinet-of-teacher', 'links'
		);


	if ( isset($_REQUEST['page'])
		and in_array($_REQUEST['page'], $items))
	{
		if( !(strpos($_REQUEST['page'], '.php') > 0) )
			$_REQUEST['page'] .= '.html';
		require $_REQUEST['page'];
	}

?>