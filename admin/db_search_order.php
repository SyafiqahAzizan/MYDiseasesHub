<?php 
// Include database connection settings
include('../include/dbconn.php');
include ("../login/session.php");
session_start();
$user = $_SESSION['username'];
if (!isset($_SESSION['username'])) {
        header('Location: ../login');
    } 
/* capture search_order */
$orders_id = $_POST['search_order'];

?>

<!DOCTYPE html>
<html>
<title>SHOP H.O.C</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
<style>
 @import "https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css";


body {
  font-family: "Lato", sans-serif;
  color: #F9A7B0;
  background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('../image/aduse - Copy.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  background-color: #ffffff;
}

.container h1{
  font-size: 45px;
  color: white;
}

.container td{
  padding: 10px;
  color: #F9A7B0;
}

.color tr{
  color: white;
}

.td{
  font-size: 20px;
}

th{
  padding: 8px;
  color: white;
  text-align: center;
}

table{
  padding: 5px;
}

 form{
    padding: 5px;
  }


.topnav {
  overflow: hidden;
  background-color:lightslategrey;
}
/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  font-size: 10px;
}

/* Add an active class to highlight the current page */
.active {
  background-color: #f0bf20;
  color: rgb(10, 10, 10);
}

/* Hide the link that should open and close the topnav on small screens */
.topnav .icon {
  display: none;
}

/* Dropdown container - needed to position the dropdown content */
.dropdown {
  float: left;
  overflow: hidden;
}

.fa-caret-down{
  transform: rotate(0deg);
  transition: transform 1s linear;
}

.fa-caret-down.open{
  transform: rotate(180deg);
  transition: transform 1s linear;
}

img.op{
  filter: brightness(70%);
}

.text{
  background-color: darkgray;
  opacity: 0.8;  
  color: white;
  font-family: Georgia, 'Times New Roman', Times, serif;
  font-size: 70px;
  position: relative;
  margin-top: -350px;
}

.text i{
  position: relative;
  margin-top: -350px;
  margin-left: -20px;
}

/* Style the dropdown button to fit inside the topnav */
.dropdown .dropbtn {
  font-size: 17px;
  font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  border: none;
  outline: none;
  color: rgb(14, 13, 13);
  padding:  0 10px ;
  background-color: inherit;
  margin: 0;
}

/* Style the dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1ecec;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Style the links inside the dropdown */
.dropdown-content a {
  float: none;
  color: rgb(15, 15, 15);
  font-size: 13px;
  padding: 10px 10px;
  font-family:Georgia, 'Times New Roman', Times, serif;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a dark background on topnav links and the dropdown button on hover */
.topnav a:hover, .dropdown:hover .dropbtn {
  color: rgb(14, 13, 13);
}

/* Add a grey background to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
}

/* Show the dropdown menu when the user moves the mouse over the dropdown button */
.dropdown:hover .dropdown-content {
  display: block;
}

/* When the screen is less than 600 pixels wide, hide all links, except for the first one ("Home"). Show the link that contains should open and close the topnav (.icon) */
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

/* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens (display the links vertically instead of horizontally) */
@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive a.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }

}
  </style>

<div id="container">
  <i id="icon" class="fa fa-caret-down"></i>
</div>

  <div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="#home" class="w3-bar-item w3-button"><b>House</b><br> Of Cookies<b></a>
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
          <button class="dropbtn"><a href="" class="w3-bar-item w3-button">C u s t o m e r s <i class="fa fa-caret-down"></i></a>
                  
          </button>
            <div class="dropdown-content">
                <a href="view_user.php">Customers' Details</a>
                <a href="update_view_user.php">Update Customer</a>
                <a href="search_user.php">Search Customer</a>
              </div>
              </div> 
              
         <div class="dropdown">
          <button class="dropbtn"><a href="#projects" class="w3-bar-item w3-button">C o o k i e s <i class="fa fa-caret-down"></i></a>
              
            </button>
            <div class="dropdown-content">
              <a href="add_product.php">Add Cookies</a>
              <a href="view_product.php">View Cookies</a>
              <a href="update_view_product.php">Update Cookies</a>
              <a href="search_product.php">Search Cookies</a>
            </div>
            </div>

            <div class="dropdown">
                <button class="dropbtn"><a href="#projects" class="w3-bar-item w3-button">O r d e r s <i class="fa fa-caret-down"></i></a>
                  
                </button>
                <div class="dropdown-content">
                  <a href="view_order.php">View Customers' Orders </a>
                  <a href="search_order.php">Search Customers Orders</a>
                </div>
                </div>

            <div class="dropdown">
                <button class="dropbtn"><a href="#projects" class="w3-bar-item w3-button">R e p o r t <i class="fa fa-caret-down"></i></a>
         
               </button>
                <div class="dropdown-content">
                  <a href="view_report.php">View Report</a>
                </div>
                </div>

                <a href="../login/logout.php" class="w3-bar-item w3-button">Logout|<i class="fa fa-sign-out"></i></a>
    </div>
  </div>
