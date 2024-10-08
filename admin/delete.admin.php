<?php

session_start();

require('../app/app.php');

if(!isset($_SESSION['admins_id'])) {
    redirect('index.php');
}

$title = "Delete Admin";

if (is_get()) {
    $key = sanitize($_GET['key']);

    $admin =  Data::get_admin($key);


    admin_view('delete.admin', $admin);
}


if (is_post()) {
    $data = sanitize($_POST['id']);
    

    if (empty($data) || !isset($_POST['yes'])) {
        // TODO: display message
    } else {
        Data::delete_admin($data);
        redirect('admin.accounts.php');
    }

    if (empty($data) || !isset($_POST['no'])) {
        // TODO: display message
    } else {
        redirect('admin.accounts.php');
    }
}









?>