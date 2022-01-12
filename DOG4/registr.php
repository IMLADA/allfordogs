<?php
    session_start();
?>
    <html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="emb.ico" type="image/x-icon">
    <link rel="stylesheet" href="styleReg.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="js.css">
    <link rel="stylesheet" href="mobile.css">
    <link rel="stylesheet" href="fonts.css">
    <title>Sign in Dog</title>
    </head>
    <body>

    <div class="header">  
        <div class="headertop">
        <div class="hedtopleft"> 
            <img src="logo.jpg" width="60px" height="50px"> <div style="font-family:Roboto-Regular; font-width:300px"><b>
            <a href='index.php' style="text-decoration: none" class="dog">DOG</a></b></div>
        </div>
        <div class="hedtopcenter">

            <form action="product.php" method="get" target="_blank"> 
                <button class="b1 col" type="submit" style="">Products</button></form>

                <a href="#DogCare"> <button class="b2 col" type="submit" style="">Dog Care</button></a>

                <a href="#About"><button class="b3 col" type="submit" style="">About</button></a>

                <a href="#PopProd"><button class="b4 col" type="submit" style="">Popular</button></a>

                <a href="korzina.php"><button class="b4 col" type="submit" style=""><img src='korzina.svg'></button></a>

        </div>
        <div class="hedtopright">
        <form action="registr.php" method="get" target="_blank"> 
            <button class="b1 col" type="submit" style="">Sign in</button></form>
        </div>
    </div>

    <div class='Hello'><div class='h2'> <h2>Hello! To place an order, log in!</h2></div></div>
    <form action="testreg.php" method="post">

    <!--****  testreg.php - это адрес обработчика. То есть, после нажатия на кнопку  "Войти",
    данные из полей отправятся на страничку testreg.php методом  "post" ***** -->
    <p>
        <div class='text'><label>Login:<br></label></div>
        <div class='inp'><input name="login" type="text" size="22" maxlength="100" class="regtex2"></div>
    </p>
        <!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->
    <p>
        <div class='text'><label>Password:<br></label></div>
        <div class='inp'><input name="password" type="password" size="22" maxlength="100" class="regtex2"></div>
    </p>
        <!--**** В поле для паролей (name="password" type="password") пользователь вводит свой пароль ***** --> 
     <p>
        <div class="center"><input type="submit" name="submit" value="Enter" class="enter enterCol"></div>
        <!--**** Кнопочка (type="submit") отправляет данные на страничку testreg.php ***** --> 
        <br>
        <!--**** ссылка на регистрацию, ведь как-то же должны гости туда попадать ***** --> 
        <div class="cntReg"><a class="register sslkacol" href="reg.php">Register</a></div>
    </p></form>

        <br>

        <?php
            // Проверяем, пусты ли переменные логина и id пользователя
            if (empty($_SESSION['login']) or empty($_SESSION['id']))
            {
            // Если пусты, то мы не выводим ссылку
            echo "You have logged in to the site as a guest<br>
            <a class='sslka sslkacol' href='#'>This link is only available to registered users</a>";
            }
            else
            {

            // Если не пусты, то мы выводим ссылку
            echo "You logged in to the site as ".$_SESSION['login'].
            "<br> <a class='sslka sslkacol' href='http://tvpavlovsk.sk6.ru/'>This link is only available to registered users</a>";
            }
        ?>
    </body>
    </html>