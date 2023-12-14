<?php 
// Include database connection settings
include('../include/dbconn.php');
include ("../login/session.php");
session_start();
$user = $_SESSION['username'];
if (!isset($_SESSION['username'])) {
    header('Location: ../login');
    exit; // Terminate script execution after redirection
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $titles = $_POST['title'];
    $icons = $_POST['icon'];
    $descriptions = $_POST['description'];

    // Insert or update the content in the database
    foreach ($titles as $key => $title) {
        $icon = $icons[$key];
        $description = $descriptions[$key];

        // You can use prepared statements to prevent SQL injection
        $stmt = $mysqli->prepare("INSERT INTO services (title, icon, description) VALUES (?, ?, ?) ON DUPLICATE KEY UPDATE icon = ?, description = ?");
        $stmt->bind_param("sssss", $title, $icon, $description, $icon, $description);
        $stmt->execute();
    }

    // Close the database connection
    $mysqli->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Add your CSS and JavaScript here if needed -->
    <link href="../css/admin/updatecontent.css" rel="stylesheet">

</head>
<body>
    <form method="post">
        <div class="row">
            <?php
            // Fetch existing data from the database
            $result = $mysqli_query("SELECT * FROM services");
            while ($row = $result->fetch_assoc()) {
                echo '<div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">';
                echo '<div class="icon"><i class="' . $row['icon'] . '"></i></div>';
                echo '<h4 class="title"><input type="text" name="title[]" value="' . $row['title'] . '"></h4>';
                echo '<p class="description"><textarea name="description[]">' . $row['description'] . '</textarea></p>';
                echo '</div>';
            }
            ?>
        </div>
        <input type="submit" value="Update Content">
    </form>
</body>
</html>
