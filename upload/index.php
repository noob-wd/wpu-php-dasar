<?php
if(isset($_FILES)) {
	$name = $_FILES['berkas']['name'];
	$tmp = $_FILES['berkas']['tmp_name'];
	$dir = "files/";
	$upload = move_uploaded_file($tmp,$dir.$name);
	if($upload){
		echo "berhasil";
	} else{
		echo "gagal";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=	, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		File : <input type="file" name="berkas"/>
		<input type="submit" name="upload" value="upload"/>
	</form>
</body>
</html>