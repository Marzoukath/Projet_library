<?php
require_once '../../modele/db_connection.php';
$db = dbConnect();
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

function delete_student($student_id) {
    global $db;
    
    try 
    {
        $db->beginTransaction();
        
        $stmt = $db->prepare("SELECT * FROM Students WHERE id = ?");
        $stmt->execute([$student_id]);
        $student = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($student_id) 
        {
            $stmt = $db->prepare("DELETE FROM Favorites WHERE student_id = ?");
            $stmt->execute([$student_id]);

            $stmt = $db->prepare("DELETE FROM Students WHERE file_id = ?");
            $stmt->execute([$student_id]);

            $db->commit();
            
            echo "Student account and associated records deleted successfully.";
            header("Location: ../../vue/admin/users_list.php");
        } 
        else { echo "File not found."; }
    } 
    catch (Exception $e) 
    {
        $db->rollBack();
        die('Error: ' . $e->getMessage());
    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['student_id'])) 
{
    $student_id = $_POST['student_id'];
    delete_student($student_id);
}
else { echo "Invalid request."; }
