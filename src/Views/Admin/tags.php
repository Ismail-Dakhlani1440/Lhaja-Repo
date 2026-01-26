<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>CareerLink - Gestion des Tags</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #eef6f5;
            min-height: 100vh;
            font-family: 'Arial', sans-serif;
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

        /* CARD */
        .card {
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            padding: 30px;
            background: white;
        }

        /* Form Ajouter */
        .add-tag {
            display: flex;
            gap: 10px;
            margin-bottom: 30px;
        }

        .add-tag input {
            border-radius: 50px;
            padding: 10px 20px;
            border: 1px solid #ccc;
            flex: 1;
            transition: all 0.3s;
        }

        .add-tag input:focus {
            outline: none;
            border-color: #4DC2C3;
            box-shadow: 0 0 10px rgba(77, 194, 195, 0.3);
        }

        .btn-main {
            background: #4DC2C3;
            border: none;
            color: white;
            padding: 10px 25px;
            border-radius: 50px;
            transition: all 0.3s;
        }

        .btn-main:hover {
            background: #3aa9aa;
        }

        /* Table */
        .table thead {
            background: #f0fdfd;
            border-bottom: none;
        }

        .table th, .table td {
            vertical-align: middle;
        }

        .table tr:hover {
            background: #f5fefa;
        }

        .btn-sm {
            border-radius: 50px;
            padding: 5px 15px;
            font-size: 0.85rem;
        }

        .btn-warning {
            background: #facc15;
            border: none;
            color: white;
        }

        .btn-warning:hover {
            background: #eab308;
        }

        .btn-danger {
            background: #ef4444;
            border: none;
            color: white;
        }

        .btn-danger:hover {
            background: #dc2626;
        }

        @media (max-width: 768px) {
            .add-tag {
                flex-direction: column;
            }
            .add-tag input, .add-tag button {
                width: 100%;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <!-- HEADER -->
    <div class="header">
        <h2>Gestion des Tags</h2>
    </div>

    <!-- Back to Dashboard -->
    <a href="\dashboard" class="btn btn-outline-secondary back-btn">← Retour au Dashboard</a>

    <!-- CARD -->
    <div class="card">

        <!-- Ajouter un tag -->
        <div class="add-tag">
            <input type="text" placeholder="Nouveau tag (ex: PHP, Marketing)">
            <button class="btn btn-main">Ajouter</button>
        </div>

        <!-- Tableau des tags -->
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th>Tag</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>PHP</td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-warning">Modifier</button>
                            <button class="btn btn-sm btn-danger">Supprimer</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Marketing Digital</td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-warning">Modifier</button>
                            <button class="btn btn-sm btn-danger">Supprimer</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Gestion de projet</td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-warning">Modifier</button>
                            <button class="btn btn-sm btn-danger">Supprimer</button>
                        </td>
                    </tr>
                    <tr>
                        <td>React</td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-warning">Modifier</button>
                            <button class="btn btn-sm btn-danger">Supprimer</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>

</body>
</html>
