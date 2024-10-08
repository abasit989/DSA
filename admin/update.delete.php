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

    $update_data = Data::get_updates_data($key);

    if ($term === false) {
        view('not_found');
        die();
    }

    $title = "Delete Update";

    admin_view('update.delete', $update_data);
}

if (is_post()) {
    $data = sanitize($_POST['title']);

    if (empty($data) || !isset($_POST['yes'])) {
        // TODO: display message
    } else {
        Data::delete_updates($data);
        redirect('update.php');
    }

    if (empty($data) || !isset($_POST['no'])) {
        // TODO: display message
    } else {
        redirect('update.php');
    }

    
}





?>