<?php

function user_view($url, $model="", $model2="", $model3="") {
    global $title;
    require(APP_PATH . 'views/layout.view.php');
}

function admin_view($url, $model="", $model2="" ) {
    global $title, $status, $status2;
    require(APP_PATH . 'views/admin/layout.view.php');
}

function is_get() {
    return $_SERVER['REQUEST_METHOD'] === 'GET';
}

function is_post() {
    return $_SERVER['REQUEST_METHOD'] === 'POST';
}

function sanitize($value) {
    $temp = filter_var(trim($value), FILTER_SANITIZE_STRING);

    if ($temp === false) {
        return '';
    }

    return $temp;
}

function redirect($url) {
    header("Location: $url");
    die();
}



function connect() {
    try {
        return new PDO(DB['db'], DB['db_user'], DB['db_password']);
    } catch (PDOException $e) {
        return null;
    }

}