<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détail Commande - Delevri</title>
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

        .timeline-item {
            position: relative;
            padding-left: 2rem;
            padding-bottom: 1.5rem;
            border-left: 2px solid #e9ecef;
        }

        .timeline-item:last-child {
            border-left: 2px solid transparent;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: -9px;
            top: 2px;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background: #fff;
            border: 3px solid #0d6efd;
        }

        .timeline-item.completed::before {
            background: #0d6efd;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
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
                        <li><a class="dropdown-item" href="#">Mon Profil</a></li>
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

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-white sidebar collapse border-end">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column gap-1">
                        <li class="nav-item"><a class="nav-link text-dark" href="dashboard.html"><i
                                    class="bi bi-speedometer2 me-2"></i> Tableau de bord</a></li>
                        <li class="nav-item"><a class="nav-link text-dark" href="create-order.html"><i
                                    class="bi bi-plus-circle me-2"></i> Nouvelle Commande</a></li>
                        <li class="nav-item"><a class="nav-link active rounded-2 bg-primary-subtle text-primary fw-bold"
                                href="index.php?route=client/orders"><i class="bi bi-box-seam me-2"></i> Mes Commandes</a></li>
                    </ul>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4 bg-light">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-4">
                    <div>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-1 small">
                                <li class="breadcrumb-item"><a href="index.php?route=client/orders" class="text-decoration-none">Mes
                                        Commandes</a></li>
                                <li class="breadcrumb-item active" aria-current="page">#CMD-2024-001</li>
                            </ol>
                        </nav>
                        <h1 class="h2 fw-bold text-dark">
    Détail Commande
    <?php
        $status = $order->getStatus();
        if ($status === 'pending') {
            $badge = 'bg-warning text-dark';
        } elseif ($status === 'livrée') {
            $badge = 'bg-success';
        } else {
            $badge = 'bg-primary';
        }
    ?>
    <span class="badge <?= $badge ?> ms-2 rounded-pill fs-6 fw-normal">
        <?= htmlspecialchars($status) ?>
    </span>
</h1>

                    </div>
                    <div class="btn-toolbar mb-2 mb-md-0 gap-2">
                        <button type="button" class="btn btn-outline-danger btn-sm rounded-pill"><i
                                class="bi bi-trash me-1"></i> Annuler</button>
                        <button type="button" class="btn btn-outline-secondary btn-sm rounded-pill"><i
                                class="bi bi-download me-1"></i> Facture</button>
                    </div>
                </div>

                <div class="row g-4">
                    <!-- Left Column: Order Info -->
                    <div class="col-lg-8">
                        <div class="card border-0 shadow-sm rounded-4 mb-4">
                            <div class="card-header bg-white border-0 py-3 rounded-top-4">
                                <h5 class="mb-0 fw-bold"><i class="bi bi-info-circle me-2 text-primary"></i>Informations
                                </h5>
                            </div>
                            <div class="card-body">
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <h6 class="text-uppercase text-muted small fw-bold mb-3">Expéditeur</h6>
                                        <div class="d-flex align-items-start gap-2">
                                            <i class="bi bi-geo-alt-fill text-danger mt-1"></i>
                                            <div>
                                                <p class="mb-0 fw-bold">
    <?= htmlspecialchars($_SESSION['user']['name']) ?>
</p>
<p class="mb-0 text-muted small">
    <?= htmlspecialchars($order->getPickupAddress()) ?>
</p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="text-uppercase text-muted small fw-bold mb-3">Destinataire</h6>
                                        <div class="d-flex align-items-start gap-2">
                                            <i class="bi bi-geo-alt-fill text-success mt-1"></i>
                                            <div>
                                                <p class="mb-0 fw-bold">Destinataire</p>
<p class="mb-0 text-muted small">
    <?= htmlspecialchars($order->getDeliveryAddress()) ?>
</p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <hr class="my-0">
                                    </div>
                                    <div class="col-md-4">
                                        <h6 class="text-uppercase text-muted small fw-bold">Type Colis</h6>
                                        <p class="fw-medium"><i class="bi bi-box me-1"></i>Moyen (5kg)</p>
                                    </div>
                                    <div class="col-md-4">
                                        <h6 class="text-uppercase text-muted small fw-bold">Prix Estimé</h6>
<p class="fw-medium text-primary fs-5">
    <?= number_format($order->getPrice(), 2) ?> €
</p>
                                    </div>
                                    <div class="col-md-4">
                                        <h6 class="text-uppercase text-muted small fw-bold">Distance</h6>
                                        <p class="fw-medium">4.5 km</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Map Placeholder -->
                        <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                            <div class="bg-light d-flex align-items-center justify-content-center text-muted"
                                style="height: 300px;">
                                <div class="text-center">
                                    <i class="bi bi-map fs-1 opacity-50"></i>
                                    <p class="mb-0">Carte Google Maps</p>
                                    <small>(Visualisation du trajet)</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column: Timeline & Offers -->
                    <div class="col-lg-4">
                        <!-- Offers Section (Only specific to status 'En attente') -->
                        <div class="card border-0 shadow-sm rounded-4 mb-4 border-start border-4 border-warning">
                            <div
                                class="card-header bg-white border-0 py-3 rounded-top-4 d-flex justify-content-between align-items-center">
                                <h5 class="mb-0 fw-bold text-dark">Offres Reçues</h5>
                                <span class="badge bg-danger rounded-pill">2</span>
                            </div>
                            <div class="list-group list-group-flush">
                                <div class="list-group-item p-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="bg-light rounded-circle p-1"><i class="bi bi-person-fill"></i>
                                            </div>
                                            <strong>Ahmed B.</strong>
                                        </div>
                                        <span
                                            class="badge bg-success bg-opacity-10 text-success fw-bold p-2 font-monospace">14.00€</span>
                                    </div>
                                    <div class="d-flex gap-2 mt-3">
                                        <button
                                            class="btn btn-sm btn-success flex-grow-1 rounded-pill fw-bold">Accepter</button>
                                        <button
                                            class="btn btn-sm btn-outline-danger flex-grow-1 rounded-pill">Refuser</button>
                                    </div>
                                </div>
                                <div class="list-group-item p-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="bg-light rounded-circle p-1"><i class="bi bi-person-fill"></i>
                                            </div>
                                            <strong>Sophie L.</strong>
                                        </div>
                                        <span
                                            class="badge bg-secondary bg-opacity-10 text-dark fw-bold p-2 font-monospace">16.50€</span>
                                    </div>
                                    <div class="d-flex gap-2 mt-3">
                                        <button
                                            class="btn btn-sm btn-success flex-grow-1 rounded-pill fw-bold">Accepter</button>
                                        <button
                                            class="btn btn-sm btn-outline-danger flex-grow-1 rounded-pill">Refuser</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Timeline -->
                        <div class="card border-0 shadow-sm rounded-4">
                            <div class="card-header bg-white border-0 py-3 rounded-top-4">
                                <h5 class="mb-0 fw-bold">Suivi</h5>
                            </div>
                            <div class="card-body">
                                <div class="timeline-item completed">
                                    <h6 class="mb-1 fw-bold">Commande Créée</h6>
                                    <small class="text-muted">02 Jan 10:30</small>
                                </div>
                                <div class="timeline-item">
                                    <h6 class="mb-1 fw-bold">Livreur Assigné</h6>
                                    <small class="text-muted">En attente...</small>
                                </div>
                                <div class="timeline-item">
                                    <h6 class="mb-1 fw-bold">En cours de livraison</h6>
                                    <small class="text-muted">--</small>
                                </div>
                                <div class="timeline-item">
                                    <h6 class="mb-1 fw-bold">Livré</h6>
                                    <small class="text-muted">--</small>
                                </div>
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