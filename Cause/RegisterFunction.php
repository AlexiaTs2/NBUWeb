<?php
session_start();
$servername = "127.0.0.1";
$username = "root";
$password = "1234";
$database = "rideandhelp";

try {
    $connection = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit();
}

// LOGIN обработка
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username']) && isset($_POST['password'])) {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE Name = ?";
    $stmt = $connection->prepare($sql);
    $stmt->execute([$username]);

    if ($stmt->rowCount() > 0) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if (password_verify($password, $user['Password'])) {
            $_SESSION['user'] = $user['Name'];
            header("Location: index.php?login=success");
            exit();
        } else {
            header("Location: index.php?login=fail&message=" . urlencode("Грешна парола!"));
            exit();
        }
    } else {
        header("Location: index.php?login=fail&message=" . urlencode("Потребителят не съществува!"));
        exit();
    }
}

// REGISTRATION обработка
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['reg_username'])) {
    $regUsername = trim($_POST['reg_username']);
    $regEmail = trim($_POST['reg_email']);
    $regPassword = $_POST['reg_password'];

    $errors = [];

    if (strlen($regUsername) < 3 || strlen($regUsername) > 20) {
        $errors[] = "Невалидно потребителско име!";
    }

    if (!filter_var($regEmail, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Невалиден имейл!";
    }

    if (!preg_match("/^(?=.*\d)(?=.*[A-Z]).{8,}$/", $regPassword)) {
        $errors[] = "Паролата трябва да има поне една главна буква, една цифра и да е поне 8 символа!";
    }

    $checkStmt = $connection->prepare("SELECT * FROM user WHERE Name = ? OR Email = ?");
    $checkStmt->execute([$regUsername, $regEmail]);

    if ($checkStmt->rowCount() > 0) {
        $errors[] = "Потребителското име или имейл вече съществуват!";
    }

    if (empty($errors)) {
        try {
            $hashedPassword = password_hash($regPassword, PASSWORD_DEFAULT);
            $insertStmt = $connection->prepare("INSERT INTO user (Name, Email, Password) VALUES (?, ?, ?)");
            $insertStmt->execute([$regUsername, $regEmail, $hashedPassword]);
            header("Location: index.php?register=success#loginModal");
            exit();
        } catch (PDOException $e) {
            echo "❌ Възникна грешка при запис: " . $e->getMessage();
            exit();
        }
    } else {
        $errMessage = urlencode(implode(" ", $errors));
        header("Location: index.php?register=fail&message=$errMessage#registerModal");
        exit();
    }
}
?>