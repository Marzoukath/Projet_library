<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Files Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./vue/ajout_fichier.css">
</head>
<body>
    <header>
        <div style="display:flex;">
            <div class="header-container">
                <img src="image/logo_black.png" alt="Logo" class="logo">
            </div>
            <ul>
                <li>Accueil</li>
                <li>Ajouter un fichier</li>
                <li>Consulter un fichier</li>
                <li>Sign up</li>
                <li><i class="fa fa-key fa-10x" aria-hidden="true"></i> Log in</li>
            </ul>
        </div>
    </header>

    <div class="container">
        <div class="image-section">
            <img src="image/Pasted image.png" alt="Promotional Image">
            <div class="promo-text">
                <h2>Mettez les informations necessaires au fichier a ajouter</h2>
                <p>Remplir tout les champs</p>
            </div>
        </div>
        <div class="form-section">
            <h2>Add Files</h2>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="secteur">Secteur:</label>
                    <select id="secteur" name="secteur" required onchange="updateFiliereOptions()">
                        <option value="">Select Secteur</option>
                        <option value="biologique">Secteur Biologique</option>
                        <option value="industriel">Secteur Industrielle</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="filiere">Filiere:</label>
                    <select id="filiere" name="filiere" required>
                        <option value="">Select Filiere</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="year">Annee:</label>
                    <select id="year" name="year" required>
                        <option value="">Select Year</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="semestre">Semestre:</label>
                    <input type="text" id="semestre" name="semestre" placeholder="Semestre concerne" required>
                </div>
                <div class="form-group">
                    <label for="matiere">Matiere:</label>
                    <input type="text" id="matiere" name="matiere" placeholder="Matiere concerne" required>
                </div>
                <div class="form-group">
                    <label for="file">Attach File:</label>
                    <input type="file" id="file" name="file" accept="application/pdf" required>
                </div>
                <button type="submit">Add File</button>
            </form>
        </div>
    </div>

    <script>
        function updateFiliereOptions() {
            const secteur = document.getElementById('secteur').value;
            const filiereSelect = document.getElementById('filiere');
            filiereSelect.innerHTML = '';

            let options = [];

            if (secteur === 'biologique') {
                options = [
                    { value: 'GBH', text: 'Génie de Biologie Humaine (GBH)' },
                    { value: 'GIMR', text: 'Génie d\'Imagerie Médicale et de Radiobiologie (GIMR)' },
                    { value: 'GEn', text: 'Génie de l\'Environnement (GEn)' },
                    { value: 'PSA', text: 'Production et Santé Animale (PSA)' },
                    { value: 'GTA', text: 'Génie de Technologie Alimentaire (GTA)' }
                ];
            } else if (secteur === 'industriel') {
                options = [
                    { value: 'GC', text: 'Génie Civil (GC)' },
                    { value: 'GE', text: 'Génie Electrique (GE)' },
                    { value: 'GME', text: 'Génie Mécanique et Energétique (GME)' },
                    { value: 'GIT', text: 'Génie Informatique et Télécom (GIT)' },
                    { value: 'GBM', text: 'Génie Bio Médical (GBM)' },
                    { value: 'Maintenance', text: 'Maintenance Bio Médical et Hospitalière' },
                    { value: 'MA', text: 'Mécanisation Agricole' }
                ];
            }

            options.forEach(option => {
                const opt = document.createElement('option');
                opt.value = option.value;
                opt.text = option.text;
                filiereSelect.appendChild(opt);
            });
        }
    </script>
</body>
</html>
