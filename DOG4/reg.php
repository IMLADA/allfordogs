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
    <link rel="stylesheet" href="registraw.css">
    <title>Sign in Dog</title>
    </head>
    <body>

    <div class="resqrt"><h2>Registration</h2></div>
    <form action="save_user.php" method="post">
    <!--**** save_user.php - это адрес обработчика.  То есть, после нажатия на кнопку "Зарегистрироваться", данные из полей  отправятся на страничку save_user.php методом "post" ***** -->
    <p>
    <div class='text'><label>Your login:<br></label><div>
    <div class='inp'><input name="login" type="text" size="15" maxlength="100" class="regtex2"><div>
    </p>
    <div>
<!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->
    <p>
    <div class='text'><label>Your password:<br></label><div>
    <div class='inp'><input name="password" type="password" size="15" maxlength="100" class="regtex2"><div>
    </p>
<!--**** В поле для паролей (name="password" type="password") пользователь вводит свой пароль ***** --> 
<p>
    <div class="center"><input type="submit" name="submit" value="Register" class="enter enterCol"><div>
<!--**** Кнопочка (type="submit") отправляет данные на страничку save_user.php ***** --> 
</p></form>
    </body>
    </html>