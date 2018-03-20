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






a:hover{text-decoration:none;}


 
        td.a{
    border-style:solid;
    border-width:3px;
    border-color:gainsboro;
    padding:10px;
    }
       /* table{
           position:fixed;
           top:50%;
           left:80%; 

            /*Alternatively you could use: */
           /*
              position: fixed;
               bottom: 50%;
               right: 50%;
           */
        /*}*/
       /* table  {
             position: absolute;
    top: 50%;
    left: 50%;
    margin-left: -75px;
    width: 150px;
    margin-top: -25px;
    height: 50px;
        }*/
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
        .services{
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
        html,body{
            height: 100%;
             width: 100%;
        }
    </style>
</head>
<body style=" overflow: scroll;">
    
<nav class="navbar navbar-default navbar-fixed-top" style="background:#eeefc6">
  	<div class="container-fluid">
    	<div class="navbar-header">
      		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>                        
      		</button>
	      	<a class="navbar-brand" href="index.php">
          		<span class="glyphicon glyphicon-leaf" style="font-size:2.5em"></span>
      		</a>
		<a class="navbar-brand" href="#">
          		<span><i style="font-size:8px;letter-spacing:5px">@My App</i><br> i ADMINSTRATOR</span>
      		</a>
 	</div>
    	<div class="collapse navbar-collapse" id="myNavbar">
	      	<ul class="nav navbar-nav navbar-right">
        		<li ><p style="margin-top:10%;">ADMINSTARTOR<br><i style="font-size:8px;letter-spacing:5px">lakshmaji inno's</i></p></li>
        		<li><a href="login/logout.php"><span class="glyphicon glyphicon-off" style="font-size:2.5em"></span></a></li>
      		</ul>
    	</div>
  	</div>
</nav>
    <div class="fix_nav">
</div>
<div class="container">
<div class="row ">

</div>
</div>
 <form method="post" enctype="multipart/form-data">
     <div style="width: 50%; float:right">
<table id="tbl" width="450" border="0" cellpadding="1" cellspacing="1" class="box" align="center">

                                                      </table>
                                                      </div>
      <div style="width: 50%;">       
  <table>
    <tr>
        <td width="100" class="a"><h3><strong>Image</strong></h3></td>
    <td width="246" class="a">
        <input type='file' name='file' />
        </td>
        <td width="80" class="a">
        <input type='submit' value='Save Image' name='but_upload'>
        </td>
    
    </tr>
          </table>
     </div>                                                    
</form>
								
	<script src="../assets/js/bootstrap.js"></script>
</body>
</html>

