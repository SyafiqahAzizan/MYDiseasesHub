<?php 
// Include database connection settings
include('../include/dbconn.php');
include ("../login/session.php");
session_start();
$user = $_SESSION['username'];
if (!isset($_SESSION['username'])) {
        header('Location: ../login');
    } 
  
?>

<!DOCTYPE html>
<html>
<title>Admin-MYDiseases Hub</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="../css/admin/updateadmin.css" rel="stylesheet">
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
          <button class="dropbtn"><a href="#projects" class="w3-bar-item w3-button">M o r e D i s e a se<i class="fa fa-caret-down"></i></a>
              
            </button>
            <div class="dropdown-content">
              <a href="add_more_disease.php">Add Disease</a>
              <a href="view_more_disease.php">View Disease</a>
              <a href="update_view_disease.php">Update Disease</a>
              <a href="search_disease.php">Search Disease</a>
            </div>
            </div>

            
            <div class="dropdown">
                <button class="dropbtn"><a href="#projects" class="w3-bar-item w3-button">R e p o r t <i class="fa fa-caret-down"></i></a>
         
               </button>
                <div class="dropdown-content">
                  <a href="view_contact.php">View Report</a>
                </div>
                </div>
                <a href="../login/logout.php" class="w3-bar-item w3-button">Logout|<i class="fa fa-sign-out"></i></a>
    </div>
  </div>
</div>

<div class="container">
<br><br><br><br><br>
<center><h1><strong>Admin Details</strong></h1></center>

<?php
  $query = "SELECT * FROM admin WHERE admin_id=1";
  $result = mysqli_query($dbconn, $query) or die ("Error: " . mysqli_error($dbconn));
  $row = mysqli_fetch_array($result);
?>

<center><fieldset>

<form name="edit_user" method="post" action="db_update_user.php" enctype="multipart/form-data">
    <table width="90%" border="2" align="center" >
      <tr>
        <td class="sepbox" width="50%">NAME</td>  
        <td width="70%"><?php echo ucwords (strtolower($row['name'])); ?></td>  
      </tr>  
    <tr>
        <td class="sepbox" width="20%">EMAIL</td>
        <td><?php echo $row['email']; ?></td>
      </tr>
    <tr>
        <td class="sepbox" width="20%">PHONE NO</td>
        <td><?php echo $row['phoneNo']; ?></td>
      </tr>
      <tr>
        <td class="sepbox" width="40%">ADDRESS</td>
        <td><?php echo ucwords (strtolower($row['address'])); ?></td>
      </tr>
      <tr>
        <td class="sepbox" width="20%">USERNAME</td>
        <td><?php echo $row['username']; ?>
          <input type="hidden" name="username" size="50" value="<?php echo $row['username']; ?>" /></td> 
      </tr>
      <tr>
        <td class="sepbox" width="20%">PASSWORD</td>
        <td><?php echo $row['password']; ?></td> 
      </tr>
      <tr> 
        <td colspan="2"><input type="button" name="cancel" value="Back " onclick="location.href='view_admin.php'" /></td>
      </tr>
    
    </table>
</form>

</fieldset></center>
 
</div>
   
</body>

</html>