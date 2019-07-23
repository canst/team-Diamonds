<?php
// DB connexion
$bdd = new PDO("mysql:host=localhost;dbname=bitdiamonds;charset=utf8","root","");
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

require_once 'scripts/session.php';

if(isset($_POST['submit'])){ 
	$lastname=$_POST['lastname'];
	$firstname=$_POST['firstname'];
	$sexe=$_POST['sexe'];
	$age=$_POST['birthdate'];
	$why=$_POST['ApplyingFor'];
	$email=$_POST['email'];
	$country=$_POST['country'];
	$phone=$_POST['phone'];
	$adress=$_POST['adress'];
	$level_of_study=$_POST['level_of_study'];
	$area_of_study=$_POST['area_of_study'];
	$degree=$_POST['degree'];
	$major_subject=$_POST['major_subject'];
	$certificate=$_FILES['certificate'];
	$ref=$_POST['reference'];
	$NIC=$_FILES['NIC'];
	$CV=$_FILES['CV'];
	$marital_situation=$_POST['marital_situation'];
	$comment=$_POST['comment'];
     
/*if(empty($lastname)||empty($firstname)||empty($civil)||empty($age)||empty($why)||(empty($email)||(empty($pays)||(empty($phone)||(empty($adress)||(empty($level)){ 
	$erreur="All the fields are required.";
    } else if($_POST['pays']=="Choix"){$erreur="please choose your country";
    }else if($_POST['civil']=="civil"){$erreur="please choose your sex.";
        
     } else{*/
        
        $req = $bdd->prepare("INSERT INTO Adviser SET  lastname=?,firstname=?,sexe=?,birthdate=?,ApplyingFor=?,email=?,country=?,phone=?,adress=?,level_of_study=?,area_of_study=?,degree=?,major_subject=?,certificate=?,reference=?,NIC=?,CV=?,marital_situation=?,comment=?");
	
      $req->execute([$lastname,$firstname,$sexe,$age,$why,$email,$pays,$phone,$adress,$level_of_study,$area_of_study,$degree,$major_subject,$certificate,$NIC,$CV,$marital_situation,$comment]);
        
            $_SESSION['Username']=$_POST['Username'];
            $_SESSION['email']=$_POST['email'];
            header("Location: report.php") ;            
    /*}*/
    }
    ?>

<?php include('header2.php');?>

<section style="background-image:url(img/advis2.jpg);background-repeat:no-repeat;background-size:contain;background-color:#d1fd9c;overflow:hidden;">
			<article class="w3-center articl">
			<form id="formulaires" enctype="multipart/form-data" action="report.php" method="post">
				<fieldset>
						<fieldset><legend>personal informations</legend>
							<img src="img/logo2.ico" alt="user_pic">
							
							<!--mettre une option permettant de charger une photo personnelle-->
						<ol>
							<li height="50">
								<input style="position:relative;" width="100" type="text" id="lastname" name="lastname"required="true" placeholder="family&nbsp;name/Lastname:">
								<input type="text" id="name" name="firstname"required="true" placeholder="Firstname:"><br>
								<select value="sex"><option name="sexe" required="true">Mr.</option>
									<option name="sexe" required="true">Mrs.</option>
									<option name="sexe" required="true">Miss.</option>
								</select>
										
							   </li>
								<li>
									<label>Birthdate</label>
									<input type="date" name="birthdate" value="age" required="true">
								</li>
								<li height="50">
								<label>Applying for:</label>
									<select name="ApplyingFor" required="true">
										<optgroup>
											<option>Job&amp;Career Advancement</option>
											<option>training&amp;choice</option>
											<option>Further suggestion</option>
										</optgroup>
									</select>
							   </li>
								<li>
									<label for="email">E-mail</label>
									<input type="email" id="email" name="email" placeholder="mon@gmail.com" required="true">
								</li>
								<li>
									<label for="ctr">Country</label>
									<select required="true" name="country" size="1%" class="">
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
									</select>
								</li>
								<li>
									<label for="tel">Phone</label>
									<input type="tel" id="tel" name="phone" required="true">
								</li>
								<li>
									<label for="name">Adress</label>
									<input type="text" id="adresse" name="adress" placeholder="01 bp 5743 Dakar">
								</li>
								<li>
									<label for="SL">level&nbsp;of&nbsp;study</label>
									<select name="level_of_study" required="true">
										<optgroup>
											<option>primary&nbsp;school</option>
											<option>Secondary&nbsp;school/high&nbsp;school</option>
											<option>University&nbsp;or&nbsp;college&nbsp;degree</option>
										</optgroup>
									</select>
								</li>
								<li>
									<label for="AS">Area&nbsp;of&nbsp;study</label>
									<select id="AS" name="area_of_Study" required="true">
										<option>Art&amp;literature</option>
										<option>Mathematics</option>
										<option>Physics</option>
										<option>Biology</option>
										<option>Electronics</option>
										<option>Applied Sciences</option>
									</select>
									<input type='hidden' name='max_file_size' value='6000000'/>
									<input style="position:relative; left:90px;top:-20px; float: right;" role="document" type="file" required="true" name="degree" value="degree" accept="application/pdf"accept="image/x-png"accept="x-jpg" accept="application/xlsx">
								</li>
								<li>
									<label for="Major">Major&nbsp;subject</label>
									<input type="text"  name="major_Subject">
								</li>
								
								<li>
									<label for="ville">Email of a referee</label>
									<input type="email" name="reference">
								</li>
						</ol>
					</fieldset>
					<fieldset><legend>complementary informations</legend>
							<ol>
								<lI>
									<label for="renseignement">certificate</label>
									<input type='hidden' name='max_file_size' value='6000000'/>
									<input type="file" role="document" name="certificate" value="certificate">
								</lI>
								<lI>
									<label for="renseignement">National ID Card/Passport</label>
									<input type='hidden' name='max_file_size' value='6000000'/>
									<input type="file" role="document" name="NIC" value="NIC" required="true">
								</lI>
								<lI>
									<label for="renseignement">Curriculum&nbsp;Vitae</label>
									<input type='hidden' name='max_file_size' value='6000000'/>
									<input role="document" type="file" name="CV" value="CV" required="true">
									
								</lI>
								<lI>
									<select name="marital_situation">
										<optgroup>
											<option selected>Married</option>
											<option>Single</option>
											<option>Single Mum</option>
											<option>Single Dad</option>
										</optgroup>
									</select>
									<input type="number" placeholder="number_of_kids" required="true">
								</lI>
								<lI>
									<label>something missing?:</label>
										<textarea placeholder="say more if you might" name="comment"></textarea>
									
								</lI>
							</ol>					
					</fieldset>
							 <span>  
								<input type="checkbox" required>I agree with the <a href="#" style="color: skyblue">Terms & Privacy</a>
							</span>
					<input type="Submit" value="Submit" name="submit" id="submit" data-submit="....sending" class="w3-round">
					<input type="Reset" value="Clear" id="clear" name="clear" class="w3-round">
							
					</fieldset>
			</form>
			</article>
		</section>
		
    
	<?php include('footer.php');?>
	