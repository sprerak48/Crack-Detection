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
            background-image: url(../jaipur/img/t.jpg.v1.jpg);
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
    max-width: auto;
    max-height: auto;
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
    from {color: white;}
    to {color: black;}
}

    </style>
    
    </head>
</html>


<?php
include('conn.php');

$query1 = $conn->query("SELECT name FROM img_up ORDER BY id DESC LIMIT 1");
$row1 = $query1->fetch_assoc();
$name = $row1["name"];
              
$image1 = '../jaipur/CompareImage-master/capupload/img'.$row1["name"];
//echo "CRACK IMAGES: <img src='$image1'/><br/>";

//$name = $row1["name"];

$query2 = $conn->query("SELECT * FROM img_data where name='$name'");
$row2 = $query2->fetch_assoc();
 

$image2 = '../jaipur/CompareImage-master/Upload/img'.$row2["name"];

//echo "EDGE DETECTED IMAGE: <img src='$image2'/><br/>";

?>

<html><body>
      <div class='container'><div style='float: left;'> 
               <h1 class="flash" style="font-size: 50px">CRACKED IMAGE</h1>
           <div class='gallery'>
<img class="img-responsive" src="<?php echo $image1 ?>" alt="Chania" id = "img1"  width="500" height="200"> </div></div>
          <div style='float: right;'>
             <h1 class="flash" style="font-size: 50px">EDGE DETECTED</h1>
       <div class='gallery'>  <img class="img-responsive" src="<?php echo $image2 ?>" alt="Chania" id="img2"  width="500" height="200"><div class='desc'></div></div></div></div>
    <div class='container'>
    <div style='float: right;'>
<form method="POST" action='../jaipur/CompareImage-master/capcam/index.php'>
    <input type="submit" value="Next" name="butt" align="center" class="w3-button w3-black" style="border-radius: 12px;padding: 15px 32px; font-size: 30px;margin: 4px 2px; cursor: pointer;"/>  </form></div>

      <div style='float: left;'>      
<form method="POST" action='index.php'>
    <input type="submit" value="HOME" name="butt" align="center" class="w3-button w3-black" style="border-radius: 12px;padding: 15px 32px; font-size: 30px;margin: 4px 2px; cursor: pointer;"/> </form></div></div>
    
    </body></html>