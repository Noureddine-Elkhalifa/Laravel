<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>List d'articles</h1>
    <?php
     echo "<table border='2px' >";
     echo "<tr> <th>ID</th>  <th>Designation</th>   <th>Prix</th>  </tr>";
     foreach($article as $v)
     {
        echo "<tr> 
        <td>".$v['id']."</td> 
        <td>".$v['designation']."</td>
        <td>".$v['prix']."</td>
        </tr>";
     }
     echo "</table>";

    ?>
    
</body>
</html>