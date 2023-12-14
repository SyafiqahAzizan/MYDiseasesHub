<?php
// Connect to the database
$dbconn = new PDO('mysql:host=localhost;dbname=fyp', 'root', '');

// Retrieve contact messages from the database
$query = $dbconn->prepare("SELECT * FROM contact_messages");
$query->execute();
$messages = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<title>Admin-MYDiseases Hub</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="../css/admin/index.css" rel="stylesheet">
	<link href="../assets/img/lgq.png" rel="icon">
    <style>
    table {
        border-collapse: collapse;
        width: 97%;
        margin: 0 auto; /* Center the table horizontally */
    }

    th, td {
        border: 1px solid rgb(22, 22, 22);
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #d1f7fd ;
    }
    tr:nth-child(odd) {
      background-color: #60d5dd;
    }

    th {
        background-color: #3fc05f;
        color: black;
        font-weight: bold;
        font-size: 14pt
    }
</style>


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
          <button class="dropbtn"><a href="#projects" class="w3-bar-item w3-button">M o r e D i s e a s e <i class="fa fa-caret-down"></i></a>
              
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
<br><br>
<br><br>
<div class="container">
<center><h1><strong>Feedback From User</strong></h1></center>

<table>
    <tr>
        <th style="width: 10%;">Name</th>
        <th style="width: 10%;">Email</th>
        <th style="width: 10%;">Subject</th>
        <th style="width: 20%;">Message</th>
        <th style="width: 8%;">Date and Time</th>

    </tr>
    <?php foreach ($messages as $message): ?>
        <tr>
            <td><?php echo $message['name']; ?></td>
            <td><?php echo $message['email']; ?></td>
            <td><?php echo $message['subject']; ?></td>
            <td><?php echo $message['message']; ?></td>
            <td><?php echo $message['submission_time']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>
    </body></html>