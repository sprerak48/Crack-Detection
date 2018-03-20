<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    
<style>
       body{
            background-image: url(../img/t.jpg.v1.jpg);
            background-attachment: inherit;
            max-width: inherit;
            max-height: inherit;
        }
img:hover {
    box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
}
      
div.gallery {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}
h3{
    text-align: justify;
    text-justify: inter-word;
}
/* blink */
@import "compass/css3";

/*Be sure to look into browser prefixes for keyframes and annimations*/
.flash {
   animation-name: flash;
    animation-duration: 0.8s;
    animation-timing-function: linear;
    animation-iteration-count: infinite;
    animation-direction: alternate;
    animation-play-state: running;
}

@keyframes flash {
    from {color: cyan;}
    to {color: black;}
}

    </style>
    
    </head>
</html>

<?php
/*
 include('conn.php');
$sqlimage  = "SELECT image FROM img where `id` = 1";
$imageresult1 = mysql_query($sqlimage);

while($rows = $sqlimage->fetch_assoc($imageresult1))
{
    $image = $rows['image'];
    echo "<img src='$image' >";
    echo "<br>";
} 
*/
/*
$db = mysqli_connect("localhost","root","","img"); 
$sql = "SELECT * FROM imgprocess WHERE id = 1";
$sth = $db->query($sql);
$result=mysqli_fetch_array($sth);
echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['image'] ).'"/>';
*/

?>

  <?php
        //Include database configuration file
         include('conn.php');
include('compareImages.php');
//include('autoclue.php');

        //get images from database
  /*      $query = $conn->query("SELECT * FROM imageprocess");
        
        if($query->num_rows > 0){
            while($row = $query->fetch_assoc()){
                $imageThumbURL = 'Upload/img'.$row["name"];
                $imageURL = 'Upload/img'.$row["name"];
        ?>
            <a href="<?php echo $imageThumbURL; ?>" data-fancybox="group"  >
                <img src="<?php echo $imageThumbURL; ?>" height="200px" width="200px" alt="" />
            </a>
        <?php }
        } 
*/

 $query =$conn->query( "SELECT * FROM counter where id='2'");//selected random 
 $row = $query->fetch_assoc();    
/* Get hash string from image*/
 $id = $row['count'];

 $queryp =$conn->query( "SELECT * FROM counter where id='3'");//points
 $rowp = $queryp->fetch_assoc();    
 $point = $rowp['count'];

 $query2 = $conn->query("SELECT * FROM imgdata where id=$id");
 $row2 = $query2->fetch_assoc();
 

$image1 = 'Upload/img'.$row2["name"];
$compareMachine = new compareImages($image1);
$image1Hash = $compareMachine->getHasString(); 
/*echo "Image 1: <img src='$image1'/><br/>";
echo 'Image 1 Hash :'.$image1Hash.'<br/>';*/
 
