<?php

$user = 'Admin';
$pass = 'Admin1234';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (!empty($username)) {
        if ($username == $user && $password == $pass) {
            header('Location: input.php');
        } else {
?>
            <script>
                alert('Username/Password Salah!')
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
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <form action="" method="POST">
            <label for="username">Username: </label>
            <input type="text" name="username" required>
            <label for="password">Password: </label>
            <input type="password" name="password" required>
            <button type="submit">Masuk</button>
        </form>
    </div>
</body>

</html>