<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Article {{$v['id']}}</h1>
    <?php 
        echo "Designation:".$v["designation"]."</br>";
        echo "Prix:".$v["prix"];
    ?>
</body>
</html>