<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>CareerLink - Accueil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #4DC2C3, #98CA43);
            min-height: 100vh;
            font-family: Arial, sans-serif;
        }

        /* Navbar */
        .navbar {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 0 0 20px 20px;
        }

        /* Hero Section */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            color: white;
        }

        .hero-box {
            background: rgba(255,255,255,0.15);
            padding: 60px 40px;
            border-radius: 25px;
            backdrop-filter: blur(10px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        .hero h1 {
            font-weight: bold;
            font-size: 3rem;
        }

        .hero p {
            font-size: 1.2rem;
            margin-top: 15px;
        }

        /* Buttons */
        .btn-main {
            background: #4DC2C3;
            border: none;
            color: white;
            padding: 12px 30px;
            border-radius: 30px;
            font-weight: bold;
        }

        .btn-main:hover {
            background: #3aa9aa;
        }

        /* Footer */
        .footer {
            background: white;
            border-radius: 20px 20px 0 0;
            padding: 30px;
            text-align: center;
            margin-top: 50px;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="home.php">CareerLink</a>

            <div class="ms-auto">
                <a href="/login" class="btn btn-outline-secondary me-2">Connexion</a>
                <a href="/register" class="btn btn-main">S'inscrire</a>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <section class="hero">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-8 hero-box">

                    <h1>Votre carrière commence ici</h1>
                    <p>
                        Trouvez l'emploi idéal ou recrutez les meilleurs talents avec CareerLink
                    </p>

                    <div class="mt-4">
                        <a href="/login" class="btn btn-light me-3">
                            Je suis Candidat
                        </a>
                        <a href="/login" class="btn btn-main">
                            Je suis Recruteur
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <p class="mb-1">&copy; 2024 CareerLink - Tous droits réservés</p>
        <p>Construisez votre avenir professionnel avec nous</p>
    </footer>

</body>
</html>