$query1 = $conn->query("SELECT * FROM imgup ORDER BY id DESC LIMIT 1");
$row1 = $query1->fetch_assoc();
                
                
/* Compare this image with an other image*/
$image2 = 'capupload/img'.$row1["name"];
//$diff = $compareMachine->compareWith($image2); //easy
$image2Hash = $compareMachine->hasStringImage($image2); 
$diff = $compareMachine->compareHash($image2Hash); 
/*echo "Image 2: <img src='$image2'/><br/>";
echo 'Image 2 Hash :'.$image2Hash.'<br/>';
echo 'Different rates (image1 Vs image2): '.$diff;*/
if($diff>11){
      $point = $point - 5;
        echo $point;
     $sql_id=$conn->query("UPDATE counter SET count = $point where id='3'"); 
    //echo ' => 2 different image';?>
    <h1 class="flash" style="text-align: center;font-size: 70px">HARD LUCK&#9785;</h1>
 <h1 class="flash" style="text-align: center;font-size: 70px"><?php echo $point ?></h1>
<form method="POST" action='autoclue.php'>
    <input type="submit" value="Next" name="butt" align="center" class="w3-button w3-black" style="border-radius: 12px;padding: 15px 32px; font-size: 30px;margin: 4px 2px; cursor: pointer;"/>  </form>
  <div class='container'><div class='gallery'>
<img class="img-responsive" src="<?php echo $image2 ?>" alt="Chania" id = "img1" width="500" height="200"> <div class='desc'><b>Image 1:</b></div></div>
       <div class='gallery'>  <img class="img-responsive" src="<?php echo $image1 ?>" alt="Chania" id="img2" width="500" height="200"><div class='desc'><b>Captured Image 2:</b></div></div></div>
    
<?php
      
}
else{
    
       $point = $point + 10;   
     echo $point;
    
    $sql_id=$conn->query("UPDATE counter SET count = $point where id='3'"); 
    //echo ' => duplicate image<br/>';
  /*  $query1 = $conn->query("SELECT * FROM data where id='$id'");*/
    ?><h1 class="flash" style="text-align: center;font-size: 70px">NICE JOB&#9787;</h1>
<h1 class="flash" style="text-align: center;font-size: 70px"><?php echo $point ?></h1>
<html><body>
      
      
      
      
      <div class='container'><div class='gallery'>
<img class="img-responsive" src="<?php echo $image2 ?>" alt="Chania" id = "img1" width="500" height="200"> <div class='desc'><b>Image 1:</b></div></div>
       <div class='gallery'>  <img class="img-responsive" src="<?php echo $image1 ?>" alt="Chania" id="img2" width="500" height="200"><div class='desc'><b>Captured Image 2:</b></div></div></div> </body></html>
<!--
    echo "<div class='container'><div class='gallery'> <br/><img src='$image1' id='img1' class='img-responsive' align='left' style='width: 100%;height: auto;'/><br/></br></br> <div class='desc'>Image 1:</div></div></div>";

    
    echo "<div class='container'><div class='gallery'></p> <br/></br><img src='$image2' id='img2' class='img-responsive' align='right'/><br/><div class='desc'>CAPTURED Image 2:</div></div></div>";--><?php
  //  echo 'Image 1 Hash :'.$image1Hash.'<br/>';
//echo 'Image 2 Hash :'.$image2Hash.'<br/>';
  
    $result = mysqli_query($conn,"SELECT * FROM data where id='$id'");
/*
echo "<table border='10'>
<tr>
<th>Inventory ID</th>
<th>TITLE</th>
<th>Description</th>
<th>Period</th>
<th>City</th>
<th>Gallery</th>
<th>Dimensions</th>
<th>Artist</th>
<th>Material</th>
<th>Accession_no</th>
<th>Clue</th>


</tr>";*/
    
while($roww = mysqli_fetch_array($result))
{/*
echo "<tr>";
echo "<td>" . $roww['inventory_id'] . "</td>";
echo "<td>" . $roww['title'] . "</td>";
echo "<td>" . $roww['description'] . "</td>";
echo "<td>" . $roww['period'] . "</td>";
echo "<td>" . $roww['city'] . "</td>";
echo "<td>" . $roww['gallery'] . "</td>";
echo "<td>" . $roww['dimension'] . "</td>";
echo "<td>" . $roww['artist'] . "</td>";
echo "<td>" . $roww['material'] . "</td>";
echo "<td>" . $roww['accession_no'] . "</td>";
echo "<td>" . $roww['clue'] . "</td>";
echo "</tr>";*/
    
$title = $roww['title'];
$desc =  $roww['description'] ;
$period = $roww['period'];
$city = $roww['city'];
$gallery = $roww['gallery'];
$dimension = $roww['dimension'];
$artist = $roww['artist'];
$material = $roww['material'];
$accession_no = $roww['accession_no'];
$clue = $roww['clue'];
}
?>

<html>
<body>

        <div class="w3-container">
            <div style='float: left;'>
  <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black" style="border-radius: 12px;padding: 15px 32px; font-size: 30px;margin: 4px 2px; cursor: pointer;"><b>Details</b></button>

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content">
      <div class="w3-container">
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        <h1 style="background-color: cyan; text-align: center;text-shadow: 3px 2px white;text-transform: uppercase; font-family:verdana;font-size: 300%;"><b><?php echo $title ?></b></h1>
        <h2><b>*</b> Description:<br></h2><h3>&nbsp;&nbsp;&nbsp;<?php echo $desc ?></h3><br>
          <h2><b>*</b> Period:</h2><h3>&nbsp;&nbsp;&nbsp;<?php echo $period ?></h3><br>
          <h2><b>*</b> City:</h2><h3>&nbsp;&nbsp;&nbsp;<?php echo $city ?></h3><br>
          <h2><b>*</b> Gallery:</h2><h3>&nbsp;&nbsp;&nbsp;<?php echo $gallery ?></h3><br>
          <h2><b>*</b> Dimension:</h2><h3>&nbsp;&nbsp;&nbsp;<?php echo $dimension ?></h3><br>
          <h2><b>*</b> Artist:</h2><h3>&nbsp;&nbsp;&nbsp;<?php echo $artist ?></h3><br>
          <h2><b>*</b> Material:</h2><h3>&nbsp;&nbsp;&nbsp;<?php echo $material ?></h3><br>
          <h2><b>*</b> Accession Number:</h2><h3>&nbsp;&nbsp;&nbsp;<?php echo $accession_no ?></h3><br>
          <h2><b>*</b> Clue:</h2><h3>&nbsp;&nbsp;&nbsp;<?php echo $clue ?></h3><br>
          
      </div>
    </div>
  </div>
</div>
  <div></div>
    <div style='float: right;'>
<form method="POST" action='autoclue.php'>
    <input type="submit" value="Next" name="butt" align="center" class="w3-button w3-black" style="border-radius: 12px;padding: 15px 32px; font-size: 30px;margin: 4px 2px; cursor: pointer;"/>  </form></div></div>

      <div style='float: left;'>      
<form method="POST" action='reset.php'>
    <input type="submit" value="QUIT" name="butt" align="center" class="w3-button w3-black" style="border-radius: 12px;padding: 15px 15px; font-size: 20px;margin: 4px 2px; cursor: pointer;"/> </form></div></div>
    </body>
</html>
<?php } ?>