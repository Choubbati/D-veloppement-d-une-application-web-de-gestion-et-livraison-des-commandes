<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistiques - Delevri</title>
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

        .progress-thin {
            height: 8px;
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
                                    class="bi bi-speedometer2 me-2"></i> Vue d'ensemble</a></li>
                        <li class="nav-item"><a class="nav-link text-dark" href="users.html"><i
                                    class="bi bi-people me-2"></i> Utilisateurs</a></li>
                        <li class="nav-item"><a class="nav-link active rounded-2 bg-dark text-white fw-bold"
                                href="stats.html"><i class="bi bi-bar-chart me-2"></i> Statistiques</a></li>
                    </ul>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4 bg-light">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-4">
                    <h1 class="h2 fw-bold text-dark">Rapports & Statistiques</h1>
                    <button class="btn btn-outline-secondary rounded-pill"><i
                            class="bi bi-download me-2"></i>Télécharger PDF</button>
                </div>

                <div class="row g-4">
                    <!-- Revenue Progress -->
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm rounded-4 h-100">
                            <div class="card-body">
                                <h5 class="fw-bold mb-4">Objectifs de Revenus</h5>
                                <div class="mb-4">
                                    <div class="d-flex justify-content-between mb-1">
                                        <span class="small fw-bold">Janvier</span>
                                        <span class="small text-muted">24,500€ / 30,000€</span>
                                    </div>
                                    <div class="progress progress-thin rounded-pill">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 82%"
                                            aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="d-flex justify-content-between mb-1">
                                        <span class="small fw-bold">Décembre</span>
                                        <span class="small text-muted">32,100€ / 30,000€</span>
                                    </div>
                                    <div class="progress progress-thin rounded-pill">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 100%"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mb-0">
                                    <div class="d-flex justify-content-between mb-1">
                                        <span class="small fw-bold">Novembre</span>
                                        <span class="small text-muted">28,000€ / 30,000€</span>
                                    </div>
                                    <div class="progress progress-thin rounded-pill">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 93%"
                                            aria-valuenow="93" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- User Demographics -->
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm rounded-4 h-100">
                            <div class="card-body">
                                <h5 class="fw-bold mb-4">Répartition Utilisateurs</h5>
                                <div class="d-flex align-items-center justify-content-center p-3">
                                    <!-- Simple Pure CSS Donut Chart approximation or just bars -->
                                    <div class="d-flex gap-2 w-100 h-100 align-items-end" style="height: 150px;">
                                        <div class="bg-primary rounded-top w-100" style="height: 70%;"
                                            data-bs-toggle="tooltip" title="Clients 70%"></div>
                                        <div class="bg-warning rounded-top w-100" style="height: 30%;"
                                            data-bs-toggle="tooltip" title="Livreurs 30%"></div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center gap-4 mt-3">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="bg-primary p-1 rounded-circle" style="width: 12px; height: 12px;">
                                        </div>
                                        <small class="text-muted fw-bold">Clients (70%)</small>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="bg-warning p-1 rounded-circle" style="width: 12px; height: 12px;">
                                        </div>
                                        <small class="text-muted fw-bold">Livreurs (30%)</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Details Table -->
                    <div class="col-12">
                        <div class="card border-0 shadow-sm rounded-4">
                            <div class="card-header bg-white border-0 py-3 rounded-top-4">
                                <h5 class="mb-0 fw-bold">Performance par Ville</h5>
                            </div>
                            <div class="table-responsive">
                                <table class="table align-middle mb-0">
                                    <thead class="bg-light">
                                        <tr>
                                            <th class="ps-4">Ville</th>
                                            <th>Commandes</th>
                                            <th>Revenu</th>
                                            <th>Croissance</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="ps-4 fw-bold">Paris</td>
                                            <td>1,500</td>
                                            <td>15,000€</td>
                                            <td class="text-success"><i class="bi bi-arrow-up-right me-1"></i>12%</td>
                                        </tr>
                                        <tr>
                                            <td class="ps-4 fw-bold">Lyon</td>
                                            <td>850</td>
                                            <td>8,200€</td>
                                            <td class="text-success"><i class="bi bi-arrow-up-right me-1"></i>8%</td>
                                        </tr>
                                        <tr>
                                            <td class="ps-4 fw-bold">Marseille</td>
                                            <td>600</td>
                                            <td>5,400€</td>
                                            <td class="text-danger"><i class="bi bi-arrow-down-right me-1"></i>2%</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
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