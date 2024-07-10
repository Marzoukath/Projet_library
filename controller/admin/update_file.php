<?php
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
        $file_id = $_POST['file_id'];
        $title = sanitize_data($_POST['title']);
        $authors = sanitize_data($_POST['authors']);
        $type = sanitize_data($_POST['type']);
        $url = sanitize_data($_POST['url']);
        // $language = sanitize_data($_POST['language']);
        $description = sanitize_data($_POST['description']);

        $stmt = $db->prepare("UPDATE Files SET title = ?, authors = ?, type = ?, url = ?, description = ?, updated_at = NOW() WHERE id = ?");
        $stmt->execute([$title, $authors, $type, $url, $description, $file_id]);

        echo "File data updated successfully.";
    }
    catch (Exception $e)
    {
        die('Error: ' . $e->getMessage());
    }
} else {
    echo "Invalid request.";
}
