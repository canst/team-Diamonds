<link rel="stylesheet" href="css/TanslationPortal.css">

<?php include('header2.php')?>

<form id="check">
	<center><h1>Caracteristics</h1></center>
		</form>
<section>
<div id="form">
	 
<form method="post" action="#">
  <br>
    <input type="email" placeholder=" Your Email" size="73" name="email" required style="height: 30px;"><br><br><br><br>
	<center><table>
	<tr>
	<th>
	<select id="tab1">	
	<option>Waist</option>
	<option>1.50</option>
	<option>1.85</option>
	<option>1.70</option>
	<option>1.63</option>
	<option>1.73</option>
	<option>1.67</option>
	<option>other</option>
	</select>
	</th>
	</tr>
	<tr>
	<th>
	<select id="table">	
	<option>Fistness</option>
	<option>thin</option>
	<option>gross</option>
	<option>other</option>
	</select>
	</th>
	</tr>
	<tr>
	<th>
	<select id="tab2">	
	<option>Dye</option>
	<option>clair</option>
	<option>noir</option>
	<option>chocolate</option>
	<option>polish</option>
	<option>other</option>
	</select>
	</th>
	</tr>
	</table></center><br><br>

    <select name="selectio1">
     <option>sexe</option>
	<option>M</option>
	<option>F</option>                    
	</select><br><br><br>
               		Select your language<br>
                <select name="selectio2">
					<option>select language</option>
                    <option>French</option>
                    <option>English</option>
					<option>Allemand</option>
                </select><br><br><br><br>
               <input class="en" type="submit" value="Submit" style="height: 30px; border-radius: 10px; background-color: blueviolet; color: white; font-weight: bold"> 
            </form>
		</div>
      </section>
	<?php include('footer.php')?>
