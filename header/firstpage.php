<?php
function redirect_to($new_location){
    header("Location:" .$new_location);
    exist;
}
redirect_to('secondpage.php');
 
//    header("refresh:5; url=secondpage.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>First page</h1>
</body>
</html>