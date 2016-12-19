<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name=viewport content='width=600'>
        <title>HarCom</title>
        <link href="layout.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
    <div class="wrapper">   
        <div class="nav">
            <ul>
            <li class="fpslist"><a  href="#">FPS spel</a></li>
            <li class="rtslist"><a  href="#">RTS spel</a></li>
            <li class="homebtn"><a class="btn blue" href="#"><img src="https://lh3.ggpht.com/A0x3jzuH1qRkE10HcTiT4qQr_6iAqVg-CTsoIqxnoIFyv92V91WI3KqiVlOvLtfoMRg=w300"></a></li>    
            <li class="storlist"><a href="#">Story spel</a></li>
            <li class="andralist"><a href="#">Andra spel</a></li>
            </ul>
        </div>
        <div class="header">
            
            <h1 class="Changertext">Virtual Games</h1>
            <p class="Changertext">Här kan du hitta och diskutera en massa spel</p>
        </div>  
        <div class="leftcontent">
        <div class="">
<div class="slideshow-container">

<div class="mySlides fade">
   <img class="img"src="http://i0.kym-cdn.com/photos/images/original/001/046/405/82f.jpg">
  <div class="text">Spela spel</div>
</div>

<div class="mySlides fade">
  <img class="img"  src="http://us.blizzard.com/static/_images/games/sc2/wallpapers/wall2/wall2-1024x768.jpg">
  <div class="text">Diskutera spel</div>
</div>

<div class="mySlides fade">
  <img class="img"  src="https://content.pulse.ea.com/content/starwars-ea-com/en_US/starwars/battlefront/news-articles/get-a-first-glimpse-of-the-battle-of-jakku-in-star-wars-battlefr/_jcr_content/featuredImage.img.jpg">
  <div class="text">Hitta nya spel</div>
</div>

<a class="prev" onclick="plusSlides(-1)"> < </a>
<a class="next" onclick="plusSlides(1)">></a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
    </div>
            
        <div class="contentText">
        <p>
        En massa text om ingenting nyttigt som bara är där för att fylla ut sidan på ett väldigt oeffektivt och möjligen onödigt sätt... Men ja det är ju kul! Om man vill lägga till en massa andra saker att skriva och tala om. Som t.ex. att Oskar kallade sin MAC för bög och Rayan trodde att Oskar menade honom. Det gjorde Rayan ledsen och Ricardo sitter framför ett bord, skrattandes, medan han lyssnar på när Adam gör sitt omprov muntligt.
        </p>
        </div>
        </div>
        <div class="rightcontent">
        <div class="nyheter">
            
        <h1>Nyheter</h1>
            <ul>
                <li><a href="#">Battlefield 1</a></li>
                <li><a href="#">Titanfall 2</a></li>
                <li><a href="#">Civilization VI</a></li>
                <li><a href="#">Overwatch</a></li>
                <li><a href="#">Doom</a></li>
                <li><a href="#">Firewatch</a></li>
                <li><a href="#">Lego Star Wars:<br> The Force Awakens</a></li>    
            </ul>
        </div>
        <div class="popcat">
        <h1>Populärt just<br> nu</h1>
            <ul> 
                <li><a href="#">World of warcraft</a></li>
                <li><a href="#">Sims 4</a></li>
                <li><a href="#">Age of mythology</a></li>
                <li><a href="#">Star craft 2</a></li>
                <li><a href="#">Need for Speed: Most Wanted</a></li>
                <li><a href="#">Star Wars <br>Republic Commando</a></li>       
            </ul>
        </div>
        </div>    
        <div class="CommentText">
        
            <h1>Vad tycker du om hemsidan?</h1>
            <p>Skriv vad du tycker här!</p>
            
        <form action="" method="POST">
            <label> <h1>Namn:</h1> 
        <input type="text" name="Name" class="Input" style="width: 225px" required>
       </label>
       <br><br>
            <label><h1>Kommentar:</h1>
        <textarea name="Comment" class="Input" style="width: 300px" required></textarea>
       </label>
       <br><br>
       <input type="submit" name="Submit" value="Skicka kommentar" class="Submit">

        </form>
        </div>
        </div>      
    </body>
        <?php
 
 if(isset($_POST['Submit'])){
  print "<h1>Your comment has been submitted!</h1>";

  $Name = $_POST['Name'];
  $Comment = $_POST['Comment'];

  #Get old comments
  $old = fopen("comments.txt", "r+t");
  $old_comments = fread($old, 200);

  #Delete everything, write down new and old comments
  $write = fopen("comments.txt", "w+");
  $string = "<h2>".$Name."</h2><br><p>".$Comment."</p><br>\n".$old_comments;
  fwrite($write, $string);
  fclose($write);
  fclose($old);
 }

 #Read comments
 $read = fopen("comments.txt", "r+t");
 echo "<div class='commentstexters'><br><h1>Comments</h1><br><br>".fread($read, 1024)."</div>";
 fclose($read);
?>
    <script>
    
       var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
    </script>
</html>