<?php
    session_start();
    $username = $_POST['username']; // ref to $_POST['username'] cuz i'm lazy
    $passwordhash = hash('sha512', $_POST['password']);
    

    include "./utils/PHP/MYSQLvars.php"; // import mysql variables
    
    try {
        $pdo = new PDO("mysql:host={$mysql_uri};port=3306;dbname=roleplus", $mysql_user, $mysql_password);
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage() . "<br>";
        die();
    }

    // prepare request and execute it
    $mysql_req = "INSERT INTO accounts(username, password) VALUES (\"{$username}\",\"{$passwordhash}\")";
    $prepare = $pdo->prepare($mysql_req);
    $prepare->execute();
    
    // once the account is created we redirect to home page
    $sessionvar = base64_encode($username . ":" . $passwordhash);
    $_SESSION['session_id'] = $sessionvar;
    echo "Redirecting... If you're not redirected, click <a href='/'>here</a>";
    sleep(2);
    header("Location: /");
?>