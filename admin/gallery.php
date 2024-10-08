<?php

session_start();

require('../app/app.php');

$admin_id = $_SESSION['admins_id'];

if(!$admin_id) {
    redirect('index.php');
}

if(is_post()) {
    $image = $_FILES['image']['name'];
    $image = filter_var($image, FILTER_SANITIZE_STRING);
    $image_size_01 = $_FILES['image']['size'];
    $image_tmp_name_01 = $_FILES['image']['tmp_name'];
    $image_folder_01 = '../uploaded_img/gallery/'.$image;
    move_uploaded_file($image_tmp_name_01, $image_folder_01);


    if (empty($image)) {
        // TODO: display message
    } else {
        Data::add_to_gallery($image);
    }

    redirect('#');

}

$pics = Data::get_gallery();

$gallery = array_reverse($pics);

$title = "Gallery";

admin_view('gallery', $gallery, $admin_id);

?>






