<?php

session_start();

require('../app/app.php');

$title = "Login";

if (is_post()) {
  $name = sanitize($_POST['name']);
  $password = sanitize($_POST['password']);

  $stm = Data::authenticate_user($name, $password);

  
  $row = $stm->fetch(PDO::FETCH_ASSOC);

  if($stm->rowCount() > 0){
     $_SESSION['admins_id'] = $row['id'];
     redirect("dashboard.php?key=" . $_SESSION['admins_id']);
     die();
   } else {
     $status = 'Invalid!';
   } 
}

admin_view('login');

?>



