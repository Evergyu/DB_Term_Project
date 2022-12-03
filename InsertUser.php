<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$conn=mysqli_connect('192.168.167.3', 'leeingyu', '1234', 'leeingyu_term',4567);

mysqli_query($conn, "
    INSERT INTO USER1(
        UserID,
        PW,
        Name,
        Age,
        NickName) VALUES (
            1,
            '1',
            '1',
            1,
            '1'
            )"    
)
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
        <input type="text" name="NickName" placeholder="Nickname(string)">
        <br><br>
        <input type="button" value="INSERT">
        <input type="button" value="SHOW">
    </body>
</html>
