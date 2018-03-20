<?php
 include 'conn.php';
$sql = "select * from imageprocess";
$result = mysqli_query($conn,$sql);



$row = mysqli_fetch_array($result);

$image = $row['name'];
$image_src = "upload/images".$image;

?>
<img src='<?php echo $image_src;  ?>' >
