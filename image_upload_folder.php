<?php 
//cmsasem4_image_upload.php : Write aq program to upload
//image in a folder under htdocs.
error_reporting(0);
?>
<!Write html code to upload images in a folder using PHP program >
<html>
	<body bgcolor=#00aa55>
	<font face=times new roman size=6 color=#000000>
	<form action="" method="post" enctype="multipart/form-data">
	<input type="file" name="uploadfile" value="">
	<input type="submit" name="submit" value="Upload Image">
	</form>
	</body>
</html>
<?php
$filename=$_FILES["uploadfile"]["name"];
$tempname=$_FILES["uploadfile"]["tmp_name"];
$folder="picture_folder/".$filename;
move_uploaded_file($tempname,$folder);
echo "<a href='$filename'><img src='$folder' height=100 width=100 border=3></a>".'<br>';
echo $folder;
?>