<!DOCTYPE html>

<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style type="text/css">
	form{
		text-align: center;
	}
	form label{
		color: white;
		margin: 10px;
	}
	form input{
		border-radius: 10px;
		border: 0px; 
		margin: 10px;
	}
	h1{
		color: #A8A8A8;
		text-align:center;  
		font-weight:bold;
	}
	p{
		color:  #A8A8A8;
		font-family:courier; 
		font-weight:normal; 
	}
	.identitas p{
		color: white;
		margin: 0px;
	}
</style>
</head>

<?php 

$target_dir = "assets/";
$target_file = $target_dir . basename($_FILES["foto"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
	$check = getimagesize($_FILES["foto"]["tmp_name"]);
	if($check !== false) {
		if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {

		} else {
			echo "Sorry, there was an error uploading your file.";
		}
	} else {
		echo "File is not an image.";
		$uploadOk = 0;
	}
}
?>
<body style="background-color:rgb(141, 99, 71);">
	<div class="nav navbar-default" style="background-color: #8D6347; border-bottom: 1px solid white;">
		<div class="col-md-1">
			<img class="nav navbar-brand " src="cafe_universe.png">
		</div>
		<span class="navbar-text col-md-9" style="color: white; text-align: center;">
			<p style="line-height: 10px;"> WE ARE ONE </p>
			<p style="line-height: 10px;"> EXO-K + EXO-L + EXO-M = ONE </p>
		</span>
		<div class="" style="padding: 0px; border: 1px solid red; margin: 0px;">
			<ul class="nav navbar-nav navbar-right" style="padding: 0px;margin: 0px;">
				<li><a href="#" style="color: white;"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
				<li><a href="#" style="color: white;"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			</ul>	
		</div>
	</div>f
	<div class="col-md-8 col-md-push-2" style="margin: 20px;">
		<div class="col-md-12">
			<div class="col-md-3">
				<img src=<?php echo "\"assets/".$_FILES['foto']['name']."\""?> style="width: 100%; border-radius: 100%;">
			</div>
			<div class="col-md-9 identitas" style="text-align: left;">
				<p style="font-size: 2em;"><?php echo $_POST['firstname']," ", $_POST['lastname']?></p>
				<p style="border-bottom: 1px solid white; padding: 10px;"><?php echo $_POST['email'] ?></p>
				<p style="border-bottom: 1px solid white; padding: 10px;"><?php echo $_POST['jenis'] ?></p>
			</div>
		</div> 
	</div>

</body>
</html>