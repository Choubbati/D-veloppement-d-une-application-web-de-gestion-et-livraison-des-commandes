

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - Delevri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
</head>

<body class="bg-light d-flex align-items-center justify-content-center min-vh-100 py-5">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-5">
                <div class="card shadow border-0 rounded-4">
                    <div class="card-body p-5">
                        <div class="text-center mb-4">
                            <h1 class="h3 fw-bold text-primary mb-2">Créer un compte</h1>
                            <p class="text-muted">Rejoignez Delevri en quelques minutes.</p>
                        </div>

<form action="index.php?route=register" method="POST">
                            <div class="row g-2 mb-3">

                                <div class="col-6">
                                    <div class="form-floating">
                                        <input type="text" name="name" class="form-control" id="lastname" placeholder="Nom">
                                        <label for="lastname">Nom</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                                <label for="email">Adresse Email</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="tel" name="phone" class="form-control"  id="phone" placeholder="Numéro de téléphone">
                                <label for="phone">Téléphone</label>
                            </div>

                            <div class="form-floating mb-3">
                                <select class="form-select" name="role" id="role" aria-label="Sélectionner votre rôle">
                                    <option value="client" selected>Client (J'envoie des colis)</option>
                                    <option value="livreur">Livreur (Je veux livrer)</option>
                                </select>
                                <label for="role">Je suis...</label>
                            </div>

                            <div class="form-floating mb-4">
                                <input type="password" name="password" class="form-control" id="password" placeholder="Mot de passe">
                                <label for="password">Mot de passe</label>
                            </div>

                            <div class="form-check mb-4">
                                <input class="form-check-input"  type="checkbox" value="" id="terms" required>
                                <label class="form-check-label text-secondary small" for="terms">
                                    J'accepte les <a href="#" class="text-decoration-none">Conditions d'utilisation</a>
                                    et la <a href="#" class="text-decoration-none">Politique de confidentialité</a>.
                                </label>
                            </div>

                            <button type="submit" name="submit" class="btn btn-primary w-100 py-2 rounded-3 fw-bold shadow-sm">Créer
                                mon compte</button>
                        </form>

                        <div class="mt-4 text-center">
                            <p class="text-muted small">Vous avez déjà un compte ?         <a href="index.php?route=login" class="fw-bold text-decoration-none">Se connecter</a>
</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>