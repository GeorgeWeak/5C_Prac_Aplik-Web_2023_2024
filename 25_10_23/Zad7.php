<?php
$time = time() + 3600;
if(!isset($_COOKIE['visits'])){
    setcookie("time,$time");
}
if(!isset($_COOKIE['visits'])){
    $ile = 1;
}elseif($_COOKIE['time'] < time()){
    $ile = (int)$_COOKIE["visits"];
    if($ile < 1){
        $ile = 1;
    }
    $ile++;
    setcookie('time',$time);

} else {
    $ile = (int)$_COOKIE["visits"];
}
setcookie("visits","$ile");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad7</title>
</head>
<body>
    
</body>
</html>