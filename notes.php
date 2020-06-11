<?php
function submit() {
    
    if(isset($_POST['noteTitle']) && $_POST['noteTitle'] != '')  {
      $noteTitle = $_POST['noteTitle'];
      $noteText = $_POST['noteText'];
      $noteDate = time();
      $tempArray = getNotes();
      
      
      
      $tempArray[] = array('date'=>$noteDate, 'title'=>$noteTitle, 'text'=>$noteText);

      writeNotes($tempArray);
      }
      else{ 
           return;
      
      }
    }
    
    function deleteNote(){
      
    //   var_dump($_POST['deleteNote13']);
          // var_dump($_POST['noteTitle']);
        $allNotes = array_reverse(getNotes());
        // print_r($allNotes);
        for($i = 0; $i <count($allNotes); $i++) {
          if(isset($_POST[$i])) {
            echo $i;
            unset($allNotes[$i]);
            writeNotes($allNotes);
          }

      }

      

  }

  function writeNotes($tempArray) {
    $jsonData = json_encode($tempArray, JSON_PRETTY_PRINT);
      file_put_contents('notes.json', $jsonData);
  }
function getNotes() {
    $contents = file_get_contents('notes.json');
    return $oldNotes = json_decode($contents);
}
function getDivClass($key) {
    switch ($key%2) {
        case 0:
            return 'noteEven';
        case 1:
            return 'noteOdd';
        default:
            return 'note';
    }
}

function printNotes(){
    $oldNotes = array_reverse(getNotes());
    if($oldNotes != '') {    
        // echo '<pre>';
        // var_dump($oldNotes);
        // echo '</pre>';
        foreach($oldNotes as $key=>$oldNote) {
            $divClass = getDivClass($key);
                echo '  <div class="'.$divClass.'">  <table class="note">    <th> '.$oldNote->title.'</th>
                                                                <tr><td class="note">'.$oldNote->text.'</td></tr>
                                                                <tr><td class="date">'.date('d.m.y, h:i', $oldNote->date).'</td></tr>
                                                                <tr><td><form action="index.php" method="POST">
                                                                        <input type="submit" class="deleteNote" value="delete Note" name="'.$key.'">
                                                                        </form></td></tr>
                                            </table>
                        </div><br>';
            
        }
    }
    else {
        return;
    }
}

?>