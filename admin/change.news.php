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

    $data = Data::get_news_data($key);

    if ($data === false) {
        view('not_found');
        die();
    }


    $title = "Edit News";

    admin_view('change.news', $data);
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

    if (!isset($_POST['yes']) ) {

    } else { 
        Data::update_news($original_title, $title, $description, $image);
        redirect('edit.news.php');
        
    }

    if (isset($_POST['no'])) {
        redirect('edit.news.php');
        
    }
}

