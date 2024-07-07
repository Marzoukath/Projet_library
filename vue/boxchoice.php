<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choisir Type d'Utilisateur</title>
    <link rel="stylesheet" href="styles.css">
    <style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
   } 

.container {
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
}

h1 {
    margin-bottom: 20px;
}

.radio-group {
    margin-bottom: 20px;
}

.radio-group label {
    display: block;
    margin: 10px 0;
}

button {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}
</style>
</head>
<body>
    <div class="container">
        <h2>QUEL UTILISATEUR ÊTES-VOUS?</h2 >
        <form id="userForm" onsubmit="return redirectUser();">
            <label>
                <input type="radio" name="userType" value="student" required>
                Étudiant
            </label>
            <label>
                <input type="radio" name="userType" value="teacher">
                Enseignant
            </label>
            <label>
                <input type="radio" name="userType" value="admin">
                Administrateur
            </label>
            <button type="submit">Suivant</button>
        </form>
    </div>

    <script>
        function redirectUser() {
            const userType = document.querySelector('input[name="userType"]:checked').value;
            if (userType === 'student') {
                window.location.href = 'compte_student.php';
            } else if (userType === 'teacher') {
                window.location.href = 'compte_teacher.php';
            } else if (userType === 'admin') {
                window.location.href = 'creer_compte.php';
            }
            return false;
        }
    </script>
</body>
</html>
