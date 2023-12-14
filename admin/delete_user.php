<?php
	include('../include/dbconn.php');
	include ("../login/session.php");
	session_start();
	
	if (!isset($_SESSION['username'])) {
			header('Location: ../login');
		} 
	  
	
	$id=$_GET['service_id'];
	
	$delete = "DELETE FROM services WHERE service_id='$id'";
	$result = mysqli_query($dbconn, $delete) or die ("Error: " . mysqli_error($dbconn));

	
	if ($result) {
	  ?>

    <script>
    alert('Successfully deleted.')
	  	window.location = "update_view_disease.php"
	  </script>
	  <?php }
    
    else
    {
	?> 
	  <script> echo "Error deleting record: " . mysqli_error($conn);
	  </script>
	<?php       
     } 
	
?>