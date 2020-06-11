<?php
header("Content-Type: text/html; charset=utf-8");

require "./notes.php";
require "./saveToJson.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<div>
    <form method="get" name="form" action="index.php">
    <input type="text" class="title" placeholder="Titel"  name="noteTitle" id="title">
    <br>
    <textarea name="noteText" class="text" id="noteText" onfocus="this.value=''" rows="8" cols="60">Text</textarea>
    <br>
    <input type="submit">
</div>
   
 <?php
 
submit();
printNotes();
// var_dump(getNotes());
deleteNote();

?>   

</form>
</body>
</html>


