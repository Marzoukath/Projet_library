<?php
require_once '../../modele/db_connection.php';
$db = dbConnect();
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

function delete_student($matricule) {
    global $db;
    
    try 
    {
        $db->beginTransaction();
        
        $stmt = $db->prepare("SELECT * FROM Students WHERE id = ?");
        $stmt->execute([$matricule]);
        $student = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($student)
        {
            $stmt = $db->prepare("DELETE FROM Favorites WHERE matricule = ?");
            $stmt->execute([$matricule]);

            $stmt = $db->prepare("DELETE FROM Students WHERE matricule = ?");
            $stmt->execute([$matricule]);

            $db->commit();
            
            echo "Student account and associated records deleted successfully.";
            header("Location: ../../vue/admin/users_list.php");
        } 
        else { echo "User not found."; }
    } 
    catch (Exception $e) 
    {
        $db->rollBack();
        die('Error: ' . $e->getMessage());
    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['student_id'])) 
{
    $matricule = $_POST['student_matricule'];
    delete_student($matricule);
}
else { echo "Invalid request."; }
