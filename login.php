<?php
require 'config.php';
if (isset($_SESSION['user'])) { header('Location: dashboard.php'); exit; }
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $u = trim($_POST['username'] ?? '');
    $p = $_POST['password'] ?? '';
    if ($u === 'admin' && $p === 'admin123') {
        $_SESSION['user'] = ['username'=>'Ajay Bhaiya','balance'=>2.69];
        header('Location: dashboard.php'); exit;
    }
    $error = 'Invalid username or password.';
}
?>
<!doctype html><html><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>Ajay Bhaiya - Login</title><link rel="stylesheet" href="style.css"></head>
<body class="login-page"><main class="login-card">
<div class="logo">AJAY <span>BHAIYA</span></div><div class="subtitle">AUTHORIZE ACCESS</div>
<?php if($error): ?><div class="error"><?=htmlspecialchars($error)?></div><?php endif; ?>
<form method="post"><input name="username" placeholder="USER NAME" required>
<input type="password" name="password" placeholder="PASSWORD" required>
<button class="primary" type="submit">LOGIN NOW</button></form>
<div class="or">OR LOGIN WITH</div><button class="outline" type="button">G &nbsp; LOG IN WITH GOOGLE</button>
<a class="outline" href="how-to.php">▶ HOW TO BUY AND HOW TO USE</a>
<div class="links">Forgot Password? &nbsp;|&nbsp; Change Gmail<br>New User? Create Account</div>
</main></body></html>