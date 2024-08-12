<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $clue = "find the hidden treasure at the golden island";
    $firstone = str_replace("golden", "mystic", $clue);
    $lastone = strtoupper($firstone);
    
    echo $lastone;

?>
</body>
</html>