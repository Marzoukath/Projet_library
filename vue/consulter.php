<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link href="../image/9796582.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../image/livre.png" type="image/x-icon">
    <title>Library</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('C:/xampp/htdocs/Projet_library-dev-foumi/image/library-5641389_1280.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .header {
            color: rgb(9, 5, 5);
            padding: 20px 0;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        .container {
            width: 80%;
            max-width: 500px;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .dropdown {
            background-color: #3f6084;
            color: white;
            padding: 15px;
            cursor: pointer;
            border: none;
            width: 100%;
            text-align: left;
            font-size: 18px;
            margin-top: 10px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .dropdown:hover {
            background-color: #8fb8e4;
        }
        .dropdown-content {
            display: none;
            background-color: #3485e9;
            padding: 0;
            margin: 0;
            list-style: none;
            border: 1px solid #2f38d7;
            border-radius: 5px;
            overflow: hidden;
        }
        .dropdown-content li {
            padding: 15px;
            border-bottom: 1px solid #ddd;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .dropdown-content li:hover {
            background-color: #33e617;
        }
        .dropdown-content li:last-child {
            border-bottom: none;
        }
    </style>
</head>
<body>
    <?php include('header.php'); ?>
    <div class="header">
        <!-- <h1>DIGITAL LIBRARY</h1> -->
    </div>
    <div class="container">
        <button class="dropdown" onclick="toggleDropdown('secteurIndustrielDropdown')">Secteur Industriel</button>
        <ul id="secteurIndustrielDropdown" class="dropdown-content">
            <li onclick="toggleDropdown('si1Dropdown')">SI 1</li>
            <ul id="si1Dropdown" class="dropdown-content">
                <li>Semestre 1</li>
                <li>Semestre 2</li>
            </ul>
            <li onclick="toggleDropdown('si2Dropdown')">SI 2</li>
            <ul id="si2Dropdown" class="dropdown-content">
                <li>Semestre 3</li>
                <li>Semestre 4</li>
            </ul>
            <li onclick="toggleDropdown('gcDropdown')">GC</li>
            <ul id="gcDropdown" class="dropdown-content">
                <li onclick="redirect('C:/xampp/htdocs/Exercice1BATOKOChahidath/GC.html')">Options</li>
            </ul>
            <li onclick="toggleDropdown('gcpDropdown')">GCP</li>
            <ul id="gcpDropdown" class="dropdown-content">
                <li onclick="redirect('C:/xampp/htdocs/Exercice1BATOKOChahidath/GCP.html')">Options</li>
            </ul>
            <li onclick="toggleDropdown('geDropdown')">GE</li>
            <ul id="geDropdown" class="dropdown-content">
                <li onclick="redirect('C:/xampp/htdocs/Exercice1BATOKOChahidath/GE.html')">Options</li>
            </ul>
            <li onclick="toggleDropdown('gitDropdown')">GIT</li>
            <ul id="gitDropdown" class="dropdown-content">
                <li onclick="redirect('C:/xampp/htdocs/Exercice1BATOKOChahidath/GIT.html')">Options</li>
            </ul>
            <li onclick="toggleDropdown('gmeDropdown')">GME</li>
            <ul id="gmeDropdown" class="dropdown-content">
                <li onclick="redirect('C:/xampp/htdocs/Exercice1BATOKOChahidath/GME.html')">Options</li>
            </ul>
        </ul>
    </div>
    <div class="container">
        <button class="dropdown" onclick="toggleDropdown('secteurBiologiqueDropdown')">Secteur Biologique</button>
        <ul id="secteurBiologiqueDropdown" class="dropdown-content">
            <li onclick="toggleDropdown('abmDropdown')">ABM</li>
            <ul id="abmDropdown" class="dropdown-content">
                <li>ABM 1</li>
                <li>ABM 2</li>
                <li>ABM 3</li>
            </ul>
            <li onclick="toggleDropdown('maDropdown')">MA</li>
            <ul id="maDropdown" class="dropdown-content">
                <li>MA 1</li>
                <li>MA 2</li>
                <li>MA 3</li>
            </ul>
            <li onclick="toggleDropdown('mbhDropdown')">MBH</li>
            <ul id="mbhDropdown" class="dropdown-content">
                <li>MBH 1</li>
                <li>MBH 2</li>
                <li>MBH 3</li>
            </ul>
            <li onclick="toggleDropdown('psaDropdown')">PSA</li>
            <ul id="psaDropdown" class="dropdown-content">
                <li>PSA 1</li>
                <li>PSA 2</li>
                <li>PSA 3</li>
            </ul>
            <li onclick="toggleDropdown('imDropdown')">IM</li>
            <ul id="imDropdown" class="dropdown-content">
                <li>IM 1</li>
                <li>IM 2</li>
                <li>IM 3</li>
            </ul>
        </ul>
    </div>
    <script>
        function toggleDropdown(id) {
            var dropdown = document.getElementById(id);
            if (dropdown.style.display === "none" || dropdown.style.display === "") {
                dropdown.style.display = "block";
            } else {
                dropdown.style.display = "none";
            }
        }
       
    
            function redirect(filiere) {
                fetch('get_files.php?filiere=' + filiere)
                    .then(response => response.json())
                    .then(files => {
                        var dropdown = document.getElementById(filiere + 'Dropdown');
                        dropdown.innerHTML = '';
                        files.forEach(file => {
                            var li = document.createElement('li');
                            li.textContent = file.filename;
                            li.onclick = function() { window.location.href = file.filepath; };
                            dropdown.appendChild(li);
                        });
                    });
            }
        </script>

        <!-- function redirect(url) {
            window.location.href = url;
        }
         -->
    </script>
</body>
</html>
