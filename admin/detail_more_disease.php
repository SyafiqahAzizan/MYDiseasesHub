<?php 
// Include database connection settings
include('../include/dbconn.php');
include ("../login/session.php");
session_start();
$user = $_SESSION['username'];
if (!isset($_SESSION['username'])) {
        header('Location: ../login');
    } 
    $id = isset($_GET['id']) ? $_GET['id'] : null;

?>

<!DOCTYPE html>
<html>
<title>Admin-MYDiseases Hub</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="../css/admin/index.css" rel="stylesheet">
	<link href="../assets/img/lgq.png" rel="icon">
  <body>


<div id="container">
  <i id="icon" class="fa fa-caret-down"></i>
</div>

  <div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
  <a href="../index.html" class="w3-bar-item w3-button"><b>MYDiseases Hub<b></a>
   <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="index.php" class="w3-bar-item w3-button">Home|<i class="fa fa-home"></i></a>

      <div class="dropdown">
        <button class="dropbtn"><a href="#projects" class="w3-bar-item w3-button">A d m i n  <i class="fa fa-caret-down"></i></a>
         
        </button>
        <div class="dropdown-content">
          <a href="view_admin.php">My Account</a>
          <a href="update_view_admin.php">Update account</a>
        </div>
  </div>
         <div class="dropdown">
          <button class="dropbtn"><a href="#projects" class="w3-bar-item w3-button">M o r e D i s ea s e <i class="fa fa-caret-down"></i></a>
              
            </button>
            <div class="dropdown-content">
              <a href="add_more_disease.php">Add Disease</a>
              <a href="view_more_disease.php">View Disease</a>
              <a href="update_view_disease.php">Update Disease</a>
              <a href="search_disease.php">Search Disease</a>
            </div>
            </div>

          
            <div class="dropdown">
                <button class="dropbtn"><a href="#projects" class="w3-bar-item w3-button">C o n t a c t <i class="fa fa-caret-down"></i></a>
         
               </button>
                <div class="dropdown-content">
                  <a href="view_contact.php">View Contact</a>
                </div>
                </div>
                <a href="../login/logout.php" class="w3-bar-item w3-button">Logout|<i class="fa fa-sign-out"></i></a>
    </div>
  </div>
</div>

<div class="container" >
<br><br><br><br>
<center><h1><strong>More Disease Details</strong></h1>
<?php
    if ($id !== null) {
        // Construct and execute your query
        $query = "SELECT * FROM services WHERE service_id='$id'";
        $result = mysqli_query($dbconn, $query);

        if ($result) {
            $row = mysqli_fetch_array($result);
            $title = isset($row['title']) ? ucwords(strtolower($row['title'])) : "";
            $icon = isset($row['icon']) ? ucwords(strtolower($row['icon'])) : "";
            $description = isset($row['description']) ? ucwords(strtolower($row['description'])) : "";

            echo "<center><fieldset>";
            echo "<form name='add_content' method='post' action='db_update_user.php' enctype='multipart/form-data'>";
            echo "<table width='100%' border='1' align='center' bgcolor='#38c59b' style='margin-left: 50;'>";
            echo "<tr>";
            echo "<td class='sepbox' width='20%'>Title</td>";
            echo "<td width='84%'>$title</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td class='sepbox' width='20%'>Icon</td>";
            echo "<td>$icon</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td class='sepbox' width='20%'>Description</td>";
            echo "<td>$description</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td colspan='2'><input type='button' name='cancel' value='Back' onclick='location.href=\"view_more_disease.php\"' /></td>";
            echo "</tr>";
            echo "</table>";
            echo "</form>";
            echo "</fieldset></center>";
        } else {
            echo "<center><strong>No data found.</strong></center>";
        }
    } else {
        echo "<center><strong>No ID parameter found in the URL.</strong></center>";
    }
    ?>
    </center>
</div>
</body>
</html>