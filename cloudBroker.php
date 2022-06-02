<?php
    $message = false;
if (isset($_POST["who"]) && isset($_POST["pass"])) {
    if ($_POST["pass"] == "password") {
        header("Location: http://172.25.1.10/cloudServer.php?name=" . urlencode($_POST['who']));
        die();
    }
    if (strlen($_POST["who"]) < 1 || strlen($_POST['pass']) < 1) {
        $message = "Mandatory username and password";
    } else {
        $message = "Incorrect password";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Cloud Broker</title>
</head>
<body style="font-family: Helvetica">
    <h1>
        Login to cloud service
    </h1>
    <?php
    if ($message !== false) {
        echo('<p style="color: red;">'.htmlentities($message) . "</p>\n");
    }
    ?>
    <form method="post">
        <label>Username</label>
        <input type="text" name="who" autocomplete="off">
        <br>
        <label>Password</label>
        <input type="password" name="pass">
        <br>
        <input type="submit" name="login" value="Log In">
        <input type="submit" name="cancel" value="Cancel">
    </form>
</body>
</html>
