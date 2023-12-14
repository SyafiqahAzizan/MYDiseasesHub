<?php 
// Include database connection settings
include('../include/dbconn.php');

include ("../login/session.php");
session_start();

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
          <button class="dropbtn"><a href="#projects" class="w3-bar-item w3-button">M o r e D i s e a s e<i class="fa fa-caret-down"></i></a>
              
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
<center><h1><strong>More Disease Content</h1></strong></center>
<?php
$query = "SELECT * FROM services WHERE service_id != 1000 ORDER BY title";
$result = mysqli_query($dbconn, $query);

if (!$result) {
    die("Error: " . mysqli_error($dbconn));
}

$numrow = mysqli_num_rows($result);?>

   <tr align="left" bgcolor="">
    <td>
    <table width="80%" border="1" align="center" cellpadding="0" cellspacing="0">
      <tr align="center" bgcolor="#3fc05f">
        <th width="3%">NO</td>
        <th width="23%">TITLE</td>  
        <th width="16%">ICON TYPE</td>     
        <th width="27%">DESCRIPTION</td>
      
        <th align="center">ACTION</td>
      </tr>
    
      <?php
    $color="1";
    
    for ($a=0; $a<$numrow; $a++) {
    $row = mysqli_fetch_array($result);
    
    if($color==1){
      echo "<tr bgcolor='#d1f7fd'>"
    ?>
        <td>&nbsp;<?php echo $a+1; ?></td>
        <td>&nbsp;<?php echo ucwords (strtolower($row['title'])); ?></td>   
        <td>&nbsp;<?php echo $row['icon']; ?></td>
        <td><?php echo ucwords (strtolower($row['description'])); ?></td>
        <td width="5%" align="center"><a class="one" href="detail_more_disease.php?id=<?php echo $row['service_id'];?>">Detail</a></td>
      </tr> 
      <?php 
       $color="2";}
     else{
     echo "<tr bgcolor='#d1f7fd'>"
    ?>
        <td>&nbsp;<?php echo $a+1; ?></td>
        <td>&nbsp;<?php echo ucwords (strtolower($row['title'])); ?></td>   
        <td>&nbsp;<?php echo $row['icon']; ?></td>
        <td><?php echo ucwords (strtolower($row['description'])); ?></td>
        <td width="5%" align="center"><a class="one" href="detail_more_disease.php?id=<?php echo $row['service_id'];?>">Detail</a></td>
      </tr>
     <?php
      $color="1";
     }
    } 
    if ($numrow==0)
      {
     echo '<tr>
            <td colspan="8"><font color="#FAAFBE">No record available.</font></td>
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





   
   
</div>
   
</body>
</html>