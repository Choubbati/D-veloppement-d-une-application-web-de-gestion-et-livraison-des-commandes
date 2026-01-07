<?php
if (!isset($_SESSION['user'])) {
    header('Location: index.php?route=login');
    exit;
}

// récupération des infos utilisateur
$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Profil - Delevri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/styles.css" rel="stylesheet">
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
                        <li><a class="dropdown-item" href="#">Paramètres</a></li>
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
    <h1 class="mb-4">Mon Profil</h1>
    <div class="card shadow-sm rounded-4 p-4">
        <div class="mb-3">
            <label class="form-label fw-bold">Nom</label>
            <input type="text" class="form-control" value="<?= htmlspecialchars($user['name']) ?>" disabled>
        </div>
        <div class="mb-3">
            <label class="form-label fw-bold">Email</label>
            <input type="email" class="form-control" value="<?= htmlspecialchars($user['email']) ?>" disabled>
        </div>
        <div class="mb-3">
            <label class="form-label fw-bold">Téléphone</label>
            <input type="text" class="form-control" value="<?= htmlspecialchars($user['phone'] ?? '') ?>" disabled>
        </div>
        <a href="index.php?route=client/settings" class="btn btn-primary rounded-pill">Modifier mes informations</a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
