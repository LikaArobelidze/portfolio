<!doctype html>
<html>
    <head>
        <title>Portfolio</title>

        <link rel="stylesheet" href="style.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">

<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>


        <meta charset="UTF-8">
        <meta name="description" content="Free Web tutorials">
        <meta name="keywords" content="HTML, CSS, JavaScript">
        <meta name="author" content="lika Aro">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php include "functions.php";
        ?>
        <header>
            <h1>My Portfolio</h1>
            <nav>
                <a href="#section1"><li>Home</li></a>
                <a href="#section2"><li>About</li></a>
                <a href="#section3"><li>latest works</li></a>
                <a href="#footer"><li>contact</li></a>
            </nav>
        </header>

        <section class="section1" id="section1">
        <div class="div1"> 
            <?php
          
            ?>
            </div>
            <div class="div1">
    <p>
        Hello,<br><br>
        <span>
            I am <span class="span1">Lika Arobelidze</span>
        </span><br><br>
        I am a student of Skillwill Academy<br>
        I am a Programmer
    </p>
    <br>
    <a href="https://files.fm/f/zaewjbaqb2" target="_blank" class="download-cv-btn">Download CV</a>
</div>

            <div class="div2">
                <img src="img/IMG_6561.jpg" alt="">
            </div>
        </section>


        <section class="section2" id="section2">
            <img src="img/IMG_6561.jpg" alt="img">
            <div class="div1">
                <?php
                section2("Programming from Zero, student of Skillwill Academy");
                ?>
                <!--  
            <h2> course titled "პროგრამირება 0-დან" (Programming from Zero)h2>
            <p>I am student of Skillwill acadeny</p>
             -->
            <div class="progress">
                <div class="div1">
            <img src="img/html 5.png" alt="">
            <img src="img/css logo.png" alt="">
            <img src="img/php.png" alt="">
            <img src="img/wordpress logo.png" alt="">
            </div>
              <div class="div2">
                <progress value="90" max="100"></progress>
                <progress value="90" max="100"></progress>
                <progress value="50" max="100"></progress>
                <progress value="70" max="100"></progress>

              </div>

            
            </div>
            </div>
        </section>


        <section class="section3" id="section3">
            <h2>Latest works</h2>
            <div class="div1">
                <img src="img/skillwill.png" alt="">
                <img src="img/skillwill.png" alt="">
                <img src="img/skillwill.png" alt="">
                </div>
                <div class="div2">
                <img src="img/skillwill.png" alt="">
                <img src="img/skillwill.png" alt="">
                <img src="img/skillwill.png" alt="">
            </div>
        </section>


        <footer id="footer">
            <div class="div1">
                <img src="img/phone logo.png" alt="">
                <a href="tel:+995597915081">+995 597915081</a>
                <img src="img/envelope logo.png" alt="">
                <a href="mailto:lika.arobelidze18@gmail.com">lika.arobelidze18@gmail.com</a>
                <p>Tbilisi, Georgia</p>
            </div>

            <div class="div2">
                <a href="#"><img src="img/twitter logo.png" alt=""></a>
                <a href="#"><img src="img/instagram logo.png" alt=""></a>
                <a href="#"><img src="img/ring logo.png" alt=""></a>
                <a href="#"><img src="img/fb logo.png" alt=""></a>
                <a href="#"><img src="img/youtube logo.png" alt=""></a>
            </div>
        </footer>





    </body>
</html>