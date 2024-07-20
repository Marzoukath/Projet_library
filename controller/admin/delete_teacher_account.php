<?php
require_once '../../modele/db_connection.php';
$db = dbConnect();
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

function delete_teacher($matricule)
{
    global $db;
    try 
    {
        $db->beginTransaction();
        
        $stmt = $db->prepare("SELECT * FROM Teachers WHERE matricule = ?");
        $stmt->execute([$matricule]);
        $teacher = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($teacher)
        {
            $stmt = $db->prepare("DELETE FROM Favorites WHERE user_matricule = ?");
            $stmt->execute([$matricule]);

            $stmt = $db->prepare("DELETE FROM Teachers WHERE matricule = ?");
            $stmt->execute([$matricule]);

            $db->commit();
            
            echo "Teacher account and associated records deleted successfully.";
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

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['teacher_matricule'])) 
{
    $matricule = $_POST['teacher_matricule'];
    delete_teacher($matricule);
}
else { echo "Invalid request."; }
