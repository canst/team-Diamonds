<!doctype html>
<html>
    <head>
        <title></title>
    <link rel="stylesheet" type="text/css" href="css/web.css">
    
    
    </head>
    <body>
	
		<?php include('header2.php');?>
	
         <section>
           <h1 style="text-align: center"> filling the form availiable below to tell us what you need</h1>        
        <div>
            <form method="post" action="anwerWeb.php">
                <br>
                
                <div class="gras"> Enter&nbsp;your&nbsp;&nbsp;full&nbsp;name<br></div>
                <input type="text" placeholder="Your name" size="73" name="email" required style="height: 30px;" autofocus><br><br><br>
            
               <div class="gras"> Enter&nbsp;your&nbsp;email&nbsp;adress<br>
                <input type="text" placeholder="Your email" size="73" name="email" required style="height: 30px;"><br><br><br>
        
                   <div class="gras">Add a phone number<br></div>
                <input type="number" placeholder=" Your phone number" size="73" name="email" required style="height: 30px;"> <br><br><br>
               <div  class="gras"> Type of web site you need(select one please)</div>
                <select name="selectio1">
                
                        <option>Html5&nbsp;and&nbsp;CSS3&nbsp;pages</option>
                        <option>Html5&nbsp;and&nbsp;CSS3&nbsp;and&nbsp;javascript&nbsp;pages</option>
                        <option>Html5&nbsp;and&nbsp;javascript&nbsp;pages</option>
                    <option>Html5&nbsp;and&nbsp;javascript&nbsp;and&nbsp;php&nbsp;pages</option>
                    <option>Html5&nbsp;and&nbsp;CSS3&nbsp;javascript&nbsp;and&nbsp;php&nbsp;pages</option>
                    <option>Html5&nbsp;and&nbsp;CSS3&nbsp;php&nbsp;pages</option>
                        
                    </select><br><br><br><br>
                    
               <div class="gras">Number of pages that you need please select one<br></div>
                <select name="selectio2">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    < option>4</option>
                    <option>5</option>
                     <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>more than this</option>
                </select><br><br><br>
              
               <div class="gras"> Web site for what? please select one option<br></div>
        
                <select><br><br><br>
                    <option>Medical Center</option>
                    <option>Station</option>
                    <option>sell articles</option>
                    <option>sell car</option>
                    <option>sell bicycle</option>
                    <option>sell motocycle</option>
                    <option>sell computer</option>
                    <option>for entreprise</option>
                    <option>for bank</option>
                    <option>others things</option>
                
                </select><br><br><br>
                Pricing:<br>
                 <select>
                     <option>100$ for one pages</option>
                    <option>200$ for two pages</option>
                    <option>300$ for tree pages</option>
                    <option>400$ for four pages</option>
                        <option>500$ for five pages</option>
                        <option>600$ for six pages</option>
                        <option>700$ for seven pages</option>
                        <option>800$ for eigth pages</option>
                        <option>900$ for nine pages</option>
                        <option>1000$ for ten pages</option>
                        <option>more than this prices</option>
                      
               </select><br><br><br>
                
                
                <label for="text">More details:</label><br>
                <textarea name="text" id="text">please tell us your need here if your need don't mentioned above </textarea><br><br>
                
               <input class="en" type="submit" value="send" style="height: 30px; border-radius: 10px; background-color:black; color: white; font-weight: bold;"> 
                </div> 
            </form>
             </div> 
        </section>
           
		   <?php include('footer.php')?>
		   
    </body>

</html>