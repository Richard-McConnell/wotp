<!doctype html>
<html lang="en-GB">
	<head>

		<title>Wonders of the Programming</title>
		
		<?php
			// for official server loading of scripts from MAXCDN
			if ($_SERVER['HTTP_HOST'] == '127.0.0.1')
			{
		?>	
			<link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css">
	    <script src="./jquery/jquery.min.js"></script>
			<script src="./bootstrap/js/bootstrap.min.js"></script>
		<?
			} else {
		?>
			<!-- bootstrap css -->
			<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css">
			<!-- jquery lib -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
			<!-- bootstrap js -->
			<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>		
		<?
			}
		?>
		<link rel="stylesheet" type="text/css" href="./style.css">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta charset="utf-8">
		<script language="javascript">
			var selected_text = "";

			function body_onkeyup(element, e)
			{
				e = e || event;
				if(e.ctrlKey && e.keyCode == 13)
				{
					var correction = prompt('Propose correction of this text', selected_text);
					if(correction == false) return;
					var from = prompt('Please, enter your email:', "");
					var url = "./correction.php?onpage=" + window.location.href +  "&text_to_correct=" + selected_text + "&correction=" + correction + "&from=" + from;
					$.ajax({method: "post", url: url, error: function(result){ alert("Your correction is not sent. Please, send it again when reason will be fixed. Thank you. Status: " + result.statusText);}});
				}
			}

			function save_selected_text()
			{
				selected_text = window.getSelection();
			}

			function open_page(page)
			{
					$.ajax({url: "./get.php?page=" + page, success: function(result){$("#content").html(result); window.scrollTo(0, 0)}});
			}

		</script>
	</head>
	<body onkeyup="body_onkeyup(this, event)" onmouseup="save_selected_text()">
			<nav id="navbar">
				<div class="container">
					<ul class="nav nav-pills">
						<li><a onclick="open_page('home')">Home</a></li>
						<li <? echo ($_SERVER['QUERY_STRING'] == 'syllabus')? ' class="active"' : '';?>><a onclick="open_page('syllabus')">Syllabus</a>
						<!-- lessons -->
						<li class="dropdown">
								<a class="dropdown-toggle<? echo (strpos($_SERVER['QUERY_STRING'],'-lesson') > 0 )? ' btn btn-primary' : '';?>" data-toggle="dropdown">Lessons<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a onclick="open_page('first-lesson')">first lesson: html</a></li>
										<li><a onclick="open_page('second-lesson')">second lesson: html - area, table, form</a></li>
										<li><a onclick="open_page('third-lesson')">third lesson: styling</a></li>
										<li><a onclick="open_page('fourth-lesson')">fourth lesson: bootstrap</a></li>
										<li><a onclick="open_page('fifth-lesson')">fifth lesson: bootstrap II</a></li>
									</ul>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle<? echo (strpos($_SERVER['QUERY_STRING'],'-homework') > 0 )? ' btn btn-primary' : '';?>" data-toggle="dropdown">Homework<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a onclick="open_page('first-homework')">first homework</a></li>
										<li><a onclick="open_page('second-homework')">second homework</a></li>
										<li><a onclick="open_page('third-homework')">third homework</a></li>
										<li><a onclick="open_page('fourth-homework')">fourth homework</a></li>
										<li><a onclick="open_page('fifth-homework')">fifth homework</a></li>
									</ul>
						</li>
						<li <? echo ($_SERVER['QUERY_STRING'] == 'project')? ' class="active"' : '';?>><a onclick="open_page('project')">Project</a></li>
						<li <? echo ($_SERVER['QUERY_STRING'] == 'final-exam')? ' class="active"' : '';?>><a onclick="open_page('final-exam')">Final Exam</a></li>
						<li class="dropdown">
							<a class="dropdown-toggle<? echo (strpos($_SERVER['QUERY_STRING'],'-playground') > 0 )? ' btn btn-primary' : '';?>" data-toggle="dropdown">Tools<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a onclick="open_page('./tools/html-playground')">html playground</a></li>
										<li><a onclick="open_page('./tools/js-playground')">js playground</a></li>
									</ul>
						</li>
					</ul>
					
				</div>
			</nav>

		<div class="jumbotron">
			<div class="container">
				<h1>Wonders of the Programming</h1>
				<p>Get the knowledge of website creating </p>
				<a onclick="open_page('first-lesson')" target="_blank" class="btn btn-info" role="button">Learn</a>
			</div>
		</div>

		<section id="content">

