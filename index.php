<?php

$request = $_SERVER['REQUEST_URI'];
$foldername = "pages";


// router
switch ($request) {
    case '/' :
    case '' :
        require __DIR__ . '/' . $foldername . '/index.php';
        break;
    case '/signin':
        require __DIR__ . '/' . $foldername . '/signin.php';
        break;
    case '/signup':
        require __DIR__ . '/' . $foldername . '/signup.php';
        break;
    case '/signinaction':
        require __DIR__ . '/' . $foldername . '/signin_action.php';
        break;
    case '/signupaction':
        require __DIR__ . '/' . $foldername . '/signup_action.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/' . $foldername . '/404.php';
        break;
}
?>