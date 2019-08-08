<?php
	include'ParentClass.php';
	include'Myclass.php';
$my_object = new Myclass();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
		echo $my_object->name();
		//echo "xcvcxvcxv";
	?>

</body>
</html>