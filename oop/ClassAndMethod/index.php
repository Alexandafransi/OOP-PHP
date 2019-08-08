<?php
include'Personal.php';

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

		<?php

			$My_object=new Personal();
			$My_object->set_name("alexanda");
			echo $My_object->name;
			echo " ";

			$My_object1=new Personal();
			$My_object1->set_gender("Male");
			echo $My_object1->gender;
			echo " ";

			$My_object2=new Personal();
			$My_object2->set_age("23");
			echo $My_object2->age;

		?>
</body>
</html>