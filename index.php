<?php

	require '_header.php';

	switch ($_SERVER['QUERY_STRING'])
	{
		case 'syllabus': @require 'syllabus.html'; break;
		case 'first-lesson': @require 'first-lesson.html'; break;
		case 'second-lesson': @require 'second-lesson.html'; break;
		case 'third-lesson': @require 'third-lesson.html'; break;
		case 'fourth-lesson': @require 'fourth-lesson.html'; break;
		case 'fifth-lesson': @require 'fifth-lesson.html'; break;
		case 'first-homework': @require 'first-homework.html'; break;
		case 'second-homework': @require 'second-homework.html'; break;
		case 'third-homework': @require 'third-homework.html'; break;
		case 'fourth-homework': @require 'fourth-homework.html'; break;
		case 'fifth-homework': @require 'fifth-homework.html'; break;
		case 'extra': @require 'extra.html'; break;
		case 'html-playground': @require './tools/html.html'; break;
		case 'js-playground': @require './tools/js.html'; break;
		case 'project': @require 'project.html'; break;
		case 'final-exam': @require 'final-exam.php'; break;
	}


	require '_footer.php';
	
?>