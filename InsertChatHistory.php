<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$conn=mysqli_connect('192.168.167.3', 'leeingyu', '1234', 'leeingyu_term',4567);

if(array_key_exists('INSERT',$_POST)){
    INSERT();
}
else if(array_key_exists('INSERT',$_POST)){
    SHOW();
}
function INSERT(){
    mysqli_query($conn, "쿼리문");
}
function SHOW(){

}

?>

<!doctype html>
<html>
<style>
        a{text-decoration:none; color:blue;}
        body{text-align:center}
    </style>
    <head>
        <meta charset="utf-8">
        <title>Leeingyu</title>
    </head>
    <body>
        <h1>Insert ChatHistory</h1>
        <h1><a href="index.php">Back to Index</a></h1>

        <input type="number" name="ChatCode" placeholder="ChatCode(int)">
        <input type="text" name="ChatHistory" placeholder="ChatHistory(string)">
        <br><br>
        <form method="post">
        <input type="button" name="INSERT" value="INSERT">
        <input type="button" name="SHOW" value="SHOW">
        </form>
    </body>
</html>