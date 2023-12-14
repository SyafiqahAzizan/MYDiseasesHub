<?php 
// Include database connection settings
include('../include/dbconn.php');
include ("../login/session.php");
session_start();
$user = $_SESSION['username'];
if (!isset($_SESSION['username'])) {
        header('Location: ../login');
    } 
/* capture search_name */
$namesearch = $_POST['search_name'];

/* execute SQL statement 
$sql= "(SELECT * FROM user WHERE name LIKE '$namesearch' )";
$query = mysqli_query($dbconn, $sql) or die ("Error: " . mysqli_error());
$row = mysqli_num_rows($query);
if($row == 0){
echo "No record found";
}
else{
$r = mysqli_fetch_assoc($query);
$name= $r['name'];
$password= $r['password'];
}*/
?>

<!DOCTYPE html>
<html>
<title>Admin-MyDisease Hub</title>
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
  <a href="../index.html" class="w3-bar-item w3-button"><b>MyDisease Hub<b></a>
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
          <button class="dropbtn"><a href="#projects" class="w3-bar-item w3-button">More Disease<i class="fa fa-caret-down"></i></a>
              
            </button>
            <div class="dropdown-content">
              <a href="add_more_disease.php">Add Disease</a>
              <a href="view_more_disease.php">View Disease</a>
              <a href="update_view_disease.php">Update Disease</a>
              <a href="search_disease.php">Search Disease</a>
            </div>
            </div>

            <div class="dropdown">
                <button class="dropbtn"><a href="#projects" class="w3-bar-item w3-button">T o p D i s e a s e<i class="fa fa-caret-down"></i></a>
                  
                </button>
                <div class="dropdown-content">
                  <a href="view_order.php">View Disease Counts</a>
                  <a href="update_view_order.php">Update Disease Counts</a>
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
<center><h1><strong>Disease Data</strong></h1></center>
  <?php
    
    /* execute SQL statement */
    $query= "(SELECT * FROM services WHERE title LIKE '%$namesearch%' )";
    $result = mysqli_query($dbconn, $query) or die ("Error: " . mysqli_error($dbconn));
    $numrow = mysqli_num_rows($result);
    
  ?>

   <tr align="left" bgcolor="">
    <td>
    <table width="80%" border="1" align="center" cellpadding="0" cellspacing="0">
      <tr align="left" bgcolor="#02919b">
        <th width="3%">NO</td>
        <th width="26%">NAME</td>       
        <th width="9%">ICON</td>
        <th width="27%">DESCRIPTION</td>
      </tr>

       <?php
    $color="1";
    
    for ($a=0; $a<$numrow; $a++) {
    $row = mysqli_fetch_array($result);
    
    if($color==1){
      echo "<tr bgcolor='#60d5dd'>"
    ?>
        <td>&nbsp;<?php echo $a+1; ?></td>
        <td>&nbsp;<?php echo ucwords (strtolower($row['title'])); ?></td>   
        <td><?php echo ucwords (strtolower($row['icon'])); ?></td>
        <td>&nbsp;<?php echo $row['description']; ?></td>
       </tr> 
      <?php 
       $color="2";}
     else{
     echo "<tr bgcolor='#5efaac'>"
    ?>
        <td>&nbsp;<?php echo $a+1; ?></td>
        <td>&nbsp;<?php echo ucwords (strtolower($row['title'])); ?></td>   
        <td><?php echo ucwords (strtolower($row['icon'])); ?></td>
        <td>&nbsp;<?php echo $row['description']; ?></td>
      </tr>
     <?php
      $color="1";
     }
    } 
    if ($numrow==0)
      {
     echo '<tr>
            <td colspan="8"><font color="#FF0000">No record available.</font></td>
         </tr>'; 
    }
    ?>
    </table>
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</fieldset>
 
    
</div>
   
</body>

</html>