<?php

require("app/app.php");

$title = 'News';


$data_news = Data::get_news();
$data = array_reverse($data_news);


user_view('news', $data);
?>