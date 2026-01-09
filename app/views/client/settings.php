<?php

require_once "../config/database.php";
if (!isset($_SESSION['user'])) {
    header('Location: index.php?route=login');
    exit;
}

$user = $_SESSION['user'];
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';

    $stmt = $pdo->prepare("UPDATE users SET name = :name, email = :email, phone = :phone WHERE id = :id");
    $stmt->execute([
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'id' => $user['id']
    ]);

    // تحديث session
    $_SESSION['user']['name'] = $name;
    $_SESSION['user']['email'] = $email;
    $_SESSION['user']['phone'] = $phone;

    $message = "Informations mises à jour avec succès !";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paramètres - Delevri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-white bg-white shadow-sm sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand text-primary fw-bold" href="index.php?route=client/dashboard">
                <i class="bi bi-box-seam-fill me-2"></i>Delevri
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="d-none d-lg-flex ms-auto align-items-center gap-3">
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle text-dark"
                        data-bs-toggle="dropdown">
                        <div class="bg-light rounded-circle p-2 me-2">
                            <i class="bi bi-person"></i>
                        </div>
                        <span class="fw-medium">
                            
                           <?php echo htmlspecialchars($_SESSION['user']['name']); ?>

                    </a>
                    <ul class="dropdown-menu dropdown-menu-end border-0 shadow-sm">
                        <li><a class="dropdown-item" href="index.php?route=client/profile">Mon Profil</a></li>
                        <li><a class="dropdown-item" href="index.php?route=client/setting">Paramètres</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item text-danger" href="index.php?route=logout">Déconnexion</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>


<div class="container py-4">
    <h1 class="mb-4">Paramètres du Compte</h1>

    <?php if($message): ?>
        <div class="alert alert-success"><?= $message ?></div>
    <?php endif; ?>

    <form method="POST" class="card shadow-sm rounded-4 p-4">
        <div class="mb-3">
            <label class="form-label fw-bold">Nom</label>
            <input type="text" name="name" class="form-control" value="<?= htmlspecialchars($user['name']) ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label fw-bold">Email</label>
            <input type="email" name="email" class="form-control" value="<?= htmlspecialchars($user['email']) ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label fw-bold">Téléphone</label>
            <input type="text" name="phone" class="form-control" value="<?= htmlspecialchars($user['phone'] ?? '') ?>">
        </div>
        <button type="submit" class="btn btn-primary rounded-pill">Enregistrer les modifications</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


<!-- ajouter page setting -->