<?php
session_start();

require_once '../modele/db_connection.php';
$db = dbConnect();
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$files = [];

if ($_SERVER["REQUEST_METHOD"] === "POST")
{
    try
    {
        $sector = isset($_POST['sector']) ? $_POST['sector'] : '';
        $semester = isset($_POST['semester']) ? $_POST['semester'] : '';

        $sql = "SELECT DISTINCT Files.*
                FROM Files 
                JOIN Sectors ON Files.id = Sectors.file_id 
                JOIN Semesters ON Files.id = Semesters.file_id 
                WHERE 1";

        $params = [];

        if (!empty($sector))
        {
            $sql .= " AND Sectors.associated_sector = :sector";
            $params[':sector'] = $sector;
        }

        if (!empty($semester))
        {
            $sql .= " AND Semesters.associated_semester = :semester";
            $params[':semester'] = $semester;
        }

        $stmt = $db->prepare($sql);
        $stmt->execute($params);
        $files = $stmt->fetchAll(PDO::FETCH_ASSOC);

        print_r($files);
        $_SESSION['filtered_files'] = $files;
        header("Location: ../vue/users/files_search.php");
    }
    catch (Exception $e)
    {
        die('Error: ' . $e->getMessage());
    }
}
