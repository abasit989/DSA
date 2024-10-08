<?php
session_start();

require('../app/app.php');


if(!isset($_SESSION['admins_id'])) {
    redirect('index.php');
}

if (is_get()) {
    $key = sanitize($_GET['key']);



    $data = Data::get_admin($key);

    $title = "Dashboard";

    admin_view('dashboard', $data);
}



?>
