<?php
    $linkHref = "/signin";
    $linkLabel = "Sign In";
    // check if the user is connected or not
    if (isset($_SESSION['account'])) {
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
        Lorem ipsum dolor sit, amet consecstetur adipisicing elit. Amet porro earum aliquam similique, quos recusandae voluptas corrupti a molestiae blanditiis natus, magni cumque itaque? Officiis eos ipsam veniam animi aliquam!
    </main>
    <footer></footer>
</body>
</html>