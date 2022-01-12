<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="emb.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="js.css">
    <link rel="stylesheet" href="mobile.css">
    <link rel="stylesheet" href="fonts.css">
    <title>Dog</title>
</head>
<body>
<?php
    session_start();
?>
    
<div class="header">

    <div class="headertop">

        <div class="hedtopleft"> 

            <img src="logo.jpg" width="60px" height="50px"> <div style="font-family:Roboto-Regular; font-width:300px"><b>DOG</b></div>
       
        </div>
        <div class="hedtopcenter">

            <form action="product.php" method="get" target="_blank"> 
               <button class="b1 col" type="submit" style="">Products</button></form>

            <a href="#DogCare"> <button class="b2 col" type="submit" style="">Dog Care</button></a>

            <a href="#About"><button class="b3 col" type="submit" style="">About</button></a>

            <a href="#PopProd"><button class="b4 col" type="submit" style="">Popular</button></a>

            <a href="korzina.php"><button class="b4 col" type="submit" style=""><img src='korzina.svg'></button></a>

        </div>
        
        <div class="hedtopright text13131">
            <?php
                if($_GET['signOut']==true){
                    unset($_SESSION['login']);
                    unset($_SESSION['id']);
                }
                if (empty($_SESSION['login']) or empty($_SESSION['id'])){
                echo '<form action="registr.php" method="get">
                        <button class="b1 col" type="submit" style="">Sign in</button>
                     </form>';
                }else{
                echo "You logged in to the site as ".$_SESSION['login'].'
                <form method="get">
                    <input name="signOut" style="display:none" value="true">
                    <button class="b1 col" type="submit" style="">Sign out</button>
                </form>';
                }
            ?>
        </div>
    </div>
    
    <div class="headerbot">

        <div class="hedbotleft">

            <div class="hblt"><p><b>Dog is my Copilot.</b></p></div>
            <div class="hblb">
                <a href="https://www.google.ru/?hl=ru/" target="_blank">
                <button class="b5 colb5" type="button">Buy now</button></a>
                <a href="https://www.google.ru/?hl=ru/" target="_blank">
                <button class="b6 colb6" type="button">See Details</button></a>
            </div>

        </div>
        <div class="hedbotright"><img src="1.png"></div>
           
    </div>

</div>

<div class="corm">

    <div class="cormleft">
        <div class="corm1svg"><img src='corm1.svg'></div>
        <div class="cormlefttex"><p>Best Quality Products Pen Foods</p></div>
       
        <div class="cormlefttex1"><p style="font-family:Roboto-Thin; font-width:300px">Dogs leave paw prints forever on our hearts. A dog shade the.</p></div>
        
        <div>
            <a href="https://www.google.ru/?hl=ru/" target="_blank">
            <button class="cormleftss colss" type="button">See Details</button></a></div>
    </div>


    <div class="cormcenter">
        <div class="corm1svg"><img src='corm2.svg'></div>
        <div class="cormlefttex"><p>Best Quality Products Pen Foods</p></div>
       
        <div class="cormlefttex1"><p style="font-family:Roboto-Thin; font-width:300px">Dogs leave paw prints forever on our hearts. A dog shade the.</p></div>
        
        <div>
            <a href="https://www.google.ru/?hl=ru/" target="_blank">
            <button class="cormleftss colss" type="button">See Details</button></a></div>
    </div>


    <div class="cormright">
        <div class="corm1svg"><img src='corm3.svg'></div>
        <div class="cormlefttex"><p>Best Quality Products Pen Foods</p></div>
       
        <div class="cormlefttex1"><p style="font-family:Roboto-Thin; font-width:300px">Dogs leave paw prints forever on our hearts. A dog shade the.</p></div>
        
        <div>
            <a href="https://www.google.ru/?hl=ru/" target="_blank">
            <button class="cormleftss colss" type="button">See Details</button></a></div>    
    </div>

</div>


<div class="acses">
    <div class="acsestop">
        <div class="acsestoph"><a id="PopProd"></a><h1>Popular Products</h1></div>
        <div class="acsestopp"><p>A dog in heat needs more than shade The more people I meet the more I like my dog.Dogs leave paw prints forever on our hearts. </p></div>
    </div>

    <div class="acsescenter">
    
        <div class="acscenkar">
            <div class="acscenkar1"></div>
            <div class="acscenkar2"></div>
        </div>

        <div class="acscenkartex">
            <div class="acscenkartex1"><b>Mauris blandit aliquet</b></div>
            <div class="acscenkartex2"><b>Mauris blandit aliquet</b></div>
        </div>

        <div class="acscenkarbut">
            <div><a href="https://www.google.ru/?hl=ru/" target="_blank">
                <button class="acscenkarbut1 colss" type="button">View Details</button></a></div>
            <div><a href="https://www.google.ru/?hl=ru/" target="_blank">
                <button class="acscenkarbut2 colss" type="button">View Details</button></a></div>
        </div>
    </div>

    <div class="acsesbot">
        <div class="acsesbotkar">
            <div class="acsesbotkar1"></div>
            <div class="acsesbotkar2"></div>
            <div class="acsesbotkar3"></div>
        </div>

        <div class="acsesbottex">
            <div class="acsesbottex1"><b>Mauris blandit aliquet</b></div>
            <div class="acsesbottex2"><b>Mauris blandit aliquet</b></div>
            <div class="acsesbottex3"><b>Mauris blandit aliquet</b></div>
        </div>

     
        <div class="acsesbotbut">
            <div><a href="https://www.google.ru/?hl=ru/" target="_blank">
                <button class="acsesbotbut1 colss" type="button">View Details</button></a></div>
            <div><a href="https://www.google.ru/?hl=ru/" target="_blank">
                <button class="acsesbotbut2 colss" type="button">View Details</button></a></div>
            <div><a href="https://www.google.ru/?hl=ru/" target="_blank">
                <button class="acsesbotbut3 colss" type="button">View Details</button></a></div>
        </div>
        
    </div>

    <div class="acsesbut">
        <div>
        <a href="https://www.google.ru/?hl=ru/" target="_blank">
        <button class="acsesbut1 colsbut" type="button">View All Products</button></a>
    </div></div>

</div>

<div class="medicines">

    <div class="medic">
        <div class="medicleft"></div>
        <div class="medicright">
            <a id="DogCare"></a><p class="medrtex">Dog Care</p>
            <p class="medrtex1">Start your adoption journey with us</p>
            <p class="medrtex2">A dog in heat needs more than shade The more people I meet the more I like my dog.The more people I meet the more I like my Dogs leave paw prints forever on our hearts.</p>
        <div class="medrbut">
            <div class="hblb">
                <a href="https://www.google.ru/?hl=ru/" target="_blank">
                <button class="medb colb5" type="button">Appointment Now</button></a>
                <a href="https://www.google.ru/?hl=ru/" target="_blank">
                <button class="b6 colb6" type="button">See Details</button></a>
            </div>
        </div>
        </div>
    </div>

</div>

<div class="walk">

    <div class="walktop"><b>How the Monthly Subscription Work?</b></div>

    <div class="walkcenter">
        <div class="walkcenterleft">
            <div class="walkcenterkar"><img src="walk1.JPG" height="540" width="600"></div>
            <div class="walkcentertex">Dogs leave paw prints forever on our hearts</div>
            <div class="walkcentertex1">Dogs never bite me. Just humans.Happiness is a warm puppy. My little dog a heartbeat at my feet.Necessity has the face of a dog.</div>
            <div class="walkcenterbut">
                <a href="https://www.google.ru/?hl=ru/" target="_blank">
                <button class="wcb colss" type="button">View Details</button></a></div>
        </div>
        
        <div class="walkcenterc">
            <div class="walkcenterkar"><img src="walk2.JPG" height="540" width="600"></div>
            <div class="walkcentertex">Dogs leave paw prints forever on our hearts</div>
            <div class="walkcentertex1">Dogs never bite me. Just humans.Happiness is a warm puppy. My little dog a heartbeat at my feet.Necessity has the face of a dog.</div>
            <div class="walkcenterbut"> 
                <a href="https://www.google.ru/?hl=ru/" target="_blank">
                <button class="wcb colss" type="button">View Details</button></a></div></div>


        <div class="walkcenterright">
            <div class="walkcenterkar"><img src="walk3.JPG" height="540" width="600"></div>
            <div class="walkcentertex">Dogs leave paw prints forever on our hearts</div>
            <div class="walkcentertex1">Dogs never bite me. Just humans.Happiness is a warm puppy. My little dog a heartbeat at my feet.Necessity has the face of a dog.</div>
            <div class="walkcenterbut">
                <a href="https://www.google.ru/?hl=ru/" target="_blank">
                <button class="wcb colss" type="button">View Details</button></a></div>
         </div>
    </div>


    <div class="walkbot">
        <a href="https://www.google.ru/?hl=ru/" target="_blank">
        <button class="walkb colb5" type="button">Subscribe</button></a></div>
