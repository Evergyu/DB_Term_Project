<?php
$conn=mysqli_connect("192.168.167.3", "root", "1234", "leeingyu_term");
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