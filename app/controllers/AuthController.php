<?php
class AuthController {

    public function login() {
        if(isset($_POST['email'])){
            global $pdo;
$stmt = $pdo->prepare("
    SELECT users.*, roles.name AS role 
    FROM users 
    JOIN roles ON users.role_id = roles.id 
    WHERE users.email=?
");
            $stmt->execute([$_POST['email']]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            if($user && password_verify($_POST['password'], $user['password'])){
                $_SESSION['user'] = $user;
                if($user['role']=='client'){
                    header('Location: index.php?route=client/dashboard');
                }elseif($user['role']=='livreur'){
                    header('Location: index.php?route=livreur/dashboard');
                }
                exit;
            }else{
                $error = "Email ou mot de passe incorrect";
            }
        }
        require '../app/views/auth/login.php';
    }

public function register() {
    if (isset($_POST['submit'])) {
        global $pdo;

        $stmt = $pdo->prepare("SELECT id FROM roles WHERE name = ?");
        $stmt->execute([$_POST['role']]);
        $role = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$role) {
            die('Role invalide');
        }

        $stmt = $pdo->prepare("
            INSERT INTO users (name, email, password, role_id, created_at)
            VALUES (?, ?, ?, ?, NOW())
        ");

        $stmt->execute([
            $_POST['name'],
            $_POST['email'],
            password_hash($_POST['password'], PASSWORD_DEFAULT),
            $role['id']
        ]);

        header('Location: index.php?route=login');
        exit;
    }

    require '../app/views/auth/register.php';
}


    public function logout(){
        session_destroy();
        header('Location: index.php?route=login');
        exit;
    }
}
