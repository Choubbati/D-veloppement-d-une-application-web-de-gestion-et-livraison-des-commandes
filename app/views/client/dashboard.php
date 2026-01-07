<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Client - Delevri</title>
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
                        <li class="nav-item">
                            <a class="nav-link active rounded-2 bg-primary-subtle text-primary fw-bold"
                                href="index.php?route=client/dashboard">
                                <i class="bi bi-speedometer2 me-2"></i> Tableau de bord
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="index.php?route=client/create-order">
                                <i class="bi bi-plus-circle me-2"></i> Nouvelle Commande
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="index.php?route=client/orders">
                                <i class="bi bi-box-seam me-2"></i> Mes Commandes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">
                                <i class="bi bi-bell me-2"></i> Notifications <span
                                    class="badge bg-danger rounded-pill ms-2">2</span>
                            </a>
                        </li>
                    </ul>

                    <h6
                        class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase small">
                        <span>Compte</span>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">
                                <i class="bi bi-gear me-2"></i> Paramètres
                            </a>
                        </li>
                        <li class="nav-item d-lg-none">
                            <a class="nav-link text-danger" href="index.php?route=logout">
                                <i class="bi bi-box-arrow-right me-2"></i> Déconnexion
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
                        <a href="index.php?route=client/create-order" class="btn btn-primary shadow-sm rounded-pill px-4 fw-bold">
                            <i class="bi bi-plus-lg me-2"></i>Expédier un colis
                        </a>
                    </div>
                </div>

                <!-- Stats Cards -->
                <div class="row g-4 mb-4">
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm h-100 rounded-4">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h6 class="card-subtitle text-muted text-uppercase small fa-bold">En cours</h6>
                                    <div class="bg-warning bg-opacity-10 text-warning p-2 rounded-circle">
                                        <i class="bi bi-clock-history"></i>
                                    </div>
                                </div>
                                <h2 class="card-title fw-bold mb-0"><?= $pendingCount ?></h2>
                                <small class="text-secondary">Colis en transit ou attente</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm h-100 rounded-4">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h6 class="card-subtitle text-muted text-uppercase small fa-bold">Livrées</h6>
                                    <div class="bg-success bg-opacity-10 text-success p-2 rounded-circle">
                                        <i class="bi bi-check-lg"></i>
                                    </div>
                                </div>
                                <h2 class="card-title fw-bold mb-0"><?= $livreCount ?></h2>
                                <small class="text-secondary">Ce mois-ci</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm h-100 rounded-4">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h6 class="card-subtitle text-muted text-uppercase small fa-bold">Dépenses</h6>
                                    <div class="bg-primary bg-opacity-10 text-primary p-2 rounded-circle">
                                        <i class="bi bi-credit-card"></i>
                                    </div>
                                </div>
                                <h2 class="card-title fw-bold mb-0"><?= $priceCount ?>€</h2>
                                <small class="text-secondary">Total cumulé</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Orders Table -->
                <div class="card border-0 shadow-sm rounded-4">
                    <div
                        class="card-header bg-white border-0 py-3 rounded-top-4 d-flex justify-content-between align-items-center">
                        <h5 class="mb-0 fw-bold">Commandes Récentes</h5>
                        <a href="index.php?route=client/orders" class="btn btn-sm btn-outline-primary rounded-pill px-3">Tout voir</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="bg-light">
                                <tr>
                                    <th scope="col" class="ps-4">#ID</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Destination</th>
                                    <th scope="col">Statut</th>
                                    <th scope="col" class="text-end pe-4">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if (empty($orders)) : ?>
                                <tr>
                                    <td colspan="6" class="text-center text-muted py-4">
                                        Aucune commande trouvée
                                    </td>
                                </tr>
                            <?php else : ?>
                                <?php foreach ($orders as $order): ?>
                                    <tr>
                                        <td class="ps-4 fw-medium">CMD-<?= $order->getId() ?>GF</td>
                                        <td><?= date('d/m/Y', strtotime($order->getCreatedAt())) ?></td>
                                        <td><?= htmlspecialchars($order->getDeliveryAddress()) ?></td>
                                        
                                        <td>
                                        <?php 
                                            $status = $order->getStatus();
                                            if($status === 'pending') $badge = 'bg-warning text-dark';
                                            elseif($status === 'livrée') $badge = 'bg-success';
                                            else $badge = 'bg-primary text-white';
                                        ?>
                                        <span class="badge rounded-pill <?= $badge ?>"><?= htmlspecialchars($status) ?></span>
                                    </td>
                                        <td class="text-end pe-4 d-flex justify-content-end gap-2">

    <!-- View -->
    <a href="index.php?route=client/order-detail&id=<?= $order->getId() ?>"
       class="btn btn-sm btn-light rounded-circle text-primary"
       title="Voir">
        <i class="bi bi-chevron-right"></i>
    </a>

    <!-- Delete (ONLY if pending) -->
<a href="index.php?route=client/delete-order&id=<?= $order->getId() ?>"
   class="btn btn-sm btn-light rounded-circle text-danger"
   title="Supprimer"
   onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette commande ?');">
    <i class="bi bi-trash"></i>
</a>



</td>

                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
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