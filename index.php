<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo"<html>
        <div class='temp'>
            <link rel='stylesheet' type='text/css' href='index.css' />
            <a href=''><input class='connection' type='button' value='Εγγραφή/Σύνδεση'></a>
        </div><br/>
        <div class='intro'>
            <h1> Καλώς ήρθατε στο KopseKati.gr</h1>
            <p> Εδώ θα βρείτε διάφορες προσφορές στον τομέα που σας ενδιαφέρει.<br/>
            Κάνε εγγραφή και μην χάσεις καμία προσφορά.</p>
            <ul id='slides'>
                <li class='slide showing'><img src='sample.jpg' style='width:100%'></li>
                <li class='slide'><img src='sample2.jpg' style='width:100%'></li>
                <li class='slide'><img src='sample3.jpg' style='width:100%'></li>
            </ul>
        </div>
       <script>
            var slides = document.querySelectorAll('#slides .slide');
            var currentSlide = 0;
            var slideInterval = setInterval(nextSlide,2000);

            function nextSlide() {
                slides[currentSlide].className = 'slide';
                currentSlide = (currentSlide+1)%slides.length;
                slides[currentSlide].className = 'slide showing';
            }
        </script>
         ";  
        ?>
    </body>
</html>