</div>
</div>

<div class="gallery">

    <div class="galleryleft">
        <div class="gallerylefttex">Popular Products Gallery</div>
        <div class="gallerylefttex1">A dog in heat needs more than shade The more people I meet the more I like my dog.Dogs leave paw prints forever on our hearts. A dog in heat needs more than shade The more people I meet the more I like my dog.Dogs leave paw prints forever on our hearts.</div>
    </div>

    <div class="galleryright">

        <script>                                     //СКРИПТ
            function go(){
            window.timerId = window.setInterval(timer, 2000);
            }
            function timer(){
            if(window.number == undefined || window.number == 4)
            {
            window.number = 1;
            } else window.number = window.number + 1;
            var img = document.getElementById('img');
            img.src = window.number+'.jpg'
            }
        </script>
        </head>
        
        <body onload="go()">
            <div id="wrapper">
                <img src="1.jpg" id="img" width="900" height="600">
            </div>
        </body>
        </script>

    </div>
</div>
<br>
<br>
<div class="textkak">Products Testimonial</div>
<br>
<br>

<div class="textkaksvg">
    <div class="testimonial">
        <img src='testimonial.svg'>
    </div>
</div>

<div class="ops">
    <div class="blue">
        <div class="blueleft">
            <div class="bluelefttop">Dogs leave paw prints forever.</div>
            <div class="blueleftbot">A dog in heat needs more than shade The more people I meet the more I like my dog.</div>
        </div>

        <div class="blueright">
            <script>
                function buttonClick() {
                var input = document.getElementById('input');
                input.value = 'Ой! Я поменял свой текст!';
            }
            </script>
            
            <input class="bluein" type="text" id="input" value="Enter your message">
            <button class="bluebut" onclick="buttonClick()">Send</button>
        </div>
    </div>
</div>

<div class="footer">

    <a id="About"></a>
    
    <div class="footerleft">

        <a class="fotb fotcol"  href="https://www.google.ru/?hl=ru/" target="_blank">Product & Policy</a> <br><br>
        <a class="fotb fotcol"  href="https://www.google.ru/?hl=ru/" target="_blank">Privacy & About</a> <br><br>
        <p class="fotb2">Contact: <a class="fotb1 fotcol"  href="https://www.google.ru/?hl=ru/" target="_blank">doglove@gmail.com</a></p> 

    </div>

    <div class="footercenter">

        <div class="footercenterlogo"><a  class="footercenterlogo" href = #top><b>DOG-PRODUCT</b></a></div>

        <div class="footercenterprilo">
            <div class="ssilki"><a href="https://ru-ru.facebook.com" target="_blank"><img src="face.svg"></a></div>
            <div class="ssilki"><a href="https://yandex.ru/search/?text=dog&lr=76&clid=1882610" target="_blank"><img src="enter.svg"></a></div>
            <div class="ssilki"><a href="https://twitter.com" target="_blank"><img src="twit.svg"></a></div>
        </div>

    </div>

    <div class="footerright">

        <a class="fotrb fotcol"  href="#DogCare">Dog Care</a> <br><br>
        <a class="fotrb fotcol"  href="https://www.google.ru/?hl=ru/" target="_blank">Privacy & Policy</a> <br><br>
        <a class="fotrb fotcol"  href="#PopProd">Popular Product</a>
    </div>

</div>

</body>
</html>