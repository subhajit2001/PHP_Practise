<?php
//upload_image_in_table.php
error_reporting(0);
?>
<!Write Html code to upload images in a 
folder using php code>
<html>
	<body bgcolor=#00aa55>
	<font face=times new roman size=6 color=#000000>
	<form action="" method="post" enctype="multipart/form-data">
	<pre>Enter id=<input type=number name=id size=3>
	<pre>Enter Name=<input type=text name=name1 size=30>
	<pre><input type="file" name="uploadfile" value="">
	<pre><input type="submit" name="submit" value="Upload File">
	</form>
	</body>
</html>

<?php
	if($_POST['submit'])
	{

    $connection=mysqli_connect('127.0.0.1','root','','photos');
		if($connection)
		{
		echo "Data base connected".'<br>';
		}
		else
		{
		echo "***Data base can not be connected.***".'<br>';
		}
	$id=$_POST["id"];
	$name1=$_POST["name1"];
	$filename=$_FILES["uploadfile"]["name"];
	$tempname=$_FILES["uploadfile"]["tmp_name"];
	$folder="picture_folder/".$filename;
	echo "Tempname=".$tempname.'<br>';
	echo "folder=".$folder.'<br>';
	move_uploaded_file($tempname,$folder);
	echo "Name of folder=".$folder.'<br>';
		if($id!="" && $name1 !="" && $filename!="" )
		{
		$sql="INSERT INTO image  VALUES('$id','$name1','$folder')";
		$result=mysqli_query($connection,$sql);
			if($result)
			{
			echo "Data added in image folder".'<br>';
			echo "<a href='$filename'><img src='$filename' height='200' width='200' border='5'></a>";
			}
			else
			{
			echo "Data not added in image".'<br>';
			}
		}
		else
		{
		echo "Check all fields you have not entered".'<br>';
		}
	}
?>

