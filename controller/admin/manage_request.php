<?php

session_start();

require_once '../../modele/db_connection.php';
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
        $request_id = sanitize_data($_POST['request_id']);
        $status = sanitize_data($_POST['status']);
        $observation = sanitize_data($_POST['observation']);
        // $processed_by = sanitize_data($_SESSION['matricule']);
        $processed_by = "default_admin";
        $stmt = $db->prepare("UPDATE Requests SET status = ?, observation = ?, processed_by = ?, updated_at = NOW() WHERE id = ?");
        $stmt->execute([$status, $observation, $processed_by, $request_id]);

        echo "Request successfully updated.";
        header("Location: ../../vue/admin/requests_management.php");
    }
    catch (Exception $e)
    {
        die('Error: ' . $e->getMessage());
    }
} else { echo "Invalid request."; }
