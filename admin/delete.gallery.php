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

    $gallery_data = Data::get_gallery_data($key);

    if ($term === false) {
        view('not_found');
        die();
    }

    $title = "Delete Gallery";


    admin_view('delete.gallery', $gallery_data);
}

if (is_post()) {
    $id = sanitize($_POST['id']);

    if (empty($id) || !isset($_POST['yes'])) {
        // TODO: display message
    } else {
        Data::delete_from_gallery($id);
        redirect('gallery.php');
    }

    if (empty($id) || !isset($_POST['no'])) {
        // TODO: display message
    } else {
        redirect('gallery.php');
    }

    
}




?>