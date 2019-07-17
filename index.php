<?php
/*-------------------FILE OPEN AND READ------------------------*/ 
echo "First Step"."<br>";
$myfile = fopen("text.txt", "r") or die("file not found");
echo fread($myfile, filesize("text.txt"))."<br>";
fclose($myfile);
?>



<?php 
/*---------FILE OPEN AND READ ->LINE OR CHARACTER WISE---------*/ 
echo "<br>"."Second Step"."<br>";
$myfile = fopen("text.txt", "r") or die("file not found");
while(!feof($myfile)){
	echo fgets($myfile)."<br>";
}
fclose($myfile);
?>

<?php 
/*-------------------FILE CREATE AND READ------------------------*/ 
echo "<br>"."Thired Step"."<br>";
$createfile = fopen("new.txt", "w") or die("file not found");
$addsomething = "add to new created file";
fwrite($createfile, $addsomething);
fclose($createfile);

?>

<?php
/*-------------------FILE OR IMAGE UPLOAD------------------------*/ 
if(isset($_FILES['mypdf'])){
	$filename = $_FILES['mypdf']['name'];
	$filetmp  = $_FILES['mypdf']['tmp_name'];
	move_uploaded_file($filetmp, "uploadedfile/".$filename);
	echo "file uploaded successfully";

}

?>
<!-----------------------FILE OR IMAGE UPLOADING FORM---------------------->

<form action="" method="POST" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Upload Image</td>
			<td><input type="file" name="mypdf"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Upload"></td>
		</tr>
	</table>
</form>