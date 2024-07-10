<?php
require_once '../../modele/db_connection.php';
$db = dbConnect();
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_GET['file_id'])) {
    $file_id = $_GET['file_id'];
    
    try {
        // Retrieve the file record to get the file path
        $stmt = $db->prepare("SELECT miniature, path, number_of_downloads FROM Files WHERE id = ?");
        $stmt->execute([$file_id]);
        $file = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($file) {
            $file_path = '../../storage/uploads/' . basename($file['path']);

            // Check if the file exists
            if (file_exists($file_path)) {
                // Increment the download counter
                $number_of_downloads = $file['number_of_downloads'] + 1;
                $stmt = $db->prepare("UPDATE Files SET number_of_downloads = ? WHERE id = ?");
                $stmt->execute([$number_of_downloads, $file_id]);

                // Set headers to initiate file download
                header('Content-Description: File Transfer');
                header('Content-Type: application/octet-stream');
                header('Content-Disposition: attachment; filename="' . rawurlencode(basename($file_path)) . '"');
                header('Expires: 0');
                header('Cache-Control: must-revalidate');
                header('Pragma: public');
                header('Content-Length: ' . filesize($file_path));

                // Clear output buffer and read the file
                ob_clean();
                flush();
                readfile($file_path);
                exit;
            } else {
                echo "File not found.";
            }
        } else {
            echo "Invalid file ID.";
        }
    } catch (Exception $e) {
        die('Error: ' . $e->getMessage());
    }
} else {
    echo "No file ID provided.";
}
