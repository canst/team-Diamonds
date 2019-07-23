
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" >
<head>
	
	<title>the_freelancer</title>
	<meta charset="utf-8">
	<meta description="">
	<meta keywords="article writing, web design, translation and interpretation, career adviser, English, freelance">
	<meta name="viewport" content="width=device-width, initial-sacle=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	
	<!--links css-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/w3.css">
	<!--links css-->
	
	<!--links JavaScript-->
	
	<!--links JavaScript-->
	
</head>
<body>

<div id="container-header" class="">
		<h1 id="team">The&nbsp;Freelancer</h1>
<header class="">
		<div id="logo-container" class="">
		<figure class="fig_logo re">
		<a href="index2.php" > <img src="img/logo_freelancer.png" alt="logo" class="logo ra" ></a>
		<figcaption id="slogan">when serving becomes duty</figcaption>
		</figure>
	</div>
		<div id="announcesBar">
			
			<form action="index.php" method="post" class="login-topbar">
				<span>User:
				<?php while(isset($_POST['Username'])) 
					{
					 echo $_POST['Username'];
					
					}
				?></span>
				<input type="submit" name="logout" value="logout" class="w3-button w3-round w3-teal login_btn2">
			</form>

	</div>
	<nav>
		<ul>
		<a href="index2.php" id="home"><li>Home</li></a>
		<a href="our_team.php"><li>Our&nbsp;Team</li></a>
		<span class="dropdown">
        <li  class="dropdown-btn">Services</li>
			<span class="dropdown-content">
				<a href="web.php">web-Design</a>
				<a href="articles.php">Article writing</a>
				<a href="TranslationPortal.php">Translation</a>
				<a href="career.php">Career advise</a>
			</span>
		</span>
		<a href="#" name="FAQ"><li>FAQ</li></a>
	</ul>
	</nav>
</header>
</div>
