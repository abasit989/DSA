<?php

session_start();

require('../app/app.php');

$admin_id = $_SESSION['admins_id'];

if(!$admin_id) {
    redirect('index.php');
}



if (is_get()) {
    $key = sanitize($_GET['key']);

    if (empty($key)) {
        view('not_found');
        die();
    }

    $data = Data::get_updates_data($key);

    if ($data === false) {
        view('not_found');
        die();
    }
    $title = "Edit Update";

    admin_view('update.edit', $data);
}

if (is_post()) {
    $title = sanitize($_POST['title']);
    $description = sanitize($_POST['description']);
    $original_title = sanitize($_POST['original-title']);

    $image = $_FILES['image']['name'];
    $image = filter_var($image, FILTER_SANITIZE_STRING);
    $image_size_01 = $_FILES['image']['size'];
    $image_tmp_name_01 = $_FILES['image']['tmp_name'];
    $image_folder_01 = '../uploaded_img/'.$image;
    move_uploaded_file($image_tmp_name_01, $image_folder_01);




    if (empty($title) || empty($description) || empty($original_title) || !isset($_POST['yes'])) {
        // TODO: display message
    } else {
        Data::update_updates($original_title, $title, $description, $image);
        redirect('update.php');
    }

    if (isset($_POST['no'])) {
        redirect('update.php');
    }
}