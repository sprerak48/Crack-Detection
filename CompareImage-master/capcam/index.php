<?php
include("Upload/img_upload.php");
?>
<html>
<head>
    <title>ADMIN</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/main.css">
    <!--<link rel="stylesheet" href="../assets/css/upload.css">-->
	<script src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/upload.js"></script>
	<link rel="stylesheet" href="assets/css/v.css">
    <style>
      <meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		html,body{width:100%;height:100%;}
                .fix_nav{margin-top:10%;}
		.win_by_lakshmaji{padding:3em 0em;text-align: center;margin:1.5em 1em;text-shadow:5px 5px 10px black;font-size:18px;}
.wrapper{line-height:12;}



@media (min-width: 300px){
  html,body{
      
            background-image: url(../img/t.jpg.v1.jpg);
            background-attachment: inherit;
            max-width: inherit;
            max-height: inherit;
    }
table {
    margin: 0 auto;
}
    
}



a:hover{text-decoration:none;}
table {
    margin: 0 auto;
}

 
        td.a{
    border-style:solid;
    border-width:3px;
    border-color:gainsboro;
    padding:10px;
    }
     
        h3{
            color: azure;
        }

    input[type=submit] {
    width: 100%;
    background-color: tomato;
    color: white;
    padding: 14px 10px;
    margin: 4px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
     input[type=file] {
    width: 100%;
    background-color: tomato;
    color: white;
    padding: 14px 10px;
    margin: 4px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
      
 input[type=hidden] {
    width: 100%;
    background-color: pink;
    color: white;
    padding: 14px 10px;
    margin: 4px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
  
        input[type=submit]:hover {
    background-color:maroon;
}
      
    </style>
</head>
<body>
    <div class="fix_nav">
</div>
<div class="container">
<div class="row ">

</div>
</div>
 <form method="post" enctype="multipart/form-data">
  
      <div style="width: 100%; float:middle">
    <table style="float:center">
    <tr>
        <td width="100" class="a"><h3><strong> Capture Image</strong></h3></td></tr>
    <tr>
    <td width="246" class="a">
         <input type="file" accept="image/*" capture="camera" name="file">
        </td></tr>
        <tr>
        <td width="180" class="a">
            <input type='submit' value='CONTINUE' name='but_upload'>
        </td>   
    </tr>
</table>
     </div>                                                    
</form>
								
	<script src="../assets/js/bootstrap.js"></script>
</body>
</html>

