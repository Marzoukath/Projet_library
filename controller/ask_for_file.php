<?php
session_start();

require_once '../modele/db_connection.php';
$db = dbConnect();
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

function sanitize_data($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] === "POST")
{
    try
    {
        $description = sanitize_data($_POST['description']);
        // $asked_by = sanitize_data($_SESSION['matricule']);
        $asked_by = "default_user";
        
        $request = $db->prepare("INSERT INTO Requests (description, asked_by) VALUES (:description, :asked_by)");
            $request->execute([
                ':description' => $description,
                ':asked_by' => $asked_by,
            ]);

        echo "Request successfully inserted.";
        if (isset($_POST['from'])) { header("Location: ../vue/users/requests_management.php"); }
        else{header("Location: ../vue/users/files_search.php"); }
    }
    catch (Exception $e)
    {
        die('Error: ' . $e->getMessage());
    }
}
else
{
    echo "Invalid request.";
}
