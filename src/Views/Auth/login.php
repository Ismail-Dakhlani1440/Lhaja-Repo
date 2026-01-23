<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>CareerLink - Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #4DC2C3, #98CA43);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card {
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        .form-title {
            font-weight: bold;
            color: #4DC2C3;
        }

        .btn-main {
            background: #4DC2C3;
            border: none;
        }

        .btn-main:hover {
            background: #3aa9aa;
        }

        .btn-home {
            border: 2px solid #4DC2C3;
            color: #4DC2C3;
            border-radius: 30px;
            padding: 10px 25px;
            text-decoration: none;
            font-weight: bold;
            display: inline-block;
            margin-top: 15px;
        }

        .btn-home:hover {
            background: #4DC2C3;
            color: white;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card p-4">
                    <h3 class="text-center mb-4 form-title">Connexion CareerLink</h3>

                    <form action ="" method="get" >

                        <div class="mb-3">
                            <input type="email"  name ="email" class="form-control" placeholder="Adresse email" required>
                        </div>

                        <div class="mb-3">
                            <input type="password" name ="password"class="form-control" placeholder="Mot de passe" required>
                        </div>

                        <button type="submit"  name ="submit" class="btn btn-main text-white w-100 mt-3">
                            Se connecter
                        </button>

                    </form>

                    <div class="text-center mt-4">
                        <p>Pas encore de compte ?
                            <a href="/register" class="text-decoration-none fw-bold" style="color:#4DC2C3;">
                                S'inscrire
                            </a>
                        </p>

                        <!-- Bouton retour accueil -->
                        <a href="home" class="btn-home">
                            ← Retour à l'accueil
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </div>

</body>

</html>
