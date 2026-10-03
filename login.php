<?php
session_start();

include "db.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.html");
    exit;
}

$email = trim($_POST["email"] ?? "");
$password = $_POST["password"] ?? "";

$stmt = mysqli_prepare(
    $conn,
    "SELECT id, name, password FROM users WHERE email = ?"
);

if (!$stmt) {
    mysqli_close($conn);
    header("Location: index.html?error=" . urlencode("Unable to process login. Please try again."));
    exit;
}

mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
$user = mysqli_fetch_assoc($result);

if ($user && password_verify($password, $user["password"])) {
    $_SESSION["user_id"] = $user["id"];
    $_SESSION["user_name"] = $user["name"];

    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    header("Location: movies.html");
    exit;
}

$error = $user
    ? "Incorrect password. Please try again."
    : "Email not registered. Please create an account.";

mysqli_stmt_close($stmt);
mysqli_close($conn);

header("Location: index.html?error=" . urlencode($error) . "#login");
exit;
?>
