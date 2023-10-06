<?php
if(isset($_POST['sign_up'])){
    //grabbing the data
    $uid = $_POST['uid'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $pwdrepeat = $_POST['pwdrepeat'];


    //instance signup controller
    include '../classes/signup-controller.php';
    


}

?>