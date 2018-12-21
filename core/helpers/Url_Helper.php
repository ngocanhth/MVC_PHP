<?php
function base_url($uri = null) {
    $uri = str_replace('?', '&', $uri);
     // var_dump($uri);
    $uri_array = explode('/', $uri);
  //  var_dump($uri_array);
    $module = $uri_array[0];
    $action = $uri_array[1];

    if ($module && $action) {
        return BASE_URL . "?module={$module}&action={$action}";
    }
    return BASE_URL;
}

function getParameter($key, $default = null) {
    if (!empty($_GET[$key])) {
        return $_GET[$key];
    }
    return $default;
}

function getPostParameter($key, $default = null) {
    if (!empty($_POST[$key])) {
        return $_POST[$key];
    }
    return $default;
}

function redirect($uri) {
    $location = base_url($uri);
    header("location: $location");
    exit;
}
