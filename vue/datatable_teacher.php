<?php
$servername = "127.0.0.1"; 
$username = "root"; 
$password = ""; 
$dbname = "Digital_Library"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT fullname, email, mobile, matricule, specialite, grade, newsletter, `created_at` AS cree, `updated_at` AS mise FROM Teachers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $teacher = [];
    while($row = $result->fetch_assoc()) {
        $teacher[] = $row;
    }
} else {
    $teacher = [];
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des utilisateurs</title>
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/icofont.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/themify.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/flag-icon.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/feather-icon.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/datatables.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link id="color" rel="stylesheet" href="assets/css/color-1.css" media="screen">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
  </head>
  <body>
    <div class="page-body">
      <div class="container-fluid">
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header pb-0 card-no-border">
              <h4 class="mb-3">Liste des etudiants</h4><span>Liste complète de tous les etudiants.</span>
            </div>
            <div class="card-body">
              <div class="table-responsive theme-scrollbar">
                <table class="display" id="data-source-1" style="width:100%">
                  <thead>
                    <tr>
                      <th>Nom complet</th>
                      <th>Email</th>
                      <th>Numéro</th>
                      <th>Matricule</th>
                      <th>Spécialité</th>
                      <th>Grade</th>
                      <th>Newsletter</th>
                      <th>Créer le</th>
                      <th>Mise à jour le</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if (!empty($teacher)): ?>
                      <?php foreach ($teacher as $donnees): ?>
                        <tr>
                          <td><?php echo htmlspecialchars($donnees['fullname']); ?></td>
                          <td><?php echo htmlspecialchars($donnees['email']); ?></td>
                          <td><?php echo htmlspecialchars($donnees['mobile']); ?></td>
                          <td><?php echo htmlspecialchars($donnees['matricule']); ?></td>
                          <td><?php echo htmlspecialchars($donnees['specialite']); ?></td>
                          <td><?php echo htmlspecialchars($donnees['grade']); ?></td>
                          <td><?php echo htmlspecialchars($donnees['newsletter']); ?></td>
                          <td><?php echo htmlspecialchars($donnees['cree']); ?></td>
                          <td><?php echo htmlspecialchars($donnees['mise']); ?></td>
                          <td>
                              <ul class="action">
                                <li class="edit"><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter1"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter2"><i class="icon-trash"></i></a></li>
                              </ul>
                          </td>
                        </tr>
                      <?php endforeach; ?>
                    <?php else: ?>
                      <tr>
                        <td colspan="8">No data found</td>
                      </tr>
                    <?php endif; ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Nom complet</th>
                      <th>Email</th>
                      <th>Numéro</th>
                      <th>Matricule</th>
                      <th>Spécialité</th>
                      <th>Grade</th>
                      <th>Newsletter</th>
                      <th>Créer le</th>
                      <th>Mise à jour le</th>
                      <th>Actions</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="assets/js/icons/feather-icon/feather-icon.js"></script>
    <script src="assets/js/scrollbar/simplebar.js"></script>
    <script src="assets/js/scrollbar/custom.js"></script>
    <script src="assets/js/config.js"></script>
    <script src="assets/js/sidebar-menu.js"></script>
    <script src="assets/js/sidebar-pin.js"></script>
    <script src="assets/js/slick/slick.min.js"></script>
    <script src="assets/js/slick/slick.js"></script>
    <script src="assets/js/header-slick.js"></script>
    <script src="assets/js/typeahead/handlebars.js"></script>
    <script src="assets/js/typeahead/typeahead.bundle.js"></script>
    <script src="assets/js/typeahead/typeahead.custom.js"></script>
    <script src="assets/js/typeahead-search/handlebars.js"></script>
    <script src="assets/js/typeahead-search/typeahead-custom.js"></script>
    <script src="assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/js/datatable/datatables/datatable.custom.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/theme-customizer/customizer.js"></script>
  </body>
</html>
