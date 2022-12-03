<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

if(array_key_exists('INSERT',$_POST)){
    INSERT();
}
else if(array_key_exists('INSERT',$_POST)){
    SHOW();
}
function INSERT(){
    $conn=mysqli_connect('192.168.167.3', 'leeingyu', '1234', 'leeingyu_term',4567);

    $ID=$_GET['ID'];
    echo htmlspecialchars($_GET['id']);
    $PW=$_GET['PW'];
    $Name=$_GET['Name'];
    $Age=$_GET['Age'];
    $NickName=$_GET['NickName'];

    mysqli_query($conn, "INSERT INTO USER1 (ID,PW,Name,Age,NickName) VALUES($ID,$PW,$Name,$Age,$NickName)");
}
function SHOW(){
    $conn=mysqli_connect('192.168.167.3', 'leeingyu', '1234', 'leeingyu_term',4567);

  

    
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
        <h1>Insert User</h1>
        <h1><a href="index.php">Back to Index</a></h1>
        
        <input type="number" name="ID" placeholder="ID(int)">
        <input type="text" name="PW" placeholder="PW(string)">
        <input type="text" name="Name" placeholder="Name(string)">
        <input type="number" name="Age" placeholder="Age(int)">
        <input type="text" name="NickName" placeholder="NickName(string)">
        <br><br>
        <form method="post">
        <input type="button" name="INSERT" value="INSERT">
        <input type="button" name="SHOW" value="SHOW">
        </form>
    </body>
</html>
