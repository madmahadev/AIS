<html>
</head>
<title>
	Manage Irrigation
</title>
<script type="text/javascript">
function sure(){
  return(confirm("Are You sure want to have water on this plat"));
}
</script>
<style>
.transbox
{
 
  
  border: 1px solid black;
  //opacity:0.3;
  //filter:alpha(opacity=60); /* For IE8 and earlier */
  background: url(img/structure.jpg);
 
  width:820px;
  height:461px;
  margin-top: 7%;
 
}

</style>
</head>


<?php
include 'header.php';

session_start();


?>

<center>
<div class="transbox">
	
  <form action="turnOn.php?motor=1" onSubmit="return sure();">
    <input type="submit" value="Turn On To This Plot" style="margin-left:-40%;margin-top:15%">
    </form>
    
    <form action="turnOn.php?motor=2"onSubmit="return sure();">
    <input type="submit" value="Turn On To This Plot" style="margin-left:40%;margin-top:-6%">
    </form>
    
    <form action="turnOn.php?motor=3"onSubmit="return sure();">
    <input type="submit" value="Turn On To This Plot" style="margin-left:40%;margin-top:15%">
    </form>

    <form action="turnOn.php?motor=4"onSubmit="return sure();">
    <input type="submit" value="Turn On To This Plot" style="margin-left:-40%;margin-top:-6%">
    </form>

</div>
</center>
<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>