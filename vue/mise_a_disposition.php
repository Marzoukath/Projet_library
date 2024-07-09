<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande de Livre</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #58bdf7;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 7px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 500px;
        }
        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-container label {
            display: block;
            margin-bottom: 5px;
        }
        .form-container input[type="text"], .form-container input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #a3c7e7;
            border-radius: 3px;
        }
        .form-container input[type="submit"] {
            background-color: #0de93d;
            color: rgb(1, 2, 10);
            border: none;
            cursor: pointer;
        }
        .form-container input[type="submit"]:hover {
            background-color: #b2f5b5;
        }
        .form-container .message {
            text-align: center;
            margin-top: 20px;
            color: rgb(22, 223, 52);
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Mise à disposition d'un fichier</h2>
        <form id="requestForm" action="../controller/ask_for_file.php" method="post">
            <label for="matricule">Matricule:</label>
            <input type="text" id="matricule" name="matricule" placeholder="Entrez votre matricule"required>

            <label for="book">Description :</label>
            <input type="text" id="book" name="description" placeholder="Entrez le nom du fichier" required>
            <button type="submit">Envoyer la demande</button>
        </form>
        <div class="message" id="message"></div>
    </div>

    <!-- <script>
        document.getElementById('requestForm').addEventListener('submit', function(event) {
            event.preventDefault();
            // Ici, tu pourrais ajouter du code pour envoyer les données du formulaire à un serveur si nécessaire.

            // Affichage du message de confirmation
            document.getElementById('message').innerText = 'Requête enregistrée.';
        });
    </script> -->
</body>
</html>
