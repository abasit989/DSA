<?php

session_start();

require('../app/app.php');

if(!isset($_SESSION['admins_id'])) {
    redirect('index.php');
}

if(is_post()) {
   $name = sanitize($_POST['name']);
   $pass = sanitize($_POST['pass']);
   $cpass = sanitize($_POST['cpass']);

   if($pass == $cpass) {
      Data::register_admin($name, $pass, $pass);
      redirect('index.php');
   } else {
      $status = 'Confirm password does not match password!';
   }

}

$title ='register admin';

admin_view('register.admin');
?>

