<?php 
    session_start();
    if(isset($_post['submit'])){
    $dob = $_request['dob'];
    if($dob==null){
    echo"fill the box";}
    else {
        header('location: dob.html');
    }

}
    
?>