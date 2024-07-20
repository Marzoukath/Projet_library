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
        $student_id = $_POST['student_id'];
        $fullname = sanitize_data($_POST['fullname']);
        $matricule = sanitize_data($_POST['matricule']);
        $email = sanitize_data($_POST['email']);
        $mobile = sanitize_data($_POST['mobile']);
        $sector = sanitize_data($_POST['sector']);
        $status = sanitize_data($_POST['status']);

        $stmt = $db->prepare("UPDATE Students SET fullname = ?, matricule = ?, email = ?, mobile = ?, sector = ?, status = ?, updated_at = NOW() WHERE id = ?");
        $stmt->execute([$fullname, $matricule, $email, $mobile, $sector, $status, $student_id]);

        echo "Student data updated successfully.";
        header("Location: ../../vue/admin/users_list.php");
    } catch (Exception $e) { die('Error: ' . $e->getMessage()); }
} else { echo "Invalid request."; }
