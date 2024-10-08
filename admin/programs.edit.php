<?php

session_start();

require('../app/app.php');

$admin_id = $_SESSION['admins_id'];

if(!$admin_id) {
    redirect('index.php');
}

$title = "Edit";

if(is_post()) {
    $title = sanitize($_POST['title']);
    $description = sanitize($_POST['description']);

        
    $image = $_FILES['image']['name'];
    $image = filter_var($image, FILTER_SANITIZE_STRING);
    $image_size_01 = $_FILES['image']['size'];
    $image_tmp_name_01 = $_FILES['image']['tmp_name'];
    $image_folder_01 = '../uploaded_img/'.$image;
    move_uploaded_file($image_tmp_name_01, $image_folder_01);

    if (empty($title) || empty($description)) {
        // TODO: display message
    } else {
        Data::add_programs($title, $description, $image);
    }

    redirect('#');

}

    $programs_data = Data::get_programs();
    $programs = array_reverse($programs_data);

admin_view('programs.edit', $programs, $admin_id);

?>


    
