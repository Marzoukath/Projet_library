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
        $teacher_id = $_POST['teacher_id'];
        $fullname = sanitize_data($_POST['fullname']);
        $matricule = sanitize_data($_POST['matricule']);
        $email = sanitize_data($_POST['email']);
        $mobile = sanitize_data($_POST['mobile']);
        $grade = sanitize_data($_POST['grade']);
        $domain = sanitize_data($_POST['domain']);
        $speciality = sanitize_data($_POST['speciality']);
        $status = sanitize_data($_POST['status']);

        $stmt = $db->prepare("UPDATE Teachers SET fullname = ?, matricule = ?, email = ?, mobile = ?, grade = ?, domain = ?, speciality = ?, status = ?, updated_at = NOW() WHERE id = ?");
        $stmt->execute([$fullname, $matricule, $email, $mobile, $grade, $domain, $speciality, $status, $teacher_id]);

        echo "Teacher data updated successfully.";
        header("Location: ../../vue/admin/users_list.php");
    } catch (Exception $e) { die('Error: ' . $e->getMessage()); }
} else { echo "Invalid request."; }
