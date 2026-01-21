<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>CareerLink - Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f5f9f9;
            min-height: 100vh;
        }

        .sidebar {
            background: linear-gradient(135deg, #4DC2C3, #98CA43);
            min-height: 100vh;
            color: white;
            padding: 20px;
        }

        .sidebar h3 {
            font-weight: bold;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .sidebar a:hover {
            background: rgba(255,255,255,0.2);
        }

        .card {
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .btn-main {
            background: #4DC2C3;
            border: none;
            color: white;
        }

        .btn-main:hover {
            background: #3aa9aa;
        }

        .stat-box {
            background: linear-gradient(135deg, #4DC2C3, #98CA43);
            color: white;
            border-radius: 15px;
            padding: 20px;
        }
    </style>
</head>

<body>

<div class="container-fluid">
    <div class="row">

        <!-- SIDEBAR -->
        <div class="col-md-3 sidebar">
            <h3 class="mb-4">CareerLink Admin</h3>

            <a href="#stats">📊 Tableau de bord</a>
            <a href="/categories">📁 Catégories</a>
            <a href="/tags">🏷️ Tags</a>
            <a href="/offres">📄 Offres d'emploi</a>
            <a href="/login">🚪 Déconnexion</a>
        </div>

        <!-- MAIN CONTENT -->
        <div class="col-md-9 p-4">

            <!-- STATISTIQUES -->
            <section id="stats">
                <h3 class="mb-4">Tableau de bord</h3>

                <div class="row mb-4">
                    <div class="col-md-4">
                        <div class="stat-box">
                            <h5>Offres - Technologie</h5>
                            <h2>42</h2>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="stat-box">
                            <h5>Offres - Marketing</h5>
                            <h2>28</h2>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="stat-box">
                            <h5>Offres - Finance</h5>
                            <h2>19</h2>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="card p-3">
                            <h5>🏷️ Tags les plus utilisés</h5>
                            <ul class="list-group mt-3">
                                <li class="list-group-item">PHP (35)</li>
                                <li class="list-group-item">React (30)</li>
                                <li class="list-group-item">Marketing Digital (25)</li>
                                <li class="list-group-item">Gestion de projet (18)</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card p-3">
                            <h5>🏆 Recruteurs les plus actifs</h5>
                            <ul class="list-group mt-3">
                                <li class="list-group-item">TechCorp (12 offres)</li>
                                <li class="list-group-item">DigitalPro (9 offres)</li>
                                <li class="list-group-item">FinPlus (7 offres)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

</body>
</html>
