<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Candidatures - CareerLink</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #4DC2C3, #98CA43);
            font-family: Arial, sans-serif;
            padding: 40px 0;
        }

        .page-header {
            text-align: center;
            margin-bottom: 30px;
            color: white;
        }

        .page-header h2 {
            font-weight: bold;
        }

        .table-container {
            background: white;
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        .btn-main {
            background: #4DC2C3;
            border: none;
            color: white;
        }

        .btn-main:hover {
            background: #3aa9aa;
        }

        .btn-refuse {
            background: #FF6B6B;
            color: white;
            border: none;
        }

        .btn-refuse:hover {
            background: #e25555;
        }
    </style>
</head>

<body>
    <div class="container">

        <div class="page-header">
            <h2>Candidatures Reçues</h2>
            <p>Gérez les candidats postulant à vos offres</p>
            <a href="/dashboardRecruteur" class="btn btn-secondary btn-back">← Retour au Dashboard</a>
        </div>

        <div class="table-container">
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nom du candidat</th>
                        <th>Poste postulé</th>
                        <th>Email</th>
                        <th>Téléphone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Saiss Mouna</td>
                        <td>Développeur Full Stack</td>
                        <td>mouna@example.com</td>
                        <td>06 12 34 56 78</td>
                        <td>
                            <button class="btn btn-main btn-sm">Accepter</button>
                            <button class="btn btn-refuse btn-sm">Refuser</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Ahmed Ali</td>
                        <td>Chef de Projet Marketing</td>
                        <td>ahmed@example.com</td>
                        <td>06 87 65 43 21</td>
                        <td>
                            <button class="btn btn-main btn-sm">Accepter</button>
                            <button class="btn btn-refuse btn-sm">Refuser</button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Laila Ben</td>
                        <td>Analyste Financier</td>
                        <td>laila@example.com</td>
                        <td>06 98 76 54 32</td>
                        <td>
                            <button class="btn btn-main btn-sm">Accepter</button>
                            <button class="btn btn-refuse btn-sm">Refuser</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br>

    </div>
</body>

</html>