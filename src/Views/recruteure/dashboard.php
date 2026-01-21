<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Dashboard Recruteur - CareerLink</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #4DC2C3, #98CA43);
            font-family: 'Poppins', sans-serif;
            padding: 40px 0;
        }

        .dashboard-header {
            text-align: center;
            margin-bottom: 40px;
            color: white;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            padding: 35px;
            border-radius: 25px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
        }

        .dashboard-header h2 {
            font-weight: 700;
            font-size: 2.2rem;
            /* réduit de 2.8rem à 2.2rem */
        }

        .dashboard-header p {
            font-size: 1rem;
            /* réduit de 1.1rem à 1rem */
            opacity: 0.9;
        }


        .top-bar {
            margin-bottom: 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
        }

        .btn-main {
            background: linear-gradient(135deg, #4DC2C3, #3aa9aa);
            border: none;
            color: white;
            border-radius: 30px;
            padding: 10px 22px;
            font-weight: 500;
            transition: 0.3s;
        }

        .btn-main:hover {
            background: linear-gradient(135deg, #3aa9aa, #2c8f90);
            transform: scale(1.05);
        }

        .btn-secondary {
            border-radius: 30px;
            padding: 10px 22px;
        }

        .offer-card {
            border-radius: 25px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
            transition: 0.3s ease;
            padding: 25px;
            margin-bottom: 30px;
            background: white;
            position: relative;
            overflow: hidden;
        }

        .offer-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 6px;
            background: linear-gradient(135deg, #4DC2C3, #98CA43);
        }

        .offer-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.25);
        }

        .offer-card h5 {
            color: #4DC2C3;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .offer-card p {
            margin-bottom: 6px;
            color: #555;
        }

        .badge-category {
            background: linear-gradient(135deg, #3aa9aa, #4DC2C3);
            color: white;
            margin-right: 5px;
            border-radius: 20px;
            padding: 6px 14px;
            font-size: 0.8rem;
        }

        .badge-tag {
            background: linear-gradient(135deg, #98CA43, #7fbf2f);
            color: white;
            margin-right: 5px;
            border-radius: 20px;
            padding: 6px 14px;
            font-size: 0.8rem;
        }

        .card-buttons {
            margin-top: 18px;
            display: flex;
            justify-content: space-between;
        }

        .card-buttons button {
            border-radius: 30px;
            padding: 6px 18px;
            font-size: 0.85rem;
        }

        .modal-content {
            border-radius: 25px;
        }

        .modal-header {
            background: linear-gradient(135deg, #4DC2C3, #98CA43);
            color: white;
            border-radius: 25px 25px 0 0;
        }

        .form-control,
        .form-select {
            border-radius: 30px;
            padding: 12px 20px;
        }

        .modal-title {
            font-weight: 600;
        }
    </style>
</head>

<body>

    <div class="container">

        <!-- Header -->
        <div class="dashboard-header">
            <h2>Dashboard Recruteur</h2>
            <p>Gérez vos offres d'emploi et consultez les candidatures</p>
        </div>

        <!-- Top Bar -->
        <div class="top-bar">
            <h3>Mes Offres d'emploi</h3>
            <div>
                <button class="btn btn-main me-2" data-bs-toggle="modal" data-bs-target="#addOfferModal">
                    + Ajouter une Offre
                </button>
                <a href="/candidatures" class="btn btn-secondary">Candidatures Reçues</a>
            </div>
        </div>

        <!-- Offres -->
        <div class="row">

            <!-- Offre 1 -->
            <div class="col-md-4">
                <div class="offer-card">
                    <h5>Développeur Full Stack</h5>
                    <p><strong>Salaire :</strong> 15 000 MAD / mois</p>
                    <p><strong>Skills :</strong> PHP, React, MySQL</p>
                    <p><strong>Lieu :</strong> Casablanca</p>

                    <div class="mb-2">
                        <span class="badge-category">Technologie</span>
                        <span class="badge-tag">PHP</span>
                        <span class="badge-tag">React</span>
                    </div>

                    <div class="card-buttons">
                        <button class="btn btn-main btn-sm">Modifier</button>
                        <button class="btn btn-secondary btn-sm">Supprimer</button>
                    </div>
                </div>
            </div>

            <!-- Offre 2 -->
            <div class="col-md-4">
                <div class="offer-card">
                    <h5>Analyste Financier</h5>
                    <p><strong>Salaire :</strong> 20 000 MAD / mois</p>
                    <p><strong>Skills :</strong> Finance, Excel, Reporting</p>
                    <p><strong>Lieu :</strong> Marrakech</p>

                    <div class="mb-2">
                        <span class="badge-category">Finance</span>
                        <span class="badge-tag">Excel</span>
                        <span class="badge-tag">Reporting</span>
                    </div>

                    <div class="card-buttons">
                        <button class="btn btn-main btn-sm">Modifier</button>
                        <button class="btn btn-secondary btn-sm">Supprimer</button>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- Modal Ajouter Offre -->
    <div class="modal fade" id="addOfferModal" tabindex="-1" aria-labelledby="addOfferModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="addOfferModalLabel">Ajouter une nouvelle offre</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Titre du poste" required>
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Skills requis (PHP, React...)" required>
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Salaire" required>
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Lieu" required>
                        </div>

                        <div class="mb-3">
                            <select class="form-select">
                                <option selected>Choisir une catégorie</option>
                                <option value="1">Technologie</option>
                                <option value="2">Marketing</option>
                                <option value="3">Finance</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Tags (séparés par des virgules)">
                        </div>

                        <button type="submit" class="btn btn-main w-100">
                            Ajouter Offre
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>