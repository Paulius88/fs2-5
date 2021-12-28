<?php


session_start();

$_SESSION['error'] = $_SESSION['url'] = $_SESSION['location'] = null;

require_once 'functions.php';

if (!empty($_POST['location'])) {
    $location = addHttpProtocol($_POST['location']);

    if (!filter_var($location, FILTER_VALIDATE_URL)) {
        throwError(802);
        exit();
    }

    $redirects = file_get_contents('data.json');
    $redirects = json_decode($redirects, true);

    $ip = $_SERVER['REMOTE_ADDR'];

    if (isAllowedToCreateRedirect($redirects, $ip)) {
        $randomCode = generateRandomCode();

        $redirects[$randomCode]['ip'] = $ip;
        $redirects[$randomCode]['location'] = $location;
        $redirects[$randomCode]['timestamp'] = time();

        $redirects = json_encode($redirects, JSON_PRETTY_PRINT);

        file_put_contents('data.json', $redirects);

        $_SESSION['url'] = getFullProjectPath() . "/redirect.php?code={$randomCode}";
        $_SESSION['location'] = $location;

        header("Location: end.php");
    } else {
        throwError(800);
    }
} else {
    throwError(801);
}


 ?>
