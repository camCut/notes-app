<?php
header("Content-Type: text/html; charset=utf-8");

require "./notes.php";
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
    <form method="POST" name="form" action="index.php">
    <input type="text" class="title" placeholder="Titel"  name="noteTitle">
    <br>
    <textarea name="noteText" class="text" onfocus="this.value=''" rows="8" cols="40">Text</textarea>
    <br>
    <input type="submit">
</div>
   
 <?php
 
deleteNote();
submit();
printNotes();
// echo '<pre>';
// var_dump(getNotes()[0]);
// echo '</pre>';

?>   

</form>
</body>
</html>


