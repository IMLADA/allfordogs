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
    <link rel="stylesheet" href="styleKor.css">
    <link rel="stylesheet" href="js.css">
    <link rel="stylesheet" href="mobile.css">
    <link rel="stylesheet" href="fonts.css">
    <title>Cart</title>
</head>
<body>

<?php
    session_start();
?>
    
    <div class="header" style="height:00px">  

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
                    echo "You logged in to the site as ".$_SESSION['login'].'
                    <form method="get">
                        <input name="signOut" style="display:none" value="true">
                        <button class="b1 col" type="submit" style="">Sign out</button>
                    </form>';
                    }
                ?>
            </div>
        </div>
    </div>
    <script>    
        function getCookie(name) {
            let matches = document.cookie.match(new RegExp(
                "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
            ));
            return matches ? decodeURIComponent(matches[1]) : undefined;
        }
        let data = getCookie('buy')
        if(data){
            data=data.split(',');
            korOutput();
        }else{
            console.log(data);
            document.write('Your shopping cart is empty')
        }
        function deleteBuy(x){
            for(i in data){
                if (data[i]==x){
                    x=i;
                    break
                }
            }
            data.splice(x, 1);
            document.cookie = 'data='+data.join(',');
            document.getElementsByClassName('korCont'+x)[0].outerHTML = '';
        }
        function refreshCount(){
            let stroki = document.getElementsByClassName('ProdInput');
            let result = [];
            
            for(i in data){
                result.push(stroki[i].value);
            }
            document.getElementsByName('prodsCounter')[0].value=result.join(',');
            console.log(document.getElementsByName('prodsCounter')[0].value);
        }
        function korOutput(){
            for(i in data){
                document.write('\
                <div class="korContent korCont'+(data[i])+'">\
                    <div class="korProd"><img src="karProd/p'+(data[i])+'.jpg" width="210px" height="150px"></div>\
                    <div class="korStrok">\
                        Кол-во\
                        <div class="inp"><input name="prod'+(data[i])+'" type="text" size="22" maxlength="100" onchange="refreshCount()" class="textInp ProdInput" value="1"></div>\
                    </div>\
                    <div class="korZakaz">\
                        <a><button class="korKup colKorZen" type="button" onclick="deleteBuy('+data[i]+')">delete</button></a>\
                    </div>\
                </div>');
            }
            document.write('\
            <div class="korContent inp">\
                <form class="" method="POST">\
                    E-mail: <input name="email" type="text" class="textInp" style="width:150px;height:20px">\
                    <input name="prods" type="text" style="display:none" value="'+data.join(',')+'">\
                    <input name="prodsCounter" type="text" style="display:none" value="">\
                    <input class="korKup colKorZen" type="submit" value="buy">\
                </form>\
            </div>')
            refreshCount();
        }

    </script>

    <?php
    
    $email = "not defined";
    $prods = "not defined";
    $prodsCounter = "not defined";
    if(isset($_POST["email"])){
    
        $email = $_POST["email"];
    
    if(isset($_POST["prods"])){
    
        $prods = $_POST["prods"];
    
    if(isset($_POST["prodsCounter"])){
    
        $prodsCounter = $_POST["prodsCounter"];    
        include('bd.php');
    
        $sql = mysqli_query($db, "INSERT INTO `orders` (`email`, `prods`, `prods_amount`) VALUES ('{$email}', '{$prods}', '{$prodsCounter}')");
    //Если вставка прошла успешно
    if ($sql) {
      echo '<p> The purchase is successful. Expect a message in the mail.</p>';
    } else {
      echo '<p>An error has occurred: ' . mysqli_error($link) . ' Try again later.</p>';
    }

    }}}
    

    ?>
</body>
</html>