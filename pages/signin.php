<?php
    session_start();
    $linkHref = "/signin";
    $linkLabel = "Sign In";
    // check if the user is connected or not
    if (isset($_SESSION['session_id'])) {
        $linkHref = "/profile";
        $linkLabel = "Profile";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dist/header.css" />
    <link rel="stylesheet" href="../dist/forms.css" />
    <title>Role +</title>
</head>
<body>
    <header>
        <h1>Role+</h1>
        <nav>
            <a href="#">Home</a>
            <a href="#">Create simple character</a>
            <a href="#">Create complete character</a>
            <a href="#">Tools</a>
            <a href=<?php echo "\"" . $linkHref . "\""; ?>><?php echo $linkLabel; ?></a>
        </nav>
    </header>
    <main>
    <div class="centered-form">
        <form action="/signinaction" method="post">
            <input class="text-input" type="text" placeholder="Username" name="username" require /> <br>
            <input class="text-input" type="password" placeholder="Password" name="password" require /> <br>
            <input class="button" type="submit" />
            <p>Don't have an account yet ? Click <a href="/signup">here !</a></p>
        </form>
    </div>
    </main>
    <footer></footer>
</body>
</html>