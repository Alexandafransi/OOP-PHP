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
			$My_object=new Person("Alexanda","Francis","Malecha");
			unset($My_object);
			echo $My_object->get_FirstName();
			echo $My_object->get_SecondName();
			echo $My_object->get_LastName();

		?>
</body>
</html>