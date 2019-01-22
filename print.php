<?php
    function title2(){
    
    if (isset($_GET['title'])) {
        echo $_GET['title'];
    }
    else{
        echo"Welcome!";
    }
    }

    function desc(){
        if(isset($_GET['title'])) {
            echo file_get_contents('ins_data/'.$_GET['title']);
            }
            else {
                echo "Hello, here is insect web site.";
            }
        }

        
        function li(){
            $list = scandir('ins_data');
            $i =0;
        while ($i<count($list)) {
        if ($list[$i]!='.') {
            if ($list[$i]!='..') {
                echo"<list><a href=\"indexinsect.php?title=$list[$i]\">$list[$i]</a></list><br>";
            }
            
        }
        $i = $i+1;
        }
        }
?>