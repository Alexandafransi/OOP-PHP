<!-- put in ./www directory -->

<?php
    require_once('database.php');
    // $database=new Database();
    $res=$database->read();

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

    <div class="container">
	<div class="row" style="margin-top:5%;">
	<h2>Read Operation in CRUD applicaiton</h2>
		<table class="table "> 
		<thead> 
			<tr> 
				<th>#</th> 
				<th>Full Name</th> 
				<th>Gender</th> 
				<th>Username</th> 
				<th>Email</th> 
				<th>Image</th>
                <th>Edit</th>
                <th>Delete</th>
			</tr> 
		</thead> 
		<tbody> 
            <?php
                while($row = mysqli_fetch_assoc($res)){

                
            ?>
			<tr> 
				<td><?php echo $row[id];?></td> 
				<td><?php echo $row[full_name];?></td> 
				<td><?php echo $row[gender];?></td> 
				<td><?php echo $row[username];?></td> 
				<td><?php echo $row[email];?></td> 
                <td><?php echo $row[photo];?></td> 
                
                
				<td><a href="edit.php?id=<?php echo $row['id'];?>"><input class="btn btn-primary" type="button" value="Edit Details"></a></td>
                 <td>   <a href="delete.php?id=<?php echo $row['id'];?>"><input class="btn btn-primary" type="button" value="Delete"></a></td>
            </tr> 
            <?php
                }
            ?>
		</tbody> 
		</table>
	</div>
</div>

 

</body>
</html>
