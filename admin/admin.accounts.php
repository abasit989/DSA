<?php

session_start();

require('../app/app.php');

$admin_id = $_SESSION['admins_id'];

if(!$admin_id) {
    redirect('index.php');
}



$admins = Data::get_all_admins();

$title = "Admins Accounts";

admin_view('admin.accounts', $admins, $admin_id);

?>



