<?php
require_once '../../modele/db_connection.php';
$db = dbConnect();
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

function addFavoriteAndIncrementLikes($user_matricule, $file_id) 
{
    global $db;

    try 
    {
        $db->beginTransaction();

        $sql_insert_favorite = "INSERT IGNORE INTO Favorites (user_matricule, file_id) VALUES (:user_matricule, :file_id)";
        $stmt_insert_favorite = $db->prepare($sql_insert_favorite);
        $stmt_insert_favorite->execute([
            ':user_matricule' => $user_matricule,
            ':file_id' => $file_id
        ]);

        if ($stmt_insert_favorite->rowCount() > 0) 
        {
            $sqlUpdateLikes = "UPDATE Files SET number_of_likes = number_of_likes + 1 WHERE file_id = :file_id";
            $stmtUpdateLikes = $db->prepare($sqlUpdateLikes);
            $stmtUpdateLikes->execute([':file_id' => $file_id]);
        }

        $db->commit();

        echo "Favorite added and likes updated successfully.";

        header("Location: ../vue/users/files_search.php");
    } 
    catch (Exception $e) 
    {
        $db->rollBack();
        echo "Failed to add favorite or update likes: " . $e->getMessage();
    }
}

// Example usage
$user_matricule = '123456';
$file_id = 5;
addFavoriteAndIncrementLikes($user_matricule, $file_id);
