<?php
    session_start();
    if(isset($_post['submit'])){
    $name = $_request['name'];
    if($name==null){
        echo"fill the box";}
    elseif(strlen($name)<2){
            echo"valid name please";
        }
    
    }

?>