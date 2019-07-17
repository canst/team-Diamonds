
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" style="" href="css/contact.css">

<?php include('header2.php')?>
	
	<section>
	
           
           <div id="form">
	 
            <form method="post" action="alert.php">
                <br>
                Message adressed to: 
                    <select name="destinator">
                        <option>Choose</option>
                        <option>general Manager</option>
                        <option>Direction</option>
						<option>techical team</option>
                    </select><br><br><br>
                    
                Message subject*<br>
                <input type="text" size="73" name="subject" required style="height: 30px;" autofocus><br><br><br><br>
               
                <input type="text" placeholder="Your First name" size="73" name="lastname" required style="height: 30px;" autofocus><br><br><br><br>
                <input type="text" placeholder="Your Last name" size="73" name="firstname" required style="height: 30px;"><br><br><br><br>
                <input type="email" placeholder=" Your Email" size="73" name="email" required style="height: 30px;"><br><br><br><br>
                <input type="tel" placeholder="Your phone number" size="73" name="phone" required style="height: 30px;"><br><br><br><br>
				<input type="text" placeholder="Your country" size="73" name="country" required style="height: 30px;"><br><br><br><br>
           
    
                
                <label for="text">Your message:</label><br>
                <textarea name="message" id="message"></textarea><br><br>
                
               <input class="en" type="submit" name="submit" value="Submit" style="height: 30px; border-radius: 10px; background-color: blueviolet; color: white; font-weight: bold"> 
            </form>
	</div>
	
      </section> 
	  
	  <?php include('footer.php')?>
	
