<?php 
// Include database connection settings
include('../include/dbconn.php');
include ("../login/session.php");
session_start();
$user = $_SESSION['username'];
if (!isset($_SESSION['username'])) {
        header('Location: ../login');
    } 
$id = $_GET['service_id'];    
?>

<!DOCTYPE html>
<html>
<<title>Admin-MYDiseases Hub</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<link href="../assets/img/lgq.png" rel="icon">
<link href="../css/admin/index.css" rel="stylesheet">

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
<div class="container">
<br><br><br><br>
<h1><center><strong>Update Disease Data</strong></center></h1>
<?php
$query = "SELECT * FROM services WHERE service_id='$id'";
$result = mysqli_query($dbconn, $query) or die ("Error: " . mysqli_error($dbconn));

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);
} else {
    // Handle the case where no data is found or the query fails.
    echo "No data found or there was an error in the query.";
    // You can choose to redirect or display an error message as needed.
}
?>

<form name="add_content" method="post" action="db_update_user.php" enctype="multipart/form-data">
    <table width="70%" border="1" align="center" style="background-color: #38c59b;">
      <tr>
        <td width="20%">Title</td>  
        <td width="84%"><input type="text" name="title" size="50" value="<?php echo ucwords (strtolower($row['title'])); ?>" /></td>  
      </tr>  
      <tr> 
        <td width="20%">Icon</td>
        <td>
     <textarea name="icon" rows="1" cols="30"><?php echo ucwords (strtolower($row['icon'])); ?></textarea>
    </td>  
      </tr>
        <tr> 
        <td width="40%">Description</td>
        <td>
     <textarea name="description" rows="10" cols="52"><?php echo ucwords (strtolower($row['description'])); ?></textarea>
    </td>  
      </tr>
   
    
      <tr> 
        <td colspan="2">
        <input type="hidden" name="service_id" value="<?php echo $row['service_id']; ?>" />
    
    </td>
      </tr>   
    
      <tr> 
        <td colspan="2"><input type="submit" name="submit" value=" Save " />
        <input type="button" name="cancel" value=" Cancel " onclick="location.href='update_view_disease.php'" /></td>
      </tr>
    
    </table>
</form>

</fieldset></center>
 
</div>
</body>
</html>