<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Second testtask</title>
</head>
<body>
    <form action="#" method="post">
        <input type="text" name="url" id="url">
        <input type="submit" value="Generate">
    </form>
</body>
</html>

<?php

if (isset($_POST['url'])) {
    $ch = curl_init("https://is.gd/create.php?format=simple&url=".$_POST['url']);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    $data = curl_exec($ch);
    curl_close($ch);

    echo "<p>Short URL: ".$data."</p>";
} 
