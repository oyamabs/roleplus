<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dist/header.css" />
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
        <form action="/signinaction" method="post">
            <input type="text" placeholder="Username" name="username" require />
            <input type="password" placeholder="Password" name="password" require />
            <input type="submit" />
        </form>
    </main>
    <footer></footer>
</body>
</html>