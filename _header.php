<!doctype html>
<html lang="en-GB">
	<head>

		<title>Magic of the Programming</title>
		
		<link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="./bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="./style.css">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta charset="utf-8">

	</head>
	<body>
			<nav id="navbar">
				<div class="container">
					<ul class="nav nav-pills">
						<li <? echo ($_SERVER['QUERY_STRING'] == '')? ' class="active"' : '';?>><a href="./index.php">Home</a></li>
						<li <? echo ($_SERVER['QUERY_STRING'] == 'syllabus')? ' class="active"' : '';?>><a href="./?syllabus">Syllabus</a>
						<!-- lessons -->
						<li class="dropdown"> <!--   -->
								<a class="dropdown-toggle<? echo (strpos($_SERVER['QUERY_STRING'],'-lesson') > 0 )? ' btn btn-primary' : '';?>" data-toggle="dropdown">Lessons<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="./?first-lesson">first lesson: html</a></li>
										<li><a href="./?second-lesson">second lesson: html - area, table, form</a></li>
										<li><a href="./?third-lesson">third lesson: styling</a></li>
										<li><a href="./?fourth-lesson">fourth lesson: bootstrap</a></li>
										<li><a href="./?fifth-lesson">fifth lesson: js</a></li>
									</ul>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle<? echo (strpos($_SERVER['QUERY_STRING'],'-homework') > 0 )? ' btn btn-primary' : '';?>" data-toggle="dropdown">Homework<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="./?first-homework">first homework</a></li>
										<li><a href="./?second-homework">second homework</a></li>
										<li><a href="./?third-homework">third homework</a></li>
										<li><a href="./?fourth-homework">fourth homework</a></li>
										<li><a href="./?fifth-homework">fifth homework</a></li>
									</ul>
						</li>
						<li <? echo ($_SERVER['QUERY_STRING'] == 'extra')? ' class="active"' : '';?>><a href="./?extra">Extra</a></li>
						<!--<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown">Extra<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="./?first-extra-homework">first homework</a></li>
										<li><a href="./?second-extra-homework">second homework</a></li>
										<li><a href="./?third-extra-homework">third homework</a></li>
										<li><a href="./?fourth-extra-homework">fourth homework</a></li>
										<li><a href="./?fifth-extra-homework">fifth homework</a></li>
									</ul>
						</li>-->
						<li <? echo ($_SERVER['QUERY_STRING'] == 'project')? ' class="active"' : '';?>><a href="./?project">Project</a></li>
						<li <? echo ($_SERVER['QUERY_STRING'] == 'final-exam')? ' class="active"' : '';?>><a href="./?final-exam">Final Exam</a></li>
						<li class="dropdown">
							<a class="dropdown-toggle<? echo (strpos($_SERVER['QUERY_STRING'],'-playground') > 0 )? ' btn btn-primary' : '';?>" data-toggle="dropdown">Tools<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="./?html-playground">html playground</a></li>
										<li><a href="./?js-playground">js playground</a></li>
									</ul>
						</li>
					</ul>
					
				</div>
			</nav>

		<div class="jumbotron">
			<div class="container">
				<h1>Magic of the Programming</h1>
				<p>Get the knowledge of website creating </p>
				<a href="" target="_blank" class="btn btn-info" role="button">Learn</a>
			</div>
		</div>