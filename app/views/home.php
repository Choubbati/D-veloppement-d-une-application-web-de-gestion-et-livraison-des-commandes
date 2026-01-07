<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delevri - Livraison Rapide et Sécurisée</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand text-primary fs-3" href="index.html">
                <i class="bi bi-box-seam-fill me-2"></i>Delevri
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center gap-2">
                    <li class="nav-item">
                        <a class="nav-link fw-medium" href="#features">Fonctionnalités</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium" href="/test_delevri/public/index.php?route=login">Se connecter</a>

                    </li>
                    <li class="nav-item">
<a class="btn btn-primary px-4 rounded-pill fw-bold" href="/test_delevri/public/index.php?route=register">S'inscrire</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero-section d-flex align-items-center min-vh-100 pt-5 mt-5 mt-lg-0">
        <div class="container">
            <div class="row align-items-center py-5">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="display-3 fw-bold mb-4">La livraison simplifiée, <br>pour <span class="text-warning">tout le monde</span>.</h1>
                    <p class="lead mb-5 opacity-90">Expédiez vos colis en toute sécurité ou devenez livreur pour arrondir vos fins de mois. Une plateforme moderne, rapide et fiable.</p>
                    <div class="d-flex gap-3 justify-content-center justify-content-lg-start">
                        <a href="register.html" class="btn btn-light btn-lg px-5 rounded-pill text-primary fw-bold shadow-sm">Commencer</a>
                        <a href="#how-it-works" class="btn btn-outline-light btn-lg px-4 rounded-pill fw-bold">En savoir plus</a>
                    </div>
                </div>
                <!-- Placeholder Image using Bootstrap classes/Icons as requested (no externals unless needed, but design spec mentioned vector. Using a large icon composition for now to stay local/pure) -->
                <div class="col-lg-6 d-none d-lg-block text-center">
                   <div class="position-relative">
                        <i class="bi bi-truck text-white opacity-25" style="font-size: 20rem;"></i>
                        <div class="card position-absolute top-50 start-50 translate-middle shadow-lg border-0 p-3 rounded-4" style="min-width: 250px;">
                            <div class="d-flex align-items-center gap-3">
                                <div class="bg-primary bg-opacity-10 p-3 rounded-circle text-primary">
                                    <i class="bi bi-box-fill fs-3"></i>
                                </div>
                                <div class="text-start">
                                    <h6 class="mb-0 fw-bold text-dark">Colis #8542</h6>
                                    <small class="text-success fw-bold"><i class="bi bi-check-circle-fill me-1"></i>Livré avec succès</small>
                                </div>
                            </div>
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Features Section -->
    <section id="features" class="py-6 bg-white section-padding" style="padding: 80px 0;">
        <div class="container">
            <div class="text-center mb-5">
                <h6 class="text-primary text-uppercase fw-bold letter-spacing-2">Pourquoi nous choisir</h6>
                <h2 class="display-6 fw-bold">Une expérience de livraison premium</h2>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm feature-card bg-light p-4 rounded-4">
                        <div class="card-body text-center">
                            <div class="bg-white p-3 rounded-circle d-inline-block shadow-sm mb-4 text-primary">
                                <i class="bi bi-speedometer2 fs-2"></i>
                            </div>
                            <h4 class="card-title fw-bold mb-3">Rapidité Éclair</h4>
                            <p class="card-text text-muted">Des livreurs disponibles 24/7 pour prendre en charge vos demandes en quelques minutes.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm feature-card bg-light p-4 rounded-4">
                        <div class="card-body text-center">
                            <div class="bg-white p-3 rounded-circle d-inline-block shadow-sm mb-4 text-primary">
                                <i class="bi bi-shield-check fs-2"></i>
                            </div>
                            <h4 class="card-title fw-bold mb-3">100% Sécurisé</h4>
                            <p class="card-text text-muted">Suivi en temps réel et validation par code unique pour garantir la bonne réception.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm feature-card bg-light p-4 rounded-4">
                        <div class="card-body text-center">
                            <div class="bg-white p-3 rounded-circle d-inline-block shadow-sm mb-4 text-primary">
                                <i class="bi bi-wallet2 fs-2"></i>
                            </div>
                            <h4 class="card-title fw-bold mb-3">Prix Transparents</h4>
                            <p class="card-text text-muted">Fixez votre prix ou recevez des offres compétitives. Pas de frais cachés.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-6 bg-dark text-white text-center" style="padding: 80px 0;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-4">Prêt à expédier votre premier colis ?</h2>
                    <p class="lead mb-5 text-secondary">Rejoignez des milliers de clients satisfaits qui utilisent Delevri chaque jour.</p>
                    <a href="register.html" class="btn btn-primary btn-lg px-5 rounded-pill fw-bold">Créer un compte gratuitement</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black text-white py-4 mt-auto">
        <div class="container text-center text-md-start">
            <div class="row align-items-center">
                <div class="col-md-6 mb-3 mb-md-0">
                    <p class="mb-0 text-secondary">&copy; 2024 Delevri Inc. Tous droits réservés.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="#" class="text-secondary text-decoration-none me-3">Confidentialité</a>
                    <a href="#" class="text-secondary text-decoration-none me-3">Conditions</a>
                    <a href="#" class="text-secondary text-decoration-none">Support</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>
