<?php

 $bdd = new PDO("mysql:host=localhost;dbname=bitdiamonds;charset=utf8","root","");
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

require_once 'scripts/session.php';

if(isset($_POST['register'])){ 
$lastname=$_POST['lastname'];
$firstname=$_POST['firstname'];
$Username=$_POST['Username'];
$email=$_POST['email'];
$password=$_POST['pwd'];
$sexe=$_POST['sexe'];
$user_type=$_POST['user_type'];
$country=$_POST['country'];
$comments=$_POST['commentaire'];

 $check = mysql_query("select * from register where lastname='" . $_POST["lastname"]."' "
		. ", firstname='" . $_POST['firstname'] . "' "
		. ", Username='" . $_POST['Username'] . "' "
		. ", email='" . $_POST['email'] . "' "
		. ", password='" . $_POST['pwd'] . "' "
		. ", sexe='" . $_POST['sexe'] . "' "
		. ", user_type='" . $_POST['user_type'] . "' "
		. ", country='" . $_POST['country'] . "' ", $connexion);
		$select = mysql_fetch_array($check);
		$lastname=$select['lastname'];
		$firstname=$select['firstname'];
		$Username=$select['Username'];
		$email=$select['email'];
		$password=$select['pwd'];
		$sexe=$_POST['sexe'];
		$user_type=$select['user_type'];
		$country=$select['country'];
		$comments=$select['commentaire'];
		if(!$check){
			echo "error in the process</br>";
		echo "the error is probally related to " . mysql_error($connexion);		
		}
		else{
         
    if(empty($lastname) || empty($firstname)||empty($Username) || empty($email) || empty($password)|| empty($commentaire) ){
        
        $erreur="All the fields are required.";
     } else{
        
        $req = $bdd->prepare("INSERT INTO register SET  lastname= ?, firstname= ?,Username=?, email= ?, password= ?,  sexe= ?, user_type=?, country= ?, comments = ?");
                 $password = "._+#;6_A7!2[a-z]@%`&8-*7z".md5($_POST['pwd']);
		$req->execute([$lastname,$firstname,$password,$sexe,$email,$user_type,$country, $comments]);
        
		 if (!empty($_POST['pwd'])){
			$test = test_input($_POST['pwd']);
		 if(!preg_match("/^[a-zA-Z]*$/",$test)){$erreur = "only letters and white space allowed";}}
            $_SESSION['nom']=$_POST['nom'];
            $_SESSION['email']=$_POST['email'];
            header("Location: index2.php") ; 
		}
		}
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
<script>
	var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
</script>
	
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
			<span></span>
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

	<link rel="stylesheet" href="css/w3.css" />
<div id="signUp-container class="w3-container"> 
   <form class="form-create" action="index2.php" method="post">
				<h3 class="w3-center signUp-title">Create an account</h3>
		<div class="login_form" id="register-div-topbar">
			<div class="loginalert" id="register_message_area_topbar"></div>
									
				<input type="text" name="lastname" id="user_name_register" class="inpts" required="true"class="w3-input w3-border" placeholder="Name">
									
				<input type="text" name="firstname" id="user_firstname_register" class="inpts"  required="true" class="w3-input w3-border" placeholder="FirstName">
									
				<input type="text" name="Username" id="user_Username_register" class="inpts"  required="true" class="w3-input w3-border" placeholder="Username">
											
				<input type="email" name="email" id="user_email_register" class="inpts"  class="w3-input w3-border" placeholder="Email">
											
				<input type="password" name="pwd" id="user_password" class="inpts"  required="true" class="" placeholder="Password">
										  
				<input type="password" name="pwd_r" id="user_password_retype" 
				<?php if (!empty($_POST['pwd_r'])){
								$test = test_input($_POST['pwd_r']);
							if(!preg_match($_POST['pwd'],$test)){$erreur = "password don't match";}}
				?>
				class="inpts"  required="true" class="" placeholder="Confirm"><br> <br>
				
				<input type="text" name="user_type" class="inpts"  placeholder="Buyer/Seller"><br>
			
			<select name="country" class="inpts"  size="1%"> 
				<option value="France" selected="selected">France </option>
				<option value="Afghanistan">Afghanistan </option>
				<option value="Afrique_Centrale">Afrique_Centrale </option>
				<option value="Afrique_du_sud">Afrique_du_Sud </option> 
				<option value="Albanie">Albanie </option>
				<option value="Algerie">Algerie </option>
				<option value="Allemagne">Allemagne </option>
				<option value="Andorre">Andorre </option>
				<option value="Angola">Angola </option>
				<option value="Anguilla">Anguilla </option>
				<option value="Arabie_Saoudite">Arabie_Saoudite </option>
				<option value="Argentine">Argentine </option>
				<option value="Armenie">Armenie </option> 
				<option value="Australie">Australie </option>
				<option value="Autriche">Autriche </option>
				<option value="Azerbaidjan">Azerbaidjan </option>

				<option value="Bahamas">Bahamas </option>
				<option value="Bangladesh">Bangladesh </option>
				<option value="Barbade">Barbade </option>
				<option value="Bahrein">Bahrein </option>
				<option value="Belgique">Belgique </option>
				<option value="Belize">Belize </option>
				<option value="Benin">Benin </option>
				<option value="Bermudes">Bermudes </option>
				<option value="Bielorussie">Bielorussie </option>
				<option value="Bolivie">Bolivie </option>
				<option value="Botswana">Botswana </option>
				<option value="Bhoutan">Bhoutan </option>
				<option value="Boznie_Herzegovine">Boznie_Herzegovine </option>
				<option value="Bresil">Bresil </option>
				<option value="Brunei">Brunei </option>
				<option value="Bulgarie">Bulgarie </option>
				<option value="Burkina_Faso">Burkina_Faso </option>
				<option value="Burundi">Burundi </option>

				<option value="Caiman">Caiman </option>
				<option value="Cambodge">Cambodge </option>
				<option value="Cameroun">Cameroun </option>
				<option value="Canada">Canada </option>
				<option value="Canaries">Canaries </option>
				<option value="Cap_vert">Cap_Vert </option>
				<option value="Chili">Chili </option>
				<option value="Chine">Chine </option> 
				<option value="Chypre">Chypre </option> 
				<option value="Colombie">Colombie </option>
				<option value="Comores">Colombie </option>
				<option value="Congo">Congo </option>
				<option value="Congo_democratique">Congo_democratique </option>
				<option value="Cook">Cook </option>
				<option value="Coree_du_Nord">Coree_du_Nord </option>
				<option value="Coree_du_Sud">Coree_du_Sud </option>
				<option value="Costa_Rica">Costa_Rica </option>
				<option value="Cote_d_Ivoire">Côte_d_Ivoire </option>
				<option value="Croatie">Croatie </option>
				<option value="Cuba">Cuba </option>

				<option value="Danemark">Danemark </option>
				<option value="Djibouti">Djibouti </option>
				<option value="Dominique">Dominique </option>

				<option value="Egypte">Egypte </option> 
				<option value="Emirats_Arabes_Unis">Emirats_Arabes_Unis </option>
				<option value="Equateur">Equateur </option>
				<option value="Erythree">Erythree </option>
				<option value="Espagne">Espagne </option>
				<option value="Estonie">Estonie </option>
				<option value="Etats_Unis">Etats_Unis </option>
				<option value="Ethiopie">Ethiopie </option>

				<option value="Falkland">Falkland </option>
				<option value="Feroe">Feroe </option>
				<option value="Fidji">Fidji </option>
				<option value="Finlande">Finlande </option>
				<option value="France">France </option>

				<option value="Gabon">Gabon </option>
				<option value="Gambie">Gambie </option>
				<option value="Georgie">Georgie </option>
				<option value="Ghana">Ghana </option>
				<option value="Gibraltar">Gibraltar </option>
				<option value="Grece">Grece </option>
				<option value="Grenade">Grenade </option>
				<option value="Groenland">Groenland </option>
				<option value="Guadeloupe">Guadeloupe </option>
				<option value="Guam">Guam </option>
				<option value="Guatemala">Guatemala</option>
				<option value="Guernesey">Guernesey </option>
				<option value="Guinee">Guinee </option>
				<option value="Guinee_Bissau">Guinee_Bissau </option>
				<option value="Guinee equatoriale">Guinee_Equatoriale </option>
				<option value="Guyana">Guyana </option>
				<option value="Guyane_Francaise ">Guyane_Francaise </option>

				<option value="Haiti">Haiti </option>
				<option value="Hawaii">Hawaii </option> 
				<option value="Honduras">Honduras </option>
				<option value="Hong_Kong">Hong_Kong </option>
				<option value="Hongrie">Hongrie </option>

				<option value="Inde">Inde </option>
				<option value="Indonesie">Indonesie </option>
				<option value="Iran">Iran </option>
				<option value="Iraq">Iraq </option>
				<option value="Irlande">Irlande </option>
				<option value="Islande">Islande </option>
				<option value="Israel">Israel </option>
				<option value="Italie">italie </option>

				<option value="Jamaique">Jamaique </option>
				<option value="Jan Mayen">Jan Mayen </option>
				<option value="Japon">Japon </option>
				<option value="Jersey">Jersey </option>
				<option value="Jordanie">Jordanie </option>

				<option value="Kazakhstan">Kazakhstan </option>
				<option value="Kenya">Kenya </option>
				<option value="Kirghizstan">Kirghizistan </option>
				<option value="Kiribati">Kiribati </option>
				<option value="Koweit">Koweit </option>

				<option value="Laos">Laos </option>
				<option value="Lesotho">Lesotho </option>
				<option value="Lettonie">Lettonie </option>
				<option value="Liban">Liban </option>
				<option value="Liberia">Liberia </option>
				<option value="Liechtenstein">Liechtenstein </option>
				<option value="Lituanie">Lituanie </option> 
				<option value="Luxembourg">Luxembourg </option>
				<option value="Lybie">Lybie </option>

				<option value="Macao">Macao </option>
				<option value="Macedoine">Macedoine </option>
				<option value="Madagascar">Madagascar </option>
				<option value="Madère">Madère </option>
				<option value="Malaisie">Malaisie </option>
				<option value="Malawi">Malawi </option>
				<option value="Maldives">Maldives </option>
				<option value="Mali">Mali </option>
				<option value="Malte">Malte </option>
				<option value="Man">Man </option>
				<option value="Mariannes du Nord">Mariannes du Nord </option>
				<option value="Maroc">Maroc </option>
				<option value="Marshall">Marshall </option>
				<option value="Martinique">Martinique </option>
				<option value="Maurice">Maurice </option>
				<option value="Mauritanie">Mauritanie </option>
				<option value="Mayotte">Mayotte </option>
				<option value="Mexique">Mexique </option>
				<option value="Micronesie">Micronesie </option>
				<option value="Midway">Midway </option>
				<option value="Moldavie">Moldavie </option>
				<option value="Monaco">Monaco </option>
				<option value="Mongolie">Mongolie </option>
				<option value="Montserrat">Montserrat </option>
				<option value="Mozambique">Mozambique </option>

				<option value="Namibie">Namibie </option>
				<option value="Nauru">Nauru </option>
				<option value="Nepal">Nepal </option>
				<option value="Nicaragua">Nicaragua </option>
				<option value="Niger">Niger </option>
				<option value="Nigeria">Nigeria </option>
				<option value="Niue">Niue </option>
				<option value="Norfolk">Norfolk </option>
				<option value="Norvege">Norvege </option>
				<option value="Nouvelle_Caledonie">Nouvelle_Caledonie </option>
				<option value="Nouvelle_Zelande">Nouvelle_Zelande </option>

				<option value="Oman">Oman </option>
				<option value="Ouganda">Ouganda </option>
				<option value="Ouzbekistan">Ouzbekistan </option>

				<option value="Pakistan">Pakistan </option>
				<option value="Palau">Palau </option>
				<option value="Palestine">Palestine </option>
				<option value="Panama">Panama </option>
				<option value="Papouasie_Nouvelle_Guinee">Papouasie_Nouvelle_Guinee </option>
				<option value="Paraguay">Paraguay </option>
				<option value="Pays_Bas">Pays_Bas </option>
				<option value="Perou">Perou </option>
				<option value="Philippines">Philippines </option> 
				<option value="Pologne">Pologne </option>
				<option value="Polynesie">Polynesie </option>
				<option value="Porto_Rico">Porto_Rico </option>
				<option value="Portugal">Portugal </option>

				<option value="Qatar">Qatar </option>

				<option value="Republique_Dominicaine">Republique_Dominicaine </option>
				<option value="Republique_Tcheque">Republique_Tcheque </option>
				<option value="Reunion">Reunion </option>
				<option value="Roumanie">Roumanie </option>
				<option value="Royaume_Uni">Royaume_Uni </option>
				<option value="Russie">Russie </option>
				<option value="Rwanda">Rwanda </option>

				<option value="Sahara Occidental">Sahara Occidental </option>
				<option value="Sainte_Lucie">Sainte_Lucie </option>
				<option value="Saint_Marin">Saint_Marin </option>
				<option value="Salomon">Salomon </option>
				<option value="Salvador">Salvador </option>
				<option value="Samoa_Occidentales">Samoa_Occidentales</option>
				<option value="Samoa_Americaine">Samoa_Americaine </option>
				<option value="Sao_Tome_et_Principe">Sao_Tome_et_Principe </option> 
				<option value="Senegal">Senegal </option> 
				<option value="Seychelles">Seychelles </option>
				<option value="Sierra Leone">Sierra Leone </option>
				<option value="Singapour">Singapour </option>
				<option value="Slovaquie">Slovaquie </option>
				<option value="Slovenie">Slovenie</option>
				<option value="Somalie">Somalie </option>
				<option value="Soudan">Soudan </option> 
				<option value="Sri_Lanka">Sri_Lanka </option> 
				<option value="Suede">Suede </option>
				<option value="Suisse">Suisse </option>
				<option value="Surinam">Surinam </option>
				<option value="Swaziland">Swaziland </option>
				<option value="Syrie">Syrie </option>

				<option value="Tadjikistan">Tadjikistan </option>
				<option value="Taiwan">Taiwan </option>
				<option value="Tonga">Tonga </option>
				<option value="Tanzanie">Tanzanie </option>
				<option value="Tchad">Tchad </option>
				<option value="Thailande">Thailande </option>
				<option value="Tibet">Tibet </option>
				<option value="Timor_Oriental">Timor_Oriental </option>
				<option value="Togo">Togo </option> 
				<option value="Trinite_et_Tobago">Trinite_et_Tobago </option>
				<option value="Tristan da cunha">Tristan de cuncha </option>
				<option value="Tunisie">Tunisie </option>
				<option value="Turkmenistan">Turmenistan </option> 
				<option value="Turquie">Turquie </option>

				<option value="Ukraine">Ukraine </option>
				<option value="Uruguay">Uruguay </option>

				<option value="Vanuatu">Vanuatu </option>
				<option value="Vatican">Vatican </option>
				<option value="Venezuela">Venezuela </option>
				<option value="Vierges_Americaines">Vierges_Americaines </option>
				<option value="Vierges_Britanniques">Vierges_Britanniques </option>
				<option value="Vietnam">Vietnam </option>

				<option value="Wake">Wake </option>
				<option value="Wallis et Futuma">Wallis et Futuma </option>

				<option value="Yemen">Yemen </option>
				<option value="Yougoslavie">Yougoslavie </option>

				<option value="Zambie">Zambie </option>
				<option value="Zimbabwe">Zimbabwe </option>
		</select><br>
				 
		<select name="sexe" class="sexe inpts"><option>sex</option><option value="M">M</option><option value="F">F</option></select>
			
          <p for="user_terms_register_topbar">
				<input type="checkbox" required="true" name="terms" id="user_terms_register_topbar">
				I agree with<a href="#"target="_blank" id="user_terms_register_topbar_link">terms&amp;conditions</a></p>
			
     	<textarea name="commentaire" rows="3px" cols="40px" class="" placeholder="write your comments here" required></textarea><br>
		<input class="w3-button reg w3-teal w3-center inpts" id="wp-submit-register_topbar" type="submit" name="register" value="register">
			</div>
	</form>
	</div>
	
	<div id="return">
		<center><marquee direction="up" width="550" behavior="alternate">
			Click<a href="index.php" style="text-decoration:none; color:orange">HERE</a>&nbsp;if you already have an account</marquee></center>
	</div>
	<?php include('footer.php');?>
	