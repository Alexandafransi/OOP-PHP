<?php
	include'Person.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php

		$My_object=new Personal();

		echo $My_object->get_Myname();

		// echo $My_object->$name;

		// echo Personal::$name;

		// Personal::set_Myname("alexis");
		// echo Personal::$name;
	?>

</body>
</html>