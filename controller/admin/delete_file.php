<?php
require_once '../../modele/db_connection.php';
$db = dbConnect();
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

function delete_file($file_id) {
    global $db;
    
    try 
    {
        $db->beginTransaction();
        
        $stmt = $db->prepare("SELECT path FROM Files WHERE id = ?");
        $stmt->execute([$file_id]);
        $file = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($file) 
        {
            $file_path = $file['path'];
            
            if (file_exists($file_path)) { unlink($file_path); }

            $stmt = $db->prepare("DELETE FROM Sectors WHERE file_id = ?");
            $stmt->execute([$file_id]);

            $stmt = $db->prepare("DELETE FROM Categories WHERE file_id = ?");
            $stmt->execute([$file_id]);

            $stmt = $db->prepare("DELETE FROM Files WHERE id = ?");
            $stmt->execute([$file_id]);

            $db->commit();
            
            echo "File and associated records deleted successfully.";
            header("Location: ../../vue/admin/files_search.php");
        } else { echo "File not found."; }
    } 
    catch (Exception $e) 
    {
        $db->rollBack();
        die('Error: ' . $e->getMessage());
    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['file_id'])) 
{
    $file_id = $_POST['file_id'];
    delete_file($file_id);
} else { echo "Invalid request."; }
