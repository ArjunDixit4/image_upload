<html>
	<head>
		<title>Uploading images</title>

		<style type="text/css">
			#image{
				background-color:yellow ;
			}
            #flex{
            	display: flex;
            	grid-row: 0px;
            }
		</style>
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	</head>
	
<body>
	<div class="container">
  <div id="image">
	<form action="upload_image.php" method="post" enctype="multipart/form-data" class="image">
		<!-- <table>
			<tr><input type="file" name="image"></tr>
			<tr><input type="submit" name="upload" value="Upload Now"></tr>
		</table> -->
		<div id="flex">
			<input type="file" name="image">
			<input type="submit" name="upload" value="Upload Now">
		</div>
		<br>
		<br>
	<!-- 	Select Image:<input type="file" name="image"><br /><br /> -->
		<!-- Description:<input type="text" name="desc"><br /><br /> -->
	<!-- 	<input type="submit" name="upload" value="Upload Now"> -->
		<?php
			if(isset($_POST['upload'])){
	$image_name = $_FILES['image']['name'];
	$image_type = $_FILES['image']['type'];
	$image_size = $_FILES['image']['size'];
	$image_tmp_name= $_FILES['image']['tmp_name'];
move_uploaded_file($image_tmp_name,"photos/$image_name");

		echo "<img src='photos/$image_name' text-decoration: none;
                                -ms-interpolation-mode: bicubic;
                                height: auto;
                                border: 0;
                                width: 100%;
                                max-width: 94px;
                                display: block;

                                margin-right: 24px;
                              width=94px; >";

}
		?>
	</form>
	</div>
</div>
	<!-- <hr style="border:2px solid green;"> -->
<!--<?php
	if(isset($_POST['upload'])){
	$image_name = $_FILES['image']['name'];
	$image_type = $_FILES['image']['type'];
	$image_size = $_FILES['image']['size'];
	$image_tmp_name= $_FILES['image']['tmp_name'];
	// $desc = $_POST['desc'];
		

	move_uploaded_file($image_tmp_name,"photos/$image_name");

		echo "<img src='photos/$image_name' width='100' height='50'><br>";

	
			
			
}
?>-->
</body>
</html>