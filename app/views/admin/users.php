<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Utilisateurs - Delevri</title>
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
                                <i class="bi bi-speedometer2 me-2"></i> Vue d'ensemble
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active rounded-2 bg-dark text-white fw-bold" href="users.html">
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
                    <h1 class="h2 fw-bold text-dark">Gestion des Utilisateurs</h1>
                    <div class="input-group w-25 d-none d-md-flex">
                        <span class="input-group-text bg-white border-end-0"><i
                                class="bi bi-search text-muted"></i></span>
                        <input type="text" class="form-control border-start-0" placeholder="Rechercher...">
                    </div>
                </div>

                <div class="card border-0 shadow-sm rounded-4">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle mb-0">
                                <thead class="bg-light">
                                    <tr>
                                        <th class="ps-4">
                                            <input class="form-check-input" type="checkbox" value="" id="selectAll">
                                        </th>
                                        <th class="ps-3">Utilisateur</th>
                                        <th>Rôle</th>
                                        <th>Date Inscription</th>
                                        <th>Statut</th>
                                        <th class="text-end pe-4">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- User 1 -->
                                    <tr>
                                        <td class="ps-4"><input class="form-check-input" type="checkbox"></td>
                                        <td class="ps-3">
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="bg-light rounded-circle p-2"><i class="bi bi-person"></i>
                                                </div>
                                                <div>
                                                    <p class="mb-0 fw-bold">Jean Dupont</p>
                                                    <small class="text-muted">jean@gmail.com</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-info text-dark rounded-pill">Client</span></td>
                                        <td>01 Jan 2024</td>
                                        <td><span class="badge bg-success rounded-pill">Actif</span></td>
                                        <td class="text-end pe-4">
                                            <button class="btn btn-sm btn-outline-secondary rounded-circle"
                                                data-bs-toggle="tooltip" title="Éditer"><i
                                                    class="bi bi-pencil"></i></button>
                                            <button class="btn btn-sm btn-outline-danger rounded-circle ms-1"
                                                data-bs-toggle="tooltip" title="Bloquer"><i
                                                    class="bi bi-ban"></i></button>
                                        </td>
                                    </tr>
                                    <!-- User 2 -->
                                    <tr>
                                        <td class="ps-4"><input class="form-check-input" type="checkbox"></td>
                                        <td class="ps-3">
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="bg-light rounded-circle p-2"><i class="bi bi-person"></i>
                                                </div>
                                                <div>
                                                    <p class="mb-0 fw-bold">Karim Driver</p>
                                                    <small class="text-muted">karim@driver.com</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-warning text-dark rounded-pill">Livreur</span></td>
                                        <td>15 Dec 2023</td>
                                        <td><span class="badge bg-success rounded-pill">Actif</span></td>
                                        <td class="text-end pe-4">
                                            <button class="btn btn-sm btn-outline-secondary rounded-circle"
                                                data-bs-toggle="tooltip" title="Éditer"><i
                                                    class="bi bi-pencil"></i></button>
                                            <button class="btn btn-sm btn-outline-danger rounded-circle ms-1"
                                                data-bs-toggle="tooltip" title="Bloquer"><i
                                                    class="bi bi-ban"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer bg-white border-0 py-3 rounded-bottom-4">
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center mb-0">
                                <li class="page-item disabled"><a class="page-link border-0" href="#">Préc.</a></li>
                                <li class="page-item active"><a class="page-link border-0 rounded-circle active"
                                        href="#">1</a></li>
                                <li class="page-item"><a class="page-link border-0 rounded-circle text-dark"
                                        href="#">2</a></li>
                                <li class="page-item"><a class="page-link border-0 text-dark" href="#">Suiv.</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/scripts.js"></script>
</body>

</html>