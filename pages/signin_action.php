<?php
    $username = $_POST['username']; // ref to $_POST['username'] cuz i'm lazy
    $passwordhash = hash('sha512', $_POST['password']);
    
    $connected = false;

    include "./utils/PHP/MYSQLvars.php"; // import mysql variables
    
    try {
        $pdo = new PDO("mysql:host={$mysql_uri};port=3306;dbname=roleplus", $mysql_user, $mysql_password);
    } catch (PDOException $e) {
        echo "Errovr: " . $e->getMessage() . "<br>";
        die();
    }

    // prepare request and execute it
    $mysql_req = "SELECT * FROM accounts WHERE username = \"{$username}\" AND password = \"{$passwordhash}\"";
    $prepare = $pdo->prepare($mysql_req);
    $prepare->execute();

    $rows = $prepare->fetch(); // get the returned list of the database

    // if an account is found we create a session variable for the account and redirect to the home page
    if ($prepare->rowCount() > 0) {
        $connected = true;
        $sessionvar = base64_encode($username . ":" . $passwordhash);
        $_SESSION['session_id'] = $sessionvar;
        echo "Redirecting... If you're not redirected, click <a href='/'>here</a>";
        header("Location: " . $_SERVER['SERVER_NAME'] . "/"); // redirect to http://rplus.website.com/
    }
    else { // if account is not found just redirect to the home page
        echo "Redirecting... If you're not redirected, click <a href='/'>here</a>";
        sleep(2);
        header("Location: " . $_SERVER['SERVER_NAME'] . "/");   
    }
    
?>