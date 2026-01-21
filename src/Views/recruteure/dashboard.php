<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Dashboard Recruteur - CareerLink</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #4DC2C3, #98CA43);
            font-family: Arial, sans-serif;
            padding: 40px 0;
        }

        .dashboard-header {
            text-align: center;
            margin-bottom: 30px;
            color: white;
        }

        .dashboard-header h2 {
            font-weight: bold;
            font-size: 2.5rem;
        }

        .dashboard-header p {
            font-size: 1.1rem;
            color: #e0f7f5;
        }

        .btn-main {
            background: #4DC2C3;
            border: none;
            color: white;
        }

        .btn-main:hover {
            background: #3aa9aa;
        }

        .offer-card {
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            padding: 20px;
            margin-bottom: 30px;
            background: white;
        }

        .offer-card:hover {
            transform: translateY(-5px);
        }

        .offer-card h5 {
            color: #4DC2C3;
            font-weight: bold;
        }

        .badge-category {
            background: #3aa9aa;
            color: white;
            margin-right: 5px;
            border-radius: 10px;
            padding: 3px 8px;
        }

        .badge-tag {
            background: #98CA43;
            color: white;
            margin-right: 5px;
            border-radius: 10px;
            padding: 3px 8px;
        }

        .card-buttons button {
            margin-right: 10px;
            border-radius: 20px;
        }

        .top-bar {
            margin-bottom: 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .top-bar h3 {
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">

        <!-- Titre Dashboard -->
        <div class="dashboard-header mb-4">
            <h2>Dashboard Recruteur</h2>
            <p>Gérez vos offres d'emploi et consultez les candidatures</p>
        </div>

        <!-- Header et bouton Ajouter -->
        <div class="top-bar">
            <h3>Mes Offres d'emploi</h3>
            <div>
                <button class="btn btn-main me-2" data-bs-toggle="modal" data-bs-target="#addOfferModal">+ Ajouter une Offre</button>
                <a href="/candidatures" class="btn btn-secondary">Candidatures Reçues</a>
            </div>
        </div>

        <!-- Offres -->
        <div class="row">
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
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addOfferModalLabel">Ajouter une nouvelle offre</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
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
                        <button type="submit" class="btn btn-main w-100">Ajouter Offre</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
