<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suivi Livraison - Delevri</title>
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

        /* Mobile layout optimized for bottom controls */
        .bottom-action-bar {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 1030;
            background: white;
            padding: 1rem;
            box-shadow: 0 -0.5rem 1rem rgba(0, 0, 0, 0.1);
            display: none;
            /* hidden on desktop default, handled via mix */
        }

        @media (max-width: 767.98px) {
            .bottom-action-bar {
                display: block;
            }

            .desktop-action-bar {
                display: none;
            }

            main {
                padding-bottom: 100px;
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
                    <label class="form-check-label" for="flexSwitchCheckChecked">Au travail</label>
                </div>
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle text-white"
                        data-bs-toggle="dropdown">
                        <div class="bg-secondary rounded-circle p-2 me-2">
                            <i class="bi bi-person text-white"></i>
                        </div>
                        <span class="fw-medium">Karim Driver</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end border-0 shadow-sm">
                        <li><a class="dropdown-item" href="#">Mon Profil</a></li>
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
                        <li class="nav-item"><a class="nav-link text-dark" href="dashboard.html"><i
                                    class="bi bi-speedometer2 me-2"></i> Tableau de bord</a></li>
                        <li class="nav-item"><a class="nav-link text-dark" href="available-orders.html"><i
                                    class="bi bi-search me-2"></i> Commandes Dispos</a></li>
                        <li class="nav-item"><a class="nav-link active rounded-2 bg-dark text-white fw-bold"
                                href="tracking.html"><i class="bi bi-cursor-fill me-2"></i> Livraison en cours</a></li>
                    </ul>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4 bg-light">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-4">
                    <h1 class="h2 fw-bold text-dark">Livraison #CMD-2024-001</h1>
                    <span class="badge bg-primary fs-6 px-3 py-2 rounded-pill">En cours</span>
                </div>

                <div class="row g-4 h-100">
                    <!-- Map Area -->
                    <div class="col-lg-8 order-lg-2">
                        <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100" style="min-height: 400px;">
                            <div
                                class="bg-body-secondary d-flex align-items-center justify-content-center h-100 position-relative">
                                <i class="bi bi-map fs-1 opacity-25"></i>
                                <span
                                    class="position-absolute bottom-0 start-0 m-3 badge bg-white text-dark shadow-sm p-2"><i
                                        class="bi bi-geo-alt-fill text-primary me-1"></i> Vous êtes à 5 min</span>
                            </div>
                        </div>
                    </div>

                    <!-- Steps & Actions -->
                    <div class="col-lg-4 order-lg-1">
                        <!-- Client Card -->
                        <div class="card border-0 shadow-sm rounded-4 mb-3">
                            <div class="card-body">
                                <h6 class="text-uppercase text-muted small fw-bold mb-3">Client</h6>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="bg-primary-subtle text-primary p-3 rounded-circle"><i
                                                class="bi bi-person-fill fs-4"></i></div>
                                        <div>
                                            <h5 class="mb-0 fw-bold">Jean Dupont</h5>
                                            <div class="d-flex align-items-center text-warning small">
                                                <i class="bi bi-star-fill"></i><span class="ms-1 text-muted">4.9</span>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="tel:+33612345678" class="btn btn-outline-success rounded-circle p-2"><i
                                            class="bi bi-telephone-fill"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- Itinerary -->
                        <div class="card border-0 shadow-sm rounded-4 mb-3">
                            <div class="card-body">
                                <div class="d-flex gap-3">
                                    <div class="d-flex flex-column align-items-center">
                                        <i class="bi bi-circle-fill text-success mt-1"></i>
                                        <div class="vr h-100 my-1 bg-secondary opacity-25"></div>
                                        <i class="bi bi-geo-alt-fill text-danger mb-1"></i>
                                    </div>
                                    <div class="w-100 pb-3">
                                        <!-- Added padding bottom for spacing relative to bottom items -->
                                        <div class="mb-4">
                                            <small class="text-muted text-uppercase fw-bold">Récupération</small>
                                            <p class="mb-0 fw-bold">12 Rue de la Paix, 75000 Paris</p>
                                            <small class="text-secondary">Code porte: 1234</small>
                                        </div>
                                        <div>
                                            <small class="text-muted text-uppercase fw-bold">Livraison</small>
                                            <p class="mb-0 fw-bold">45 Av. des Champs, 75008 Paris</p>
                                            <small class="text-secondary">Appeler en arrivant</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Desktop Actions -->
                        <div class="desktop-action-bar d-grid gap-2">
                            <h6 class="text-muted text-uppercase small fw-bold mt-2">Actions</h6>
                            <button class="btn btn-outline-primary py-2 rounded-pill fw-bold"><i
                                    class="bi bi-box-seam me-2"></i>Colis Récupéré</button>
                            <button class="btn btn-success py-3 rounded-pill fw-bold shadow-sm mt-2"><i
                                    class="bi bi-check-lg me-2"></i>Confirmer Livraison</button>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Mobile Sticky Footer Actions -->
    <div class="bottom-action-bar rounded-top-4 border-top">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h5 class="mb-0 fw-bold">15.00€</h5>
            <small class="text-muted">4.5 km total</small>
        </div>
        <button class="btn btn-success w-100 py-3 rounded-pill fw-bold shadow-sm">Confirmer Livraison</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/scripts.js"></script>
</body>

</html>