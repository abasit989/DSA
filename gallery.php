<?php

session_start();

require('app/app.php');

$pics = Data::get_gallery();

$gallery = array_reverse($pics);

$title = "Gallery";

user_view('gallery', $gallery);

?>