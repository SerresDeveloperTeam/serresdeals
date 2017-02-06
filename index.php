<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>KopseKati - Αρχική</title>
        <link rel='stylesheet' type='text/css' href='stylesheets/index.css' />
    </head>
    <body>
        <div class='intro'>
            <a href='signup.php'><input class='connection' type='button' value='Εγγραφή/Σύνδεση'></a>
        </div><br/>
        <div class='intro'>
            <div style='margin-left:20%'><a href='index.php'><img src='images/kopse10_min.png'></img></a></div>
            <h1> Καλώς ήρθατε στο KopseKati.gr</h1>
            <p> Εδώ θα βρείτε διάφορες προσφορές στον τομέα που σας ενδιαφέρει.<br/>
            Κάνε εγγραφή και μην χάσεις καμία προσφορά.</p>
            <ul id='slides'>
                <li class='slide showing'><img src='images/sample.jpg' style='width:100%'></li>
                <li class='slide'><img src='images/sample2.jpg' style='width:100%'></li>
                <li class='slide'><img src='images/sample3.jpg' style='width:100%'></li>
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
    </body>
</html>
