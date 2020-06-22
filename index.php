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
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
<script src="notes.js"></script>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<div  class="input">
    <form  method="POST" name="form" action="index.php">
      <input type="text" class="input" placeholder="Titel"   name="noteTitle">
      <br>
      <textarea name="noteText" class="input"  onfocus="this.value=''" rows="8" cols="40">Text</textarea>
      <br>
      <input class="input" style="float: right" type="submit">
  </form></div>
  <div>
  <button id="hideInput">Hide Input</button>
  <button id="hideNotes">Hide Notes</button>

<hr>

 <?php
 
submit();
deleteNote();
printNotes();
?>   

</body>
</html>


