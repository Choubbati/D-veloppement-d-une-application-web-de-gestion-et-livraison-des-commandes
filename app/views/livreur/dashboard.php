<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Livreur - Delevri</title>
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
                <i class="bi bi-box-seam-fill me-2 text-warning"></i>Delevri Livreur
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="d-none d-lg-flex ms-auto align-items-center gap-3">
                <div class="form-check form-switch text-white me-3">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                    <label class="form-check-label" for="flexSwitchCheckChecked">En ligne</label>
                </div>
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle text-white"
                        data-bs-toggle="dropdown">
                        <div class="bg-secondary rounded-circle p-2 me-2">
                            <i class="bi bi-person text-white"></i>
                        </div>
                        <span class="fw-medium">    <?php echo htmlspecialchars($_SESSION['user']['name']); ?></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end border-0 shadow-sm">
                        <li><a class="dropdown-item" href="#">Mon Profil</a></li>
                        <li><a class="dropdown-item" href="#">Véhicule</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item text-danger" href="index.php?route=logout"  >Déconnexion</a></li>
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
                                <i class="bi bi-speedometer2 me-2"></i> Tableau de bord
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="available-orders.html">
                                <i class="bi bi-search me-2"></i> Commandes Dispos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="tracking.html">
                                <i class="bi bi-cursor-fill me-2"></i> Livraison en cours
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">
                                <i class="bi bi-cash-coin me-2"></i> Mes Gains
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4 bg-light">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-4">
                    <h1 class="h2 fw-bold text-dark">Tableau de bord</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <a href="available-orders.html"
                            class="btn btn-warning shadow-sm rounded-pill px-4 fw-bold text-dark">
                            <i class="bi bi-search me-2"></i>Trouver une course
                        </a>
                    </div>
                </div>

                <!-- Stats Cards -->
                <div class="row g-4 mb-4">
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm h-100 rounded-4">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h6 class="card-subtitle text-muted text-uppercase small fa-bold">Gains du jour</h6>
                                    <div class="bg-success bg-opacity-10 text-success p-2 rounded-circle">
                                        <i class="bi bi-wallet2"></i>
                                    </div>
                                </div>
                                <h2 class="card-title fw-bold mb-0">85.50€</h2>
                                <small class="text-secondary">+12% vs hier</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm h-100 rounded-4">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h6 class="card-subtitle text-muted text-uppercase small fa-bold">Livraisons</h6>
                                    <div class="bg-primary bg-opacity-10 text-primary p-2 rounded-circle">
                                        <i class="bi bi-check2-circle"></i>
                                    </div>
                                </div>
                                <h2 class="card-title fw-bold mb-0">5</h2>
                                <small class="text-secondary">Aujourd'hui</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm h-100 rounded-4">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h6 class="card-subtitle text-muted text-uppercase small fa-bold">Note moyenne</h6>
                                    <div class="bg-warning bg-opacity-10 text-warning p-2 rounded-circle">
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                                <h2 class="card-title fw-bold mb-0">4.8/5</h2>
                                <small class="text-secondary">Sur 150 avis</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="card border-0 shadow-sm rounded-4">
                    <div class="card-header bg-white border-0 py-3 rounded-top-4">
                        <h5 class="mb-0 fw-bold">Dernières Activités</h5>
                    </div>
                    <div class="list-group list-group-flush">
                        <div class="list-group-item p-3 border-0 d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center gap-3">
                                <div class="bg-light p-2 rounded-circle">
                                    <i class="bi bi-box-seam text-primary"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0 fw-bold">Livraison terminée #892</h6>
                                    <small class="text-muted">Il y a 2 heures • Lyon 69002</small>
                                </div>
                            </div>
                            <span class="text-success fw-bold">+22.50€</span>
                        </div>
                        <div class="list-group-item p-3 border-0 d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center gap-3">
                                <div class="bg-light p-2 rounded-circle">
                                    <i class="bi bi-box-seam text-primary"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0 fw-bold">Livraison terminée #880</h6>
                                    <small class="text-muted">Il y a 5 heures • Bordeaux 33000</small>
                                </div>
                            </div>
                            <span class="text-success fw-bold">+28.00€</span>
                        </div>
                    </div>
                </div>

            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/scripts.js"></script>
</body>

</html>