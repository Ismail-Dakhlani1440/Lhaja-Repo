<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Dashboard Candidat - CareerLink</title>
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

        .filters {
            margin-bottom: 30px;
        }

        .filters input,
        .filters select {
            margin-right: 10px;
            margin-bottom: 10px;
            border-radius: 20px;
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

        .btn-main {
            background: #4DC2C3;
            border: none;
            color: white;
            border-radius: 20px;
        }

        .btn-main:hover {
            background: #3aa9aa;
        }
    </style>
</head>

<body>
    <div class="container">

        <!-- Header -->
        <div class="dashboard-header mb-4">
            <h2>Dashboard Candidat</h2>
            <p>Trouvez votre emploi idéal et postulez directement aux offres</p>
        </div>

        <!-- Filtres -->
        <div class="filters">
            <input type="text" class="form-control d-inline-block w-auto" placeholder="Recherche mots-clés">
            <select class="form-select d-inline-block w-auto">
                <option selected>Toutes les catégories</option>
                <option value="tech">Technologie</option>
                <option value="marketing">Marketing</option>
                <option value="finance">Finance</option>
            </select>
            <select class="form-select d-inline-block w-auto">
                <option selected>Tous les tags</option>
                <option value="php">PHP</option>
                <option value="react">React</option>
                <option value="excel">Excel</option>
            </select>
            <a href="\JobsRecommandés" class="btn btn-main">Jobs Recommandés</a>
        </div>

        <!-- Offres -->
        <div class="row">
            <div class="col-md-4">
                <div class="offer-card">
                    <h5>Développeur Front-End</h5>
                    <p><strong>Salaire :</strong> 14 000 MAD / mois</p>
                    <p><strong>Skills :</strong> HTML, CSS, React</p>
                    <p><strong>Lieu :</strong> Casablanca</p>
                    <div class="mb-2">
                        <span class="badge-category">Technologie</span>
                        <span class="badge-tag">React</span>
                        <span class="badge-tag">CSS</span>
                    </div>
                    <button class="btn btn-main w-100">Postuler</button>
                </div>
            </div>

            <div class="col-md-4">
                <div class="offer-card">
                    <h5>Data Analyst</h5>
                    <p><strong>Salaire :</strong> 16 000 MAD / mois</p>
                    <p><strong>Skills :</strong> Excel, SQL, PowerBI</p>
                    <p><strong>Lieu :</strong> Rabat</p>
                    <div class="mb-2">
                        <span class="badge-category">Finance</span>
                        <span class="badge-tag">SQL</span>
                        <span class="badge-tag">PowerBI</span>
                    </div>
                    <button class="btn btn-main w-100">Postuler</button>
                </div>
            </div>

            <div class="col-md-4">
                <div class="offer-card">
                    <h5>Chargé de Marketing Digital</h5>
                    <p><strong>Salaire :</strong> 13 000 MAD / mois</p>
                    <p><strong>Skills :</strong> SEO, Google Ads, Community Management</p>
                    <p><strong>Lieu :</strong> Marrakech</p>
                    <div class="mb-2">
                        <span class="badge-category">Marketing</span>
                        <span class="badge-tag">SEO</span>
                        <span class="badge-tag">Ads</span>
                    </div>
                    <button class="btn btn-main w-100">Postuler</button>
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