</div>

<div class="container">
<br><br><br><br>
<center><h1><strong>Search Order Data</strong></h1></center>

<fieldset>
<?php
  $query = "SELECT * FROM orders o, orders_detail od, user u
       WHERE o.orders_id ='$orders_id' AND o.orders_id = od.orders_id AND o.user_id=u.user_id";
  $result = mysqli_query($dbconn, $query) or die ("Error: " . mysqli_error($dbconn));
  $numrow = mysqli_fetch_array($result);
?>

<form name="edit_user" method="POST" action="db_update_order.php">

    <table width="80%" border="1" align="center" bgcolor="#463E3F">
   <tr>
        <td width="16%">Order ID</td>  
        <td width="84%">
     <?php echo ucwords (strtolower($numrow['orders_id'])); ?>
     <input type="hidden" name="id" value=" <?php echo ($numrow['orders_id']); ?> " />
    </td>
      </tr>  
      <tr>
        <td width="16%">Order </td>  
        <td width="84%">Date : <?php echo ucwords (strtolower($numrow['orders_date'])); ?> </td>
      </tr>  
      <tr>
        <td width="16%">Pickup </td>  
        <td width="84%">
    Date : <?php echo ucwords (strtolower($numrow['orders_pickup_date'])); ?> &nbsp;&nbsp;
    Time : <?php echo ucwords (strtolower($numrow['orders_pickup_time'])); ?> 
    </td>
      </tr> 
    <tr>
        <td width="16%">Customer Name</td>
        <td><?php echo ucwords (strtolower($numrow['name'])); ?> </td>
      </tr>
    <tr>
        <td width="16%">Phone No</td>
        <td><?php echo $numrow['phoneNo']; ?></td>
      </tr>
    <tr>
        <td width="16%">Status</td>
        <td><?php echo ucwords (strtolower($numrow['status'])); ?> </td>
      </tr>
    </table>
  
  <br><br>
  
    <?php
    $query1 = "SELECT * FROM orders o, orders_detail od, cookies c WHERE o.orders_id ='$orders_id' AND o.orders_id = od.orders_id AND od.product_id = c.product_id";
    $result1 = mysqli_query($dbconn, $query1) or die ("Error: " . mysqli_error($dbconn));
    $numrow1 = mysqli_num_rows($result1);
  ?>
  
  <table width="80%" border="0" align="center">
  <tr class="color" align="left" bgcolor="FC6C85">
    <th width="3%">No</th>
        <th>Product ID</th>
        <th>Product Name</th> 
        <th>Category</th> 
        <th>Status</th>
        <th>Quantity</th>

      </tr>
    
      <?php

    for ($a=0; $a<$numrow1; $a++) {
    $row1 = mysqli_fetch_array($result1);
    
  
      echo "<tr bgcolor='#463E3F'>"
    ?>
        <td>&nbsp;<?php echo $a+1; ?></td>
        <td>&nbsp;<?php echo ucwords (strtolower($row1['product_id'])); ?></td>
    <td>&nbsp;<?php echo ucwords (strtolower($row1['product_name'])); ?></td>
    <td>&nbsp;
          <?php 
          if ($row1['product_category']==1) 
            echo "Hari Raya ";
          else if ($row1['product_category']==2)
            echo "Chinese New Year";
          else
            echo "Christmas";
      ?>
    </td>   
    <td>&nbsp;
      <?php 
          if ($row1['product_status']==1) 
            echo "Available";
          else
            echo "Not Available";
      ?>    
    </td> 
    <td>&nbsp;<?php echo ucwords (strtolower($row1['quant'])); ?></td>  
       </tr> 
            <?php 
      
     }
      ?>  
    <tr> 
        <td colspan="4">&nbsp;</td>
      </tr>
      <tr> 
        <td colspan="4">
      <?php 
          if ($row1['status']=='processing') 
            echo "<input type='submit' name='submit' value=' Verify Order ' />";
          else
            echo "";
      ?>  
  
        <input type="button" name="cancel" value=" Back " onclick="location.href='view_order.php'" /></td>
      </tr>
    </table>
  
  
</form>

</fieldset>

</div>
   
</body>

</html>