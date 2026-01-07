
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nouvelle commande | Delevri</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(120deg, #f8f9fa, #eef2ff);
            min-height: 100vh;
        }
        .order-box {
            max-width: 720px;
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 20px 40px rgba(0,0,0,.08);
        }
        .step {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: #0d6efd;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }
    </style>
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
    

    

<div class="container d-flex align-items-center justify-content-center py-5">

    <div class="order-box p-5 w-100">

        <!-- Header -->
        <div class="mb-5 text-center">
            <h2 class="fw-bold mb-2">Créer une commande</h2>
            <p class="text-muted mb-0">
                Décrivez votre besoin, les livreurs vous feront des offres.
            </p>
        </div>

        <form method="POST" action="index.php?route=client/store-order">

            <!-- Step 1 -->
            <div class="mb-4">
                <div class="d-flex align-items-center mb-2">
                    <div class="step me-3">1</div>
                    <h5 class="mb-0 fw-semibold">Titre de la commande</h5>
                </div>

                <input
                    type="text"
                    name="title"
                    class="form-control form-control-lg"
                    placeholder="Ex : Livraison colis fragile"
                    required
                >
            </div>

            <!-- Step 2 -->
<!-- Step 2 -->
<div class="mb-5">
    <div class="d-flex align-items-center mb-2">
        <div class="step me-3">2</div>
        <h5 class="mb-0 fw-semibold">Détails de la livraison</h5>
    </div>
    <div class="mb-3">
    <label class="form-label">Prix (€)</label>
    <input 
        type="number" 
        name="price" 
        class="form-control" 
        placeholder="Ex : 15.00" 
        step="0.01" 
        min="0"
        required
    >
</div>


    <div class="mb-3">
        <label class="form-label">Adresse de départ</label>
        <input type="text" name="pickup_address" class="form-control" placeholder="Ex : 10 Rue de Paris, Lyon" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Destination</label>
        <input type="text" name="delivery_address" class="form-control" placeholder="Ex : 15 Avenue de Marseille, Paris" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Type de colis</label>
        <select name="package_type" class="form-select" required>
            <option value="">Choisir le type</option>
            <option value="normal">Normal</option>
            <option value="fragile">Fragile</option>
            <option value="urgent">Urgent / Express</option>
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Instructions supplémentaires</label>
        <textarea name="instructions" class="form-control" rows="3" placeholder="Ex : Manipuler avec soin, garder au frais..."></textarea>
    </div>
</div>


            <!-- Footer -->
            <div class="d-flex justify-content-between align-items-center">
                <a href="index.php?route=client/dashboard" class="text-decoration-none text-muted">
                    ← Annuler
                </a>

                <button type="submit" class="btn btn-primary btn-lg px-5 rounded-pill fw-bold">
                    Publier la commande
                </button>
            </div>

        </form>

    </div>

</div>

</body>
</html>
