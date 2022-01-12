<?php
    $db = mysqli_connect('localhost','root','');//("ваш MySQL сервер","логин к этому серверу","пароль к этому серверу")
    mysqli_select_db($db,'dog') //("имя базы, к которой подключаемся",$db)
?> 