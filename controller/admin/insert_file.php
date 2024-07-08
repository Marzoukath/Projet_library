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
        $title = sanitize_data($_POST['title']);
        $authors = sanitize_data($_POST['authors']);
        $type = sanitize_data($_POST['type']);
        $url = sanitize_data($_POST['url']);
        $language = sanitize_data($_POST['language']);
        $description = sanitize_data($_POST['description']);

        $miniature = "";
        $uploadOk = 1;

        if (isset($_FILES['file']) && $_FILES['file']['error'] == 0)
        {
            $target_directory = "../../storage_list/uploads/";
            if (!is_dir($target_directory))
            {
                mkdir($target_directory, 777, true);
            }
            $file_name = basename($_FILES["file"]["name"]);
            $target_directory = "../../storage/uploads/";
            $target_file_path = $target_directory . $file_name;
            $file_type = pathinfo($target_file_path, PATHINFO_EXTENSION);
            $allow_types = array('jpg','png','jpeg','gif','pdf','doc','docx','txt','mp3','mp4','avi');

            if (in_array($file_type, $allow_types))
            {
                if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file_path))
                {
                    $miniature = $path = $target_file_path;
                }
                else
                {
                    echo "Sorry, there was an error uploading your file.";
                    $uploadOk = 0;
                }
            }
            else
            {
                echo "Sorry, only JPG, JPEG, PNG, GIF, TXT, PDF, DOC, DOCX, MP3, MP4, and AVI files are allowed.";
                $uploadOk = 0;
            }
        }
        else
        {
            if ($_FILES['file']['error'] != UPLOAD_ERR_NO_FILE)
            {
                echo "File upload error: " . $_FILES['file']['error'];
                $uploadOk = 0;
            }
        }

        if ($uploadOk)
        {
            $proposed_by = "default_user";
            $validated_by = "default_admin";
            $request = $db->prepare("INSERT INTO Files (title, description, authors, type, url, language, miniature, path, proposed_by, validated_by) VALUES (:title, :description, :authors, :type, :url, :language, :miniature, :path, :proposed_by, :validated_by)");
            $request->execute([
                ':title' => $title,
                ':description' => $description,
                ':authors' => $authors,
                ':type' => $type,
                ':url' => $url,
                ':language' => $language,
                ':miniature' => $miniature,
                ':path' => $path,
                ':proposed_by' => $proposed_by,
                ':validated_by' => $validated_by,
            ]);
            echo "New file uploaded successfully";
        }
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}
else
{
    echo "Nothing to upload.";
}
?>
