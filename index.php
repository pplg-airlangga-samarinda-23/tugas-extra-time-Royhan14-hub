<?php
session_start();

if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit();
}

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

 
    if ($username === "royhan" && $password === "123") {

        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-container">
        <div class="left-side">
        </div>
        <div class="right-side">
            <div class="login-form">
                <h2>Login</h2>
                <?php if ($error): ?>
                    <div class="error-message"><?php echo $error; ?></div>
                <?php endif; ?>
                <form method="POST" action="">
                    <input type="text" name="username" class="input-box" placeholder="Username" required>
                    <input type="password" name="password" class="input-box" placeholder="Password" required>
                    <button type="submit" class="login-button">Login</button>
                </form>
                <a href="forgot_password.php" class="forgot-link">Lupa Password?</a>
            </div>
        </div>
    </div>
</body>
</html>