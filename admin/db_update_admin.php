<?php
include('../include/dbconn.php');

$i=0;

foreach ( $_POST as $sForm => $value )
{
	$postedValue = htmlspecialchars( stripslashes( $value ), ENT_QUOTES ) ;
    $valuearr[$i] = $postedValue; 
$i++;
}
	  $update = "UPDATE admin SET
				name='$valuearr[0]',
				email='$valuearr[1]',
				phoneNo='$valuearr[2]',
				address='$valuearr[3]',
				username='$valuearr[4]',
				password='$valuearr[5]'
				WHERE username='$valuearr[4]'";
	  //echo $update;
	  $result = mysqli_query($dbconn, $update) or die ("Error: " . mysqli_error($dbconn));

	  if ($result) {
	  ?>
	  <script type="text/javascript">
	  	window.location = "update_view_admin.php"
	  </script>
	  <?php }       
?>