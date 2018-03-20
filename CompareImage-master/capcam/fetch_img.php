<?php
 $host="localhost";
 $username="root";    			// specify the sever details for mysql
 $password="";
 $database="iadmin";
$conn= mysqli_connect($host,$username,$password, $database);
$sql = "select * from images_upload";
$result = mysqli_query($conn,$sql);



$row = mysqli_fetch_array($result);

$image = $row['name'];
$image_src = "upload/images".$image;

?>
<img src='<?php echo $image_src;  ?>' >
