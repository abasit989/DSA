<?php

session_start();

require('../app/app.php');

if(!isset($_SESSION['admins_id'])) {
    redirect('index.php');
}


if (is_get()) {
    $key = sanitize($_GET['key']);

    if (empty($key)) {
        view('not_found');
        die();
    }

    $data = Data::get_admin($key); 

    $title = "Admin Profile";

    admin_view('admin.profile', $data);
}




if(is_post()) {
    $name = sanitize($_POST['name']);
    $prev_pass = sanitize($_POST['prev_pass']);
    $old_pass = sanitize($_POST['old_pass']);
    $new_pass = sanitize($_POST['new_pass']);
    $confirm_pass = sanitize($_POST['confirm_pass']);

    $stm = Data::check_old_pass($old_pass, $prev_pass);


    if($stm->rowCount() > 0){
        if($new_pass === $confirm_pass) {
        Data::update_admin_profile($name, $new_pass, $prev_pass);
        redirect('#');
        } else {
            $status2 = "new password does not match confirm password!";
            $data = Data::get_admin($prev_pass); 
        }

     } else {
       $status = 'incorrect old password!';
       $data = Data::get_admin($prev_pass); 
     } 

     admin_view('admin.profile', $data);

}




?>
