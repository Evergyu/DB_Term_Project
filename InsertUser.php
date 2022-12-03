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
    <head>
        <meta charset="utf-8">
        <title>Leeingyu</title>
    </head>
    <body>
        <h1>Insert</h1>
    </body>
</html>
