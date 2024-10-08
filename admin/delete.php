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

    $news_data = Data::get_news_data($key);

    if ($term === false) {
        view('not_found');
        die();
    }

    
$title = "Delete News";

    admin_view('delete', $news_data);
}

if (is_post()) {
    $data = sanitize($_POST['title']);
    

    if (empty($data) || !isset($_POST['yes'])) {
        // TODO: display message
    } else {
        Data::delete_news($data);
        redirect('edit.news.php');
    }

    if (empty($data) || !isset($_POST['no'])) {
        // TODO: display message
    } else {
        redirect('edit.news.php');
    }

    
}




?>