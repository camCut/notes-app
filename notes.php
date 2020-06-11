<?php
class Note {
    public $date;
    public $title;
    public $text;

    function __construct($note = null) {
        if(!isset($note)) {
            return;
        }
        $this->date = $note->date;
        $this->title = $note->title;
        $this->text = $note->text;
    }
}

function getNotes(){
    $contents = file_get_contents('notes.json');
    return $oldNotes = json_decode($contents);
}
function getDivClass($key)
{
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
    $oldNotes = getNotes();
    if($oldNotes != '') {    
        $oldNotes = array_reverse($oldNotes);
        // echo '<pre>';
        // var_dump($oldNotes);
        // echo '</pre>';
        foreach($oldNotes as $key=>$oldNote) {
            $divClass = getDivClass($key);
                echo '  <div class="'.$divClass.'">  <table> <th> '.$oldNote->title.'</th>
                                                    <tr><td>'.$oldNote->text.'</td></tr>
                                                    <tr><td>'.date('d.m.y, h:i', $oldNote->date).'</td></tr>
                                                    <tr><td><form action ="index.php method="get"><input type="button" class="deleteNote" value="deleteNote'.$key.'" name="deleteNote"></form></td></tr>
                                            </table>
                        </div><br>';
            
        }
    }
    else {
        return;
    }
}

?>