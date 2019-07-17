<link rel="stylesheet" href="css/style.css">
    <?php include('header2.php');?>
<div class="formulaire_article">
    <h1 class="title_form">Article-Writting</h1>
<form>
   <p>Describe How you want the article looking to purchase-please be as detailed as possible:</p>
        <textarea class="text_part" placeholder="Description"></textarea><br><br>
    <div class="load-file">
        <input type="file" >
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
    <p>Once you place order, when you like your service delivered?</p>
    24 Hours <input type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;
    3 Days <input type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    7 Days <input type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Anytime <input type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <br><br>
    <hr>
    <p>What is your budget for this services?</p>
    <input type="text" data-display-currency="USD" placeholder="Enter your Budget">
    <br> <br>
    <div class="post">
        <input type="submit" value="Post">
    </div>
</form>
</div>

<div class="left-block">
    <section class="section_article">
       <h3>Type of Article are you looking for:</h3>
    <p>
       <input type="radio"> Article & Translation<br>
       <input type="radio"> Resumes & Cover letters<br>
       <input type="radio"> Technical Writin<br>
       <input type="radio"> Translation<br>
       <input type="radio"> Creating Writing<br>
       <input type="radio"> Research & Summuries<br>
       <input type="radio"> Sales Copy<br>
       <input type="radio"> Press Releases<br>
       <input type="radio"> Transcription<br>
       <input type="radio"> Legal Writing<br>
       <input type="radio"> Email Copy<br>
       <input type="radio"> Buisness Names & Slogan<br>
       <input type="radio"> Web Content<br>
       <input type="radio"> Scriptwriting<br>
       <input type="radio"> Book & eBook Writing<br>
       <input type="radio"> Speechwriting<br>
       <input type="radio"> Beta Reading<br>
       <input type="radio"> Proofreading & Editing<br>
       <input type="radio"> Other<br>
    </p>
</section>
    <hr class="line_left_block">
<section class="article-lan">
    <h3>Language</h3>
    English<br>
    <input type="checkbox"><br><br>
    French<br>
    <input type="checkbox"><br><br>
</section>
<hr class="line_left_block">
    
    <section class="right-block-article">
        <h3>Topic</h3>
        <input type="radio"> Versatile<br>
        <input type="radio"> Internet & Technology<br>
        <input type="radio"> Health & Medical<br>
        <input type="radio"> Buisness, Finance & Law<br>
        <input type="radio"> Beauty & Fashion<br>
        <input type="radio"> Art & Culture<br>
        <input type="radio"> Retail & Ecommerce<br>
        <input type="radio"> Travel & Hospitality<br>
        <input type="radio"> Entrainment & Gaming<br>
        <input type="radio"> Food & Breverage<br>
        <input type="radio"> Lifestyle<br>
        <input type="radio"> Real Estate<br>
        <input type="radio"> News & Politics<br>
        <input type="radio"> Family & Eduction<br>
        <input type="radio"> Sports & Recreation<br>
        <input type="radio"> Auto & Transortation<br>
    </section>
</div>
<?php include('footer.php');?>
