<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Delevri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link href="../css/styles.css" rel="stylesheet">
    <style>
        .sidebar {
            min-height: 100vh;
        }

        @media (max-width: 991.98px) {
            .sidebar {
                min-height: auto;
            }
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="../index.html">
                <i class="bi bi-shield-lock-fill me-2 text-primary"></i>Delevri Admin
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="d-none d-lg-flex ms-auto align-items-center gap-3">
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle text-white"
                        data-bs-toggle="dropdown">
                        <div class="bg-primary rounded-circle p-2 me-2">
                            <i class="bi bi-person text-white"></i>
                        </div>
                        <span class="fw-medium">Administrateur</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end border-0 shadow-sm">
                        <li><a class="dropdown-item" href="#">Mon Profil</a></li>
                        <li><a class="dropdown-item" href="#">Paramètres</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item text-danger" href="../index.html">Déconnexion</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-white sidebar collapse border-end">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column gap-1">
                        <li class="nav-item">
                            <a class="nav-link active rounded-2 bg-dark text-white fw-bold" href="dashboard.html">
                                <i class="bi bi-speedometer2 me-2"></i> Vue d'ensemble
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="users.html">
                                <i class="bi bi-people me-2"></i> Utilisateurs
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="stats.html">
                                <i class="bi bi-bar-chart me-2"></i> Statistiques
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4 bg-light">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-4">
                    <h1 class="h2 fw-bold text-dark">Vue d'ensemble</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Exporter</button>
                        </div>
                    </div>
                </div>

                <!-- Stats Cards -->
                <div class="row g-4 mb-4">
                    <div class="col-md-3">
                        <div class="card border-0 shadow-sm h-100 rounded-4 border-start border-4 border-primary">
                            <div class="card-body">
                                <h6 class="text-muted text-uppercase small fw-bold mb-2">Total Utilisateurs</h6>
                                <h2 class="card-title fw-bold mb-0">1,250</h2>
                                <small class="text-success fw-bold"><i class="bi bi-arrow-up"></i> 5%</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card border-0 shadow-sm h-100 rounded-4 border-start border-4 border-success">
                            <div class="card-body">
                                <h6 class="text-muted text-uppercase small fw-bold mb-2">Revenu Mensuel</h6>
                                <h2 class="card-title fw-bold mb-0">24,500€</h2>
                                <small class="text-success fw-bold"><i class="bi bi-arrow-up"></i> 12%</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card border-0 shadow-sm h-100 rounded-4 border-start border-4 border-warning">
                            <div class="card-body">
                                <h6 class="text-muted text-uppercase small fw-bold mb-2">Commandes Actives</h6>
                                <h2 class="card-title fw-bold mb-0">45</h2>
                                <small class="text-muted">En temps réel</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card border-0 shadow-sm h-100 rounded-4 border-start border-4 border-danger">
                            <div class="card-body">
                                <h6 class="text-muted text-uppercase small fw-bold mb-2">Alertes</h6>
                                <h2 class="card-title fw-bold mb-0">3</h2>
                                <small class="text-danger fw-bold">Action requise</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Registrations Table -->
                <div class="card border-0 shadow-sm rounded-4">
                    <div
                        class="card-header bg-white border-0 py-3 rounded-top-4 d-flex justify-content-between align-items-center">
                        <h5 class="mb-0 fw-bold">Dernières Inscriptions</h5>
                        <a href="users.html" class="btn btn-sm btn-outline-primary rounded-pill px-3">Tout gérer</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="bg-light">
                                <tr>
                                    <th class="ps-4">Utilisateur</th>
                                    <th>Date</th>
                                    <th>Rôle</th>
                                    <th>Statut</th>
                                    <th class="text-end pe-4">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="ps-4">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="bg-light rounded-circle p-2"><i class="bi bi-person"></i></div>
                                            <div>
                                                <p class="mb-0 fw-bold">Alice Martin</p>
                                                <small class="text-muted">alice@example.com</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Auj. 10:23</td>
                                    <td><span class="badge bg-info text-dark rounded-pill">Client</span></td>
                                    <td><span
                                            class="badge bg-success-subtle text-success border border-success">Actif</span>
                                    </td>
                                    <td class="text-end pe-4">
                                        <button class="btn btn-sm btn-light rounded-circle text-dark"><i
                                                class="bi bi-three-dots-vertical"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-4">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="bg-light rounded-circle p-2"><i class="bi bi-person"></i></div>
                                            <div>
                                                <p class="mb-0 fw-bold">Sami Livreur</p>
                                                <small class="text-muted">sami@driver.com</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Hier 18:45</td>
                                    <td><span class="badge bg-warning text-dark rounded-pill">Livreur</span></td>
                                    <td><span
                                            class="badge bg-warning-subtle text-warning border border-warning">Vérification</span>
                                    </td>
                                    <td class="text-end pe-4">
                                        <button class="btn btn-sm btn-light rounded-circle text-dark"><i
                                                class="bi bi-three-dots-vertical"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/scripts.js"></script>
</body>

</html>