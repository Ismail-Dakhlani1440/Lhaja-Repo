<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>CareerLink - Gestion des Offres</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #eef6f5;
            font-family: 'Arial', sans-serif;
            min-height: 100vh;
        }

        /* HEADER */
        .header {
            background: linear-gradient(135deg, #4DC2C3, #98CA43);
            color: white;
            padding: 30px 20px;
            border-radius: 0 0 25px 25px;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 40px;
        }

        .header h2 {
            font-weight: 800;
            font-size: 2.2rem;
        }

        /* Back button */
        .back-btn {
            margin-bottom: 25px;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            font-weight: 500;
        }

        /* Search & Filters */
        .search-filter {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            margin-bottom: 30px;
        }

        .search-filter input,
        .search-filter select {
            flex: 1;
            padding: 10px 15px;
            border-radius: 50px;
            border: 1px solid #ccc;
            transition: all 0.3s;
        }

        .search-filter input:focus,
        .search-filter select:focus {
            outline: none;
            border-color: #4DC2C3;
            box-shadow: 0 0 10px rgba(77, 194, 195, 0.3);
        }

        .search-filter button {
            padding: 10px 25px;
            border-radius: 50px;
            border: none;
            background: #4DC2C3;
            color: white;
            transition: all 0.3s;
        }

        .search-filter button:hover {
            background: #3aa9aa;
        }

        /* JOB CARDS */
        .job-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            padding: 25px;
            margin-bottom: 20px;
            transition: transform 0.3s;
        }

        .job-card:hover {
            transform: translateY(-5px);
        }

        .job-card h5 {
            font-weight: bold;
            color: #4DC2C3;
        }

        .job-details {
            margin-top: 10px;
        }

        .job-details p {
            margin-bottom: 5px;
        }

        .btn-card {
            margin-top: 10px;
            display: flex;
            gap: 10px;
        }

        .btn-card .btn-warning {
            background: #facc15;
            border: none;
            color: white;
            border-radius: 50px;
            transition: all 0.3s;
        }

        .btn-card .btn-warning:hover {
            background: #eab308;
        }

        .btn-card .btn-danger {
            background: #ef4444;
            border: none;
            color: white;
            border-radius: 50px;
            transition: all 0.3s;
        }

        .btn-card .btn-danger:hover {
            background: #dc2626;
        }

        @media (max-width: 768px) {
            .search-filter {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <!-- HEADER -->
    <div class="header">
        <h2>Gestion des Offres d’Emploi</h2>
    </div>

    <!-- Back to Dashboard -->
    <a href="\dashboard" class="btn btn-outline-secondary back-btn">← Retour au Dashboard</a>

    <!-- Search & Filters -->
    <div class="search-filter">
        <input type="text" placeholder="Rechercher par mot-clé">
        <select>
            <option value="">Toutes les catégories</option>
            <option value="tech">Technologie</option>
            <option value="marketing">Marketing</option>
            <option value="finance">Finance</option>
        </select>
        <select>
            <option value="">Tous les tags</option>
            <option value="php">PHP</option>
            <option value="marketing-digital">Marketing Digital</option>
            <option value="gestion-projet">Gestion de projet</option>
        </select>
        <button>Filtrer</button>
    </div>

    <!-- JOB CARDS -->
   <div class="job-cards row g-4">

    <div class="col-md-4">
        <div class="job-card">
            <h5>Développeur PHP</h5>
            <div class="job-details">
                <p><strong>Salaire :</strong> 12 000 MAD</p>
                <p><strong>Qualifications :</strong> PHP, MySQL, Laravel</p>
                <p><strong>Lieu :</strong> Casablanca</p>
            </div>
            <div class="btn-card">
                <button class="btn btn-warning">Modifier</button>
                <button class="btn btn-danger">Archiver</button>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="job-card">
            <h5>Marketing Digital</h5>
            <div class="job-details">
                <p><strong>Salaire :</strong> 10 000 MAD</p>
                <p><strong>Qualifications :</strong> SEO, SEM, Réseaux Sociaux</p>
                <p><strong>Lieu :</strong> Marrakech</p>
            </div>
            <div class="btn-card">
                <button class="btn btn-warning">Modifier</button>
                <button class="btn btn-danger">Archiver</button>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="job-card">
            <h5>Chef de Projet</h5>
            <div class="job-details">
                <p><strong>Salaire :</strong> 15 000 MAD</p>
                <p><strong>Qualifications :</strong> Gestion de projet, Agile</p>
                <p><strong>Lieu :</strong> Rabat</p>
            </div>
            <div class="btn-card">
                <button class="btn btn-warning">Modifier</button>
                <button class="btn btn-danger">Archiver</button>
            </div>
        </div>
    </div>

</div>
</div>

</body>
</html>
