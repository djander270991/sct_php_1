<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 

    <form method="get">
        <label for="login">Имя пользователя</label>
        <input type="text" name="login" >
        <label for="password">Пароль</label>
        <input type="text" name="password">
        <label for="old">Возраст</label>
        <input type="text" name="old">
        <button>Отправить</button>
    </form>
    <a href="?">Очистить</a><br>

    <?php
 function getUserData($chek){
        foreach ($chek as $key => $value) {
        if($value){
        echo ("$key = $value <br>");
        }
        else {
            echo ('Данных нет');
            break;
        }
    }
}
   getUserData($_GET);
   // var_dump($_GET);

    ?>
</body>
</html>