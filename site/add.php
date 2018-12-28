<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet">   
    <title>Добавление новости</title>
</head>
<body>

<form method="post" action="add.php">
Название новости<br>
<input type="text" name="title"/><br>
Текст новости <br>
<textarea cols="40" rows="10" name="text"></textarea><br>
Автор новости <br>
<input type="text" name="author"/>
<input type="hidden" name="date" value="<?php echo date('Y-m-d');?>" />
<input type="hidden" name="time" value="<?php echo date('H:i:s');?>" />

<input type="submit" name="add" value="Добавить" />
</form>  



<?php

include_once("db.php");
if(isset($_POST['add']))
{
    $title = strip_tags(trim($_POST['title']));
    $text = strip_tags(trim($_POST['text']));
    $author = strip_tags(trim($_POST['author']));
    $date= $_POST['date'];
    $time= $_POST['time'];
    
    $result = mysql_query(" 
                                INSERT INTO news(title, text, date, time, author) 
                                VALUES ('$title', '$text', '$date', '$time', '$author') 
    ");
    
    mysql_close();

    echo "Новость успешно добавлена";
}



?>
    
</body>
</html>