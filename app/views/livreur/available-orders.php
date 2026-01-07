<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commandes Disponibles - Delevri</title>
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
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="dashboard.html">
                                <i class="bi bi-speedometer2 me-2"></i> Tableau de bord
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active rounded-2 bg-dark text-white fw-bold"
                                href="available-orders.html">
                                <i class="bi bi-search me-2"></i> Commandes Dispos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="tracking.html">
                                <i class="bi bi-cursor-fill me-2"></i> Livraison en cours
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4 bg-light">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-4">
                    <h1 class="h2 fw-bold text-dark">Marché des courses</h1>
                    <!-- Filter/Sort -->
                    <div>
                        <select class="form-select form-select-sm rounded-pill shadow-sm bg-white border-0">
                            <option>Trier par prix: Haut > Bas</option>
                            <option>Trier par distance: Proche</option>
                        </select>
                    </div>
                </div>

                <div class="row g-4">
                    <!-- Order Card 1 -->
                    <div class="col-md-6 col-xl-4">
                        <div class="card h-100 border-0 shadow-sm rounded-4 border-top border-4 border-warning">
                            <div class="card-body">
                                <div class="d-flex justify-content-between mb-3">
                                    <span class="badge bg-light text-dark border">Colis Moyen</span>
                                    <span class="fw-bold text-primary">4.5 km</span>
                                </div>
                                <h5 class="fw-bold mb-3">Paris 75012 &rarr; Paris 75008</h5>
                                <div class="timeline-simple mb-3 small text-muted border-start ps-3 border-2">
                                    <p class="mb-1"><i class="bi bi-circle-fill text-success"
                                            style="font-size: 8px;"></i> 12 Rue de la Paix</p>
                                    <p class="mb-0"><i class="bi bi-circle-fill text-danger"
                                            style="font-size: 8px;"></i> 45 Av. des Champs</p>
                                </div>
                                <div class="d-flex justify-content-between align-items-end mt-4">
                                    <div>
                                        <small class="text-muted d-block">Offre actuelle</small>
                                        <h3 class="fw-bold mb-0 text-dark">15€</h3>
                                    </div>
                                    <button class="btn btn-primary rounded-pill px-4 fw-bold" data-bs-toggle="modal"
                                        data-bs-target="#offerModal">
                                        Faire une offre
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Order Card 2 -->
                    <div class="col-md-6 col-xl-4">
                        <div class="card h-100 border-0 shadow-sm rounded-4 border-top border-4 border-primary">
                            <div class="card-body">
                                <div class="d-flex justify-content-between mb-3">
                                    <span class="badge bg-light text-dark border">Petit Colis</span>
                                    <span class="fw-bold text-primary">2.1 km</span>
                                </div>
                                <h5 class="fw-bold mb-3">Lyon 69002 &rarr; Lyon 69003</h5>
                                <div class="timeline-simple mb-3 small text-muted border-start ps-3 border-2">
                                    <p class="mb-1"><i class="bi bi-circle-fill text-success"
                                            style="font-size: 8px;"></i> 8 Place Bellecour</p>
                                    <p class="mb-0"><i class="bi bi-circle-fill text-danger"
                                            style="font-size: 8px;"></i> Gare Part-Dieu</p>
                                </div>
                                <div class="d-flex justify-content-between align-items-end mt-4">
                                    <div>
                                        <small class="text-muted d-block">Offre actuelle</small>
                                        <h3 class="fw-bold mb-0 text-dark">10€</h3>
                                    </div>
                                    <button class="btn btn-primary rounded-pill px-4 fw-bold" data-bs-toggle="modal"
                                        data-bs-target="#offerModal">
                                        Faire une offre
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </main>
        </div>
    </div>

    <!-- Modal Offer -->
    <div class="modal fade" id="offerModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-4 border-0 shadow">
                <div class="modal-header border-0 pb-0">
                    <h5 class="modal-title fw-bold">Proposer un tarif</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pt-4">
                    <form action="tracking.html">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Votre prix (€)</label>
                            <div class="input-group input-group-lg">
                                <span class="input-group-text bg-light border-0">€</span>
                                <input type="number" class="form-control bg-light border-0 fw-bold" placeholder="15"
                                    value="15">
                            </div>
                            <div class="form-text">Le client a proposé 15€.</div>
                        </div>
                        <div class="mb-4">
                            <label class="form-label fw-bold">Temps estimé (min)</label>
                            <select class="form-select bg-light border-0">
                                <option>15 - 30 min</option>
                                <option>30 - 45 min</option>
                                <option>45+ min</option>
                            </select>
                        </div>
                        <button type="submit"
                            class="btn btn-primary w-100 py-3 rounded-pill fw-bold text-uppercase letter-spacing-1">Envoyer
                            l'offre</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/scripts.js"></script>
</body>

</html>