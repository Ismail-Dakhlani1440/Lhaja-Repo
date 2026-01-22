<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>CareerLink - Register</title>
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
            font-weight: bold;
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
            <div class="col-md-8">

                <div class="card p-4">

                    <!-- Bouton retour accueil -->
                    <div class="mb-3">
                        <a href="/home" class="btn btn-home">
                            Retour à l'accueil
                        </a>
                    </div>

                    <h3 class="text-center mb-4 form-title">Créer un compte CareerLink</h3>

                    <!-- Choix du rôle -->
                    <div class="mb-4">
                        <label class="form-label fw-bold">Je suis :</label>
                        <select class="form-select" id="roleSelect">
                            <option value="">-- Choisir un rôle --</option>
                            <option value="candidate">Candidat</option>
                            <option value="recruiter">Recruteur</option>
                        </select>
                    </div>

                    <!-- FORM CANDIDAT -->
                    <form id="candidateForm" style="display:none;" action="" method="post">
                        <h5 class="mb-3 text-success">Inscription Candidat</h5>

                        <div class="mb-3">
                            <input type="text"  name ="name" class="form-control" placeholder="Nom complet" required>
                        </div>

                        <div class="mb-3">
                            <input type="email" name ="email" class="form-control" placeholder="Email" required>
                        </div>

                        <div class="mb-3">
                            <input type="password" name ="password" class="form-control" placeholder="Mot de passe" required>
                        </div>

                        <div class="mb-3">
                            <input type="password" name ="confirm password" class="form-control" placeholder="Confirmation mot de passe" required>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <input type="text" name ="titre" class="form-control" placeholder="Titre professionnel">
                            </div>

                            <div class="col-md-6 mb-3">
                                <input type="text" name ="compétences" class="form-control" placeholder="Compétences (PHP, React...)">
                            </div>

                            <div class="col-md-6 mb-3">
                                <input type="number" name ="salaire" class="form-control" placeholder="Salaire minimum souhaité (MAD)">
                            </div>

                            <div class="col-md-6 mb-3">
                                <input type="text" name ="ville" class="form-control" placeholder="Ville">
                            </div>
                        </div>

                        <button type="submit" name ="candidat" class="btn btn-main text-white w-100 mt-3">
                            Créer mon compte candidat
                        </button>
                    </form>

                    <!-- FORM RECRUTEUR -->
                    <form id="recruiterForm" style="display:none;" action="" method="post">
                        <h5 class="mb-3 text-primary">Inscription Recruteur</h5>

                        <div class="mb-3">
                            <input type="text" name ="name" class="form-control" placeholder="Nom du recruteur" required>
                        </div>

                        <div class="mb-3">
                            <input type="email" name ="email"class="form-control" placeholder="Email professionnel" required>
                        </div>

                        <div class="mb-3">
                            <input type="password" name ="password" class="form-control" placeholder="Mot de passe" required>
                        </div>

                        <div class="mb-3">
                            <input type="password" name ="confirmpassword" class="form-control" placeholder="Confirmation mot de passe" required>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <input type="text" name ="nomentreprise" class="form-control" placeholder="Nom de l'entreprise" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" name ="categories"
                                    placeholder="Catégorie / Domaine de l'entreprise">
                            </div>

                            <div class="col-md-6 mb-3">
                                <input type="text" name ="ville" class="form-control" placeholder="Ville">
                            </div>
                        </div>

                        <button type="submit" name ="recruteur" class="btn btn-main text-white w-100 mt-3">
                            Créer mon compte recruteur
                        </button>
                    </form>

                </div>

            </div>
        </div>
    </div>

    <!-- Script -->
    <script>
        const roleSelect = document.getElementById("roleSelect");
        const candidateForm = document.getElementById("candidateForm");
        const recruiterForm = document.getElementById("recruiterForm");

        roleSelect.addEventListener("change", function () {
            if (this.value === "candidate") {
                candidateForm.style.display = "block";
                recruiterForm.style.display = "none";
            }
            else if (this.value === "recruiter") {
                recruiterForm.style.display = "block";
                candidateForm.style.display = "none";
            }
            else {
                candidateForm.style.display = "none";
                recruiterForm.style.display = "none";
            }
        });
    </script>

</body>
</html>
