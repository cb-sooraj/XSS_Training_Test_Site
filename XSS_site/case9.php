<!DOCTYPE html>



<head>
<title>ChargeBee XSS Challenges</title>
		<link rel="stylesheet" href="style/font-awesome.min.css">
		<link href="style/bootstrap.min.css" rel="stylesheet">
		<link href="style/front.css" rel="stylesheet">
</head>


<body>
<center>
<fieldset>

<div class="container">
	    <div class="row">
	      <div class="span4"><img class="center-block" src="http://d2jxbtsa1l6d79.cloudfront.net/static/app-static-assets/core/core-2.2.3/images/brand/cn-logotype-black.svg" alt="Chargebee" id="logo"></div>
	      <div class="span4"></div>
	    </div>

<h2>Profile</h2>
</br>
<?php  
if(isset($_COOKIE['user'])){ 
    echo "Hello,{$_COOKIE["user"]}!";  
}else{
	echo "Hello, Guest!";
}?>
<br><br><a href="profile.php">Edit Username</a>
</fieldset>
</center>
</body>
</html>
