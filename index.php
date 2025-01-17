<?php 

$user = 'Admin';
$pass = 'admin1234';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(!empty($_POST['username'])) {
        if($username == $user && $password == $pass) {
            header('Location: event.php');
        } else {
            ?>
                <script>
                    alert('Username/Password Salah');
                </script>
            <?php
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login Page</title>
</head>
<body>
    <form action="" method="post">
        <label for="username">Username</label>
        <input type="text" name="username">
        <label for="password">Password: </label>
        <input type="password" name="password" id="">
        <button type="submit">Sign In</button>
    </form>
</body>
</html>