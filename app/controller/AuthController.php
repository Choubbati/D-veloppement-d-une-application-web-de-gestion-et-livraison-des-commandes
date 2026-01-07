<?php
require_once __DIR__ . '/../../config/database.php';

class AuthController {

public function login() {
    global $pdo;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $email = $_POST['email'];
        $password = $_POST['password'];

        $stmt = $pdo->prepare("
            SELECT users.*, roles.name AS role
            FROM users
            JOIN roles ON users.role_id = roles.id
            WHERE users.email = ?
        ");
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        

        if ($user && password_verify($password, $user['password'])) {

            $_SESSION['user'] = $user;

            if ($user['role'] === 'client') {
                header("Location: index.php?route=client/dashboard");
                exit;
            }

            if ($user['role'] === 'livreur') {
                header("Location: index.php?route=livreur/dashboard");
                exit;
            }

        } else {
            $error = "Email ou mot de passe incorrect";
            require __DIR__ . '/../views/auth/login.php';
        }

    } else {
        require __DIR__ . '/../views/auth/login.php';
    }
}


    public function register() {
        global $pdo;

       

        if (!empty($_POST)) {
            $stmt = $pdo->prepare("SELECT id FROM roles WHERE name = ?");
            $stmt->execute([$_POST['role']]);
            $role = $stmt->fetch();

            if (!$role) {
                die("Role not found");
            }

            $stmt = $pdo->prepare("
                INSERT INTO users (name,email,phone,password,role_id)
                VALUES (?,?,?,?,?)
            ");
            $stmt->execute([
                    $_POST['name'],
                    $_POST['email'],
                $_POST['phone'],
                password_hash($_POST['password'], PASSWORD_DEFAULT),
                $role['id']
            ]);

            header("Location: index.php?route=login");
            exit;
        }

        require __DIR__ . '/../views/auth/register.php';
    }

    public function logout() {
        session_start();
        session_destroy();
        header('Location: index.php?route=login');
        exit;
    }
}
