<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet">   
    <title>Мой сайт</title>
</head>
<body>

<a href="add.php">Добавить новость</a>  
<?php

include_once("db.php");

$result = mysql_query(" SELECT * FROM news ORDER BY id DESC");

mysql_close();



while($row = mysql_fetch_array($result))
{?>
<headww>
<div class="qqq">    
    <h1><?php echo $row['title']?></h1> 
    <p><?php echo $row['text']?></p>
    <hr/> 
    <p class="date">Дата публикации:<?php echo $row['date']?> / <?php echo $row['time']?></p> 
    <p class="date">Автор новости:<?php echo $row['author']?></p>   
    
</div>       
<?php }?> 
</headww>  
</body>
</html>
