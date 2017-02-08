<?php
$host="localhost";
$user="root";
$pass="";
$database="KopseKati";
mysql_connect($host,$user,$pass);
mysql_select_db($database) or die("Unable to select database");
mysql_query("SET NAMES 'utf8'"); 
$c=0;
$query="select * from prosfores";
require_once 'helpers/header.php';
?>

<div class='intro'>
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
</script><br/><br/><br/>

<?php
$users_all=mysql_query($query);
while($users_row=mysql_fetch_array($users_all)) {
    if($c == 3){
     echo "<tr>";
       $c=0;
    }
    echo"
         <div class='intro'>
         <table>
         <tr>
         <th><img class='eikona' src=".$users_row["eikona"]."></th>
         <th><h3 class='onoma'>".$users_row["onoma"]."</h3>
         <i><p class='plhr'>".$users_row["plhrofories"]."</p></i>
         <del class='firstprice'>Από ".$users_row["timh"]."€</del>
         <strong class='finalprice'>Τελική τιμή ".$users_row["telikhtimh"]."€</strong><br/></th></tr></table></div>";
          $c++;
}
?>

</body>
</html>