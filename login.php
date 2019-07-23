<?php
	$bdd = new PDO("mysql:host=localhost;dbname=bitdiamonds;charset=utf8","root","");
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

require_once 'scripts/session.php';
if(isset($_POST['enter'])){ 
/*$Username=$_POST['Username'];
$password=$_POST['pwd'];*/
         
		 $resultat = mysql_query("SELECT * FROM register Username='" . $_POST["Username"]."' ". ", password='" . $_POST['password'] . "'", $connexion);
		$selected = mysql_fetch_array($resultat);
		$Username = $selected["Username"];
		$password = $selected["pwd"];
		$password = "._+#;6_A7!2[a-z]@%`&8-*7z".md5($_POST['pwd']);
                $req->execute([$Username,$password]);
		if(!$resultat){
			echo "error in the process</br>";
		echo "the error is probally related to " . mysql_error($connexion);	
		}/*
		else{
	
		
    if(empty($Username) && empty($password)){
        
        $erreur="All the fields are required.";
     } else{
        
        $req = $bdd->prepare("INSERT INTO login SET  Username= ?, password= ?");
                $password = "._+#;6_A7!2[a-z]@%`&8-*7z".md5($_POST['pwd']);
                $req->execute([$Username,$password]);
        
            $_SESSION['Username']=$_POST['Username'];
            $_SESSION['pwd']=$_POST['pwd'];
            header("Location: index2.php") ;            
    }
       */
    }
?>
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
	<link rel="stylesheet" type="text/css" href="css/media_query_all.css">
	<link rel="stylesheet" type="text/css" href="css/w3.css">
	<!--links css-->
	
	<!--links JavaScript-->
	
	<!--links JavaScript-->
	
</head>
	
	<body>

<div id="container-header" class="toggle_btn">
	<span></span>
		<h1 id="team">The&nbsp;Freelancer</h1>
<header>
	<div class="menu">
		<div id="logo-container">
		<figure class="fig_logo re"><a href="index.php"> <img src="img/logo_freelancer.png" alt="logo" class="logo ra" ></a>
		<figcaption id="slogan">when serving becomes duty</figcaption></figure>
	</div>
		<div id="loginBar">
				
		</div>
		<nav class="nav">
			<ul>
				<a href="index.php" id="home"><li>Home</li></a>
				<a href="our_team.php"><li>Our&nbsp;Team</li></a>
				<a href="signUp.php"><li>Services</li></a>
				<a href="#" name="FAQ"><li>FAQ</li></a>
			</ul>
		</nav>
	</div>
</header>
</div>
	

<div class="login-form w3-container">
	<h2 class="login-title">login&nbsp;&nbsp;&nbsp;here</h2>
		<form action="index2.php" method="post" class="">
			<input type="text" name="Username" id="Username" class="inpt" required="true" placeholder="Enter your Usernane here" value="<?php if(isset($Username)){ echo $Username ;}?>" class="w3-round" autofocus>
			<input type="password"  name="pwd" required="true"id="password" class="inpt" placeholder="type your Password here" class="w3-round" autofocus>
			<input type="submit" name="enter" value="Enter" class="w3-button w3-round inpt w3-teal tex">
		</form>			
</div>
<?php include"footer.php"; ?>