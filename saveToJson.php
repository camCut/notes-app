<?php
function submit() {
    
    if(!isset($_GET['noteTitle'])) {
        return;
      }
      else{ 
           
      $noteTitle = $_GET['noteTitle'];
      $noteText = $_GET['noteText'];
      $noteDate = time();
      $tempArray = getNotes();
      
      
      
      $tempArray[] = array('date'=>$noteDate, 'title'=>$noteTitle, 'text'=>$noteText);
      $jsonData = json_encode($tempArray, JSON_PRETTY_PRINT);
      file_put_contents('notes.json', $jsonData);
      }
    }
    
    function deleteNote(){
      
          // var_dump($_GET['noteTitle']);
        $allNotes = getNotes();
        // print_r($allNotes);
        foreach($allNotes as $key => $value) {
          if(!isset($_GET['deleteNote'])) {
            return;
          }
          else{ 
            var_dump($_GET['deleteNote']);
        }
      }

      

  }



?>