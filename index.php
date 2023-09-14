<?php 
function space($el, $el2, $el3){
    if(!$el || !$el2 || !$el3){
        return "<b>Пустые поля</b>";
    }
    else{
        return false;
    }
}
function space2($el, $el2){
    if(mb_strlen($el) < 3 || mb_strlen($el2) < 3){
        return "<b>Имя или почта не может быть меньше 3 символов</b>";
    }
    else{
        return false;
    }
}   
function space3($el){
    if(strpos($el, '@') == false){
       return "<b>Формат почты указан неверно</b>";
    }
    else{
        return false;
    }
}   

function space4($el){
    if(strlen($el) == 11){
        return false;
    }
    else{
        return "<b>Неверно указан номер телефона</b>";
    }
}

if(isset($_POST['add'])){
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   if(space($name, $email, $phone)){
    echo space($name, $email, $phone);
   }
   else if(space2($name, $email)){
    echo space2($name, $email);
   }
   else if(space3($email)){
    echo space3($email);
   }
   else if(space4($phone)){
    echo space4($phone);
   }
   else{
    echo "<span>Все хорошо</span>";
   }
}

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <input type="text" name="name" placeholder="Имя">
        <input type="text" name="email" placeholder="Email">
        <input type="text" name="phone" placeholder="Номер телефона">
        <input type="submit" name="add" value="Отправить / Send">
    </form>
</body>
</html>