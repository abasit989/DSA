<?php

require("app/app.php");

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
}

$title = 'news';

user_view('news.details', $data);
?>