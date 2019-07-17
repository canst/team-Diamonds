
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

<div id="container-header">
		<h1 id="team">The&nbsp;Freelancer</h1>
<header>
		<div id="logo">
		<figure class="fig_logo"><a href="index.php" > <img src="img/Diamond6.jpg" alt="logo" class="logo" ></a>
		<figcaption id="slogan">when serving becomes duty</figcaption></figure>
	</div>
		<div id="announcesBar">
			<?php if(isset($Username)) echo "welcome  $Username" ;?>
			

	</div>
	<nav>
		<ul>
		<a href="index.php" id="home"><li>Home</li></a>
		<a href="our_team.php"><li>Our&nbsp;Team</li></a>
        <a href="#services"><li>Services</li></a>
		<a href="contact.php" name="contact"><li>Contact</li></a>
	</ul>
	</nav>
</header>
</div>

        
	<div style="position:relative; width:100%; height:400px; text-align:center;padding-top:180px;" class="w3-bar w3-card-4 w3-text-brown">
    
		<?php
	if(isset($_POST['submit'])){ echo "";}
	else{echo "<strong>your email is been taken into account. We will get in touch with you very soon.</strong>";}
	
		?>.</p>        
    </div>
		
        
</div>
	<?php include('footer.php') ;?>


	
</body>
	</html>
