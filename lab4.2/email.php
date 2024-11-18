<?php 
    session_start();
    if(isset($_post['submit'])){
    $email = $_request['email'];
    if($email==null){
    echo"fill the box";}
    else {
        header('location: email.html');
    }

}
    
?>