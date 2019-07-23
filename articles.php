

<?php include('header2.php')?>
    

<div class="formulaire_article">
    <h1 class="title_form"> <u> <strong>Article-Writting</strong></u></h1>
<form>
    <div class="first_select">
         <h3>Type of Article:</h3>
     <select>
            <option>Article & Translation</option>
            <option>Resumes & Cover letters</option>
            <option>Technical Writin</option>
            <option>Translation</option>
            <option>Creating Writing</option>
            <option>Research & Summuries</option>
            <option>Sales Copy</option>
            <option>Press Releases</option>
            <option>Transcription</option>
            <option>Legal Writing</option>
            <option>Buisness Names & Slogan</option>
            <option>Web Content</option>
            <option>Scriptwriting</option>
            <option> Book & eBook Writing</option>
            <option>Speechwriting</option>
            <option>Beta Reading</option>
            <option>Proofreading & Editing</option>
            <option>Other</option>
        </select>
    </div>
    <div class="first_select">
            
    <h3>Topic</h3>
    <select>
            <option>Versatile</option>
            <option>Internet & Technology</option>
            <option> Health & Medical</option>
            <option>Buisness, Finance & Law</option>
            <option> Beauty & Fashion</option>
            <option>Art & Culture</option>
            <option>Retail & Ecommerce</option>
            <option>Travel & Hospitality</option>
            <option>Entrainment & Gaming</option>
            <option>Food & Breverage</option>
            <option>Lifestyle</option>
            <option>Real Estate</option>
            <option>News & Politics</option>
            <option>Family & Eductio</option>
            <option>Sports & Recreation</option>
            <option> Auto & Transortation</option>
        </select>
    </div>
    <div class="first_select">
    </div>
         <hr>
    <div class="select_type_quality">
        <div class="type">
             Choose a category:<br><br>
    <select class="select">
        <option>Simple</option>
        <option>Stantard</option>
        <option>Premuim</option>
    </select><br><br>
        </div>
    </div>
   
    <div class="select_type_quality">
        <div class="quality">
            Article Type:<br><br>
    <select class="select">
        <option>Long-form Article</option>
        <option>Instructional/how-to</option>
        <option>Listicle</option>
        <option>First-person narrative</option>
        <option>News story</option>
    </select><br><br>
        </div>
    </div>
    <hr>
    <div class="time">
        <div class="left-time-part">
             <p>Delivered Time: </p>
    <select>
        <option> 24 Hours</option>
        <option>3 Days</option>
        <option>7 Days</option>
        <option>2 Weeks</option> 
        <option>3 Weeks</option> 
        <option>1 month</option> 
    </select>
        </div>
       
    </div>
    
    <div class="time">
        <p>Language</p>
    <select>
        <option>English</option>
        <option>French</option>
    </select>
    </div>
    <div class="time">
        <div class="budget">
            <p>Your Badget</p>
    <input type="text" data-display-currency="USD" placeholder="Enter your Budget" class="budget_space">
        </div>
    </div>
    
    <br><br>
    <hr>
    <p>Describe How you want the article looking to purchase-please be as detailed as possible:</p>
        <textarea class="text_part" placeholder="Description"></textarea><br><br>
    <div class="load-file">
        <input type="file" >
    </div>
    <hr>
        <input type="submit" value="Order Now" class="post"><br><br>
</form>
</div>
    <div class="display-demand">
        <h2><u><strong>REQUESTERS</strong></u></h2>
        
    </div>
    <br>
    <figure>
            <img src="img/artcl1.jpg" alt="article" id="img"> 
            </figure>
    
    <figure>
            <img src="img/artcl1.jpg" alt="article" id="images"> 
            </figure>
    
              <script>
    var img =["img/t.jpg", "img/artcl1.jpg","img/artcl2.jpg", "img/artcl3.jpg",  "img/artcl4.jpg"];
    var i=0;
    var slider=document.getElementById('img');
;
        setInterval(function(){
            slider.src=img[i];
            i++;
        if(i==img.length){i=0;}
        }, 2000);
    </script>
    
    
    
     <script>
    var images =["img/t.jpg","img/IMG_8.jpg"];
    var i=0;
    var slider=document.getElementById('images');
;
        setInterval(function(){
            slider.src=img[i];
            i++;
        if(i==img.length){i=0;}
        }, 2000);
    </script>
    <?php include"footer.php" ?>




















