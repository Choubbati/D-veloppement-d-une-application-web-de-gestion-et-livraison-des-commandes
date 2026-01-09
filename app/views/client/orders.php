<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Commandes - Delevri</title>
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
                            <a class="nav-link text-dark" href="index.php?route=client/dashboard">
                                <i class="bi bi-speedometer2 me-2"></i> Tableau de bord
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="index.php?route=client/create-order">
                                <i class="bi bi-plus-circle me-2"></i> Nouvelle Commande
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active rounded-2 bg-primary-subtle text-primary fw-bold"
                                href="index.php?route=client/orders">
                                <i class="bi bi-box-seam me-2"></i> Mes Commandes
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4 bg-light">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-4">
                    <h1 class="h2 fw-bold text-dark">Mes Commandes</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary active">Tout</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">En cours</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Terminé</button>
                        </div>
                    </div>
                </div>

                <div class="card border-0 shadow-sm rounded-4">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle mb-0">
                                <thead class="bg-light">
                                    <tr>
                                        <th scope="col" class="ps-4">#ID</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Départ</th>
                                        <th scope="col">Arrivée</th>
                                        
                                        <th scope="col">Statut</th>
                                        <th scope="col" class="text-end pe-4">Actions</th>
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
                                        <td class="ps-4 fw-medium"><?= $order->getId() ?></td>
                                        <td><?= date('d/m/Y', strtotime($order->getCreatedAt())) ?></td>
                                        <td><?= htmlspecialchars($order->getPickupAddress()) ?></td>
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
                                        <td class="text-end pe-4">
    <?php if($order->getStatus()==='pending'):?>
<a href="index.php?route=client/delete-order&id=<?= $order->getId() ?>"
   class="btn btn-sm btn-light rounded-circle text-danger"
   title="Supprimer"
   onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette commande ?');">
    <i class="bi bi-trash"></i>
</a>
<?php endif?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                            </tbody>

                            </table>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <nav aria-label="Page navigation" class="mt-4">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link border-0 rounded-start-pill" href="#" tabindex="-1">Précédent</a>
                        </li>
                        <li class="page-item active"><a class="page-link border-0 rounded-circle mx-1" href="#">1</a>
                        </li>
                        <li class="page-item"><a class="page-link border-0 rounded-circle mx-1 text-dark" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link border-0 rounded-circle mx-1 text-dark" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link border-0 rounded-end-pill text-dark" href="#">Suivant</a>
                        </li>
                    </ul>
                </nav>

            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/scripts.js"></script>
</body>

</html>