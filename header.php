<?php
	$bdd = new PDO("mysql:host=localhost;dbname=bitdiamonds;charset=utf8","root","");
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//recording data from users into DB
if(isset($_POST['login'])){ 
$User=$_POST['Username'];
$pwd=$_POST['pwd'];

	$req = $bdd->prepare("INSERT INTO user_login SET  User= ?,pwd = ?");
                $password = sha1($_POST['pwd']);
                $req->execute([$User,$pwd]);
      
            $_SESSION['Username']=$_POST['Username'];
            header("Location: index2.php") ;} 						?>
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
		<figure class="fig_logo re"><a href="index.php"> <img src="img/logo_freelancer.png" alt="logo" class="logo ra" ></a>
		<figcaption id="slogan">when serving becomes duty</figcaption></figure>
	</div>
		<div id="loginBar">
			<form action="index2.php" method="post" class="login-topbar">
				<span>Sign in</span>
				<input type="text" name="Username" required="true" placeholder="Usernane"
				value="<?php if(isset($Username)) echo $Username ;?>">
				<input type="password"  name="pwd" required="true" placeholder="Password">
				<input type="submit" name="login" value="login">
			</form>
	</div>
	<nav>
		<ul>
		<a href="index.php" id="home"><li>Home</li></a>
		<a href="our_team.php"><li>Our&nbsp;Team</li></a>
        <a href="signUp.php"><li>Services</li></a>
		<a href="#" name="FAQ"><li>FAQ</li></a>
	</ul>
	</nav>
</header>
</div>
