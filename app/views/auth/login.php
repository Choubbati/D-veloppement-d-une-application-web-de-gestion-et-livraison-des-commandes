<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Delevri</title>

    <!-- Bootstrap 5 -->
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
                            <h1 class="h3 fw-bold text-primary mb-2">Connexion</h1>
                            <p class="text-muted">Accédez à votre compte Delevri</p>
                        </div>

                        <!-- Message erreur -->


                        <form action="index.php?route=login" method="POST">

                            <div class="form-floating mb-3">
                                <input type="email" name="email" class="form-control" id="email"
                                    placeholder="name@example.com" required>
                                <label for="email">Adresse Email</label>
                            </div>

                            <div class="form-floating mb-4">
                                <input type="password" name="password" class="form-control" id="password"
                                    placeholder="Mot de passe" required>
                                <label for="password">Mot de passe</label>
                            </div>

                            <button type="submit"
                                class="btn btn-primary w-100 py-2 rounded-3 fw-bold shadow-sm">
                                Se connecter
                            </button>
                        </form>

                        <div class="mt-4 text-center">
                            <p class="text-muted small">
                                Pas encore de compte ?
                                <a href="index.php?route=register" class="fw-bold text-decoration-none">
                                    Créer un compte
                                </a>
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
