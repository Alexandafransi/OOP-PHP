<!-- put in ./www directory -->

<?php
include_once('database.php');
$id=$_GET['id'];
$res=$database->read($id);
$row=mysqli_fetch_assoc($res);
if(isset($_POST) & !empty($_POST)){
    $fullname = $_POST['fullname'];
	$gender = $_POST['gender'];
    $username = $_POST['username'];
    $email =$_POST['email'];
    $photo=$_FILES['image']['name'];
    $upload="uploads/".$photo;
    move_uploaded_file($_FILES['image']['tmp_name'], $upload);
    $res= $database->update($fullname, $gender, $username, $email, $upload,$id);

        if($res){
	 	echo "Successfully updated data";
	}else{
	 	echo "failed to update data";
	}

}
?>
<html>
 <head>
  <title>Hello...</title>

  <meta charset="utf-8"> 

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<style>

 
</style>
<body style="background-color:#819FF7;"> 

    <nav class="navbar navbar-expand-lg navbar-light bg-light"> 
     <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="view.php">View</a>
      </li>

      <li class="nav-item">
        <a class="nav-link disabled" href="javascript:void(0)">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

    <div class="container-fluid">
    <div class="col-md-4" style="margin-top:3%; border-style:solid;">

  <h2>FILL DETAILS BELLOW</h2>
  <form method="post"action="" class="was-validated">
    <div class="form-group">
      <label for="uname">Full Name:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter Full Name" name="fullname" value="<?php echo $row['full_name'] ?>" >
      
    </div>
    <div class="form-group">
      <label for="input1" class="col-sm-2 control-label">Gender</label>
			<div class="col-sm-10">
			  <label>
			    <input type="radio" name="gender" id="optionsRadios1" value="<?php echo $row['gender'] ?>"  checked> Male
			  </label>
			  	  <label>
			    <input type="radio" name="gender" id="optionsRadios1" value="<?php echo $row['gender'] ?>" > Female
			  </label>
			</div>
      
    </div>

     <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username" value="<?php echo $row['email'] ?>" required>
      
    </div>

    <div class="form-group">
      <label for="username">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" value="<?php echo $row['email'] ?>" >
      
    </div>

     <div class="form-group">
      <label for="image">Image</label>
      <input type="file" name="image" class="form-control" value="<?php echo $row['photo'] ?>" >
      
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
  </form>

    
    </div>
    </div>

</body>
</html>
