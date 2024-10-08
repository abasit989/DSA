<?php

require("app/app.php");

$title = 'Dortmund Sports Academy';

$data_news = Data::get_news();
$data = array_reverse($data_news);

$update_data = Data::get_updates();
$update = array_reverse($update_data);

user_view('index', $data, $update);
?>