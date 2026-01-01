<?php
ob_start();
session_start();

if (isset($_SESSION['student'])) {
    header("Location: student/dashboard.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // TEMP login to confirm system works
    $_SESSION['student'] = 'testuser';
    header("Location: student/dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Login Page (Root index.php)</h2>

<form method="POST">
    <button type="submit">Login</button>
</form>

</body>
</html>


