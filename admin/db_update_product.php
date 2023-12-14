<?php
include('../include/dbconn.php');

$i=0;

foreach ( $_POST as $sForm => $value )
{
	$postedValue = htmlspecialchars( stripslashes( $value ), ENT_QUOTES ) ;
    $valuearr[$i] = $postedValue; 
$i++;
}

$path = '\xampp\htdocs\MHGH\assets/';
$pic = $_FILES["img"]["name"];
$tmplocation = $_FILES["file"]["tmp_name"];
  
	if ($pic=='')
    {
      echo $pic . " already exists. ";
	  $update = "UPDATE cookies SET
				product_name='$valuearr[0]',
				details='$valuearr[1]',
				qty='$valuearr[2]',
				product_status='$valuearr[3]',
				product_category='$valuearr[4]',
				price='$valuearr[5]',
				picture='$pic'
				WHERE product_id='$valuearr[7]'";
	//echo $update;
	  $result = mysqli_query($dbconn, $update) or die ("Error: " . mysqli_error($dbconn));
	  if ($result) {
		  
	 ?>
	  <script type="text/javascript">
	   window.location = "update_view_product.php"
	  </script>
	  <?php }
    }
    else
    {
      move_uploaded_file($tmplocation, $path . $pic);

	  $update = "UPDATE cookies SET
				product_name='$valuearr[0]',
				details='$valuearr[1]',
				qty='$valuearr[2]',
				product_status='$valuearr[3]',
				product_category='$valuearr[4]',
				price='$valuearr[5]',
				picture='$pic'
				WHERE product_id='$valuearr[7]'";
	  //echo $update;
	  $result = mysqli_query($dbconn, $update) or die ("Error: " . mysqli_error($dbconn));

	  if ($result) {
	  ?>
	  <script type="text/javascript">
	   window.location = "update_view_product.php"
	  </script>
	  <?php }       
     } 
?>