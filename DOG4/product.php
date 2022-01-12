<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="emb.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styleReg.css">
    <link rel="stylesheet" href="styleProd.css">
    <link rel="stylesheet" href="js.css">
    <link rel="stylesheet" href="mobile.css">
    <link rel="stylesheet" href="fonts.css">
    <title>Products</title>
</head>
<body>

<?php
    session_start();
?>
    
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
                    echo "Вы вошли на сайт, как ".$_SESSION['login'].'
                    <form method="get">
                        <input name="signOut" style="display:none" value="true">
                        <button class="b1 col" type="submit" style="">Sign out</button>
                    </form>';
                    }
                ?>
            </div>
    </div>
    <script>
        function getCookie(name) {
        let matches = document.cookie.match(new RegExp(
            "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
        ));
        return matches ? decodeURIComponent(matches[1]) : undefined;}
        function setCookie(name, value, options = {}) {
        options = {
        path: '/',
        // при необходимости добавьте другие значения по умолчанию
        ...options
        };
        if (options.expires instanceof Date) {
        options.expires = options.expires.toUTCString();
        }
        let updatedCookie = encodeURIComponent(name) + "=" + encodeURIComponent(value);
        for (let optionKey in options) {
        updatedCookie += "; " + optionKey;
        let optionValue = options[optionKey];
        if (optionValue !== true) {
            updatedCookie += "=" + optionValue;
        }
        }
        document.cookie = updatedCookie;
        }//


        var data = [];
        function buy(x){
            if(getCookie('PHPSESSID')){
                if (!contains(data,x)){
                    data.push(x);
                    setCookie('buy', data.join(','));
                    alert('The product has been added to the cart');
                }else{
                    alert('The product has been added to the cart');
                }
            }else{
                alert('Log in to the website or register to order')
            }
        }
        function contains(arr, elem) {
            for (var i = 0; i < arr.length; i++) {
                if (arr[i] === elem) {
                    return true;
                }
            }
            return false;
        }       
    </script>
<?php 
include ("bd.php");
$x=0;


echo showProd($x, $db);
$x+=5;

function showProd($x, $db){
    

	//Делаем запрос к БД, результат запроса пишем в $result:
        $query = "SELECT * FROM product WHERE id > $x and id < $x+5";
		$result = mysqli_query($db, $query) or die(mysqli_error($db));

	//Проверяем что же нам отдала база данных, если null – то какие-то проблемы:
		//var_dump($result);
    
    $ech='';
    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row){
        $ech .= ('
        <div class="products">
            <div class="cartinka" style="background-image: url(karProd/'.$row['img'].');background-size: contain;"></div>
            <div class="opisanie">'.$row['description'].'</div>
            <div class="zena">
                <a><button class="bzena colzena" type="button" onclick="buy('.$row['id'].')">'.$row['zena'].'</button></a>
            </div>
        </div>');
    }
    
    return $ech;
}
?>
</body>
</html>