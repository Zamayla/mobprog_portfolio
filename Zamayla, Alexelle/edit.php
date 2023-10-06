<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{
	$id = $_POST['Id'];

	$name=$_POST['Name'];
	$mobile=$_POST['Mobile'];
	$email=$_POST['Email'];

	// update user data
	$result = mysqli_query($mysqli, "UPDATE user SET Name='$Name',Email='$Email',Mobile='$Mobile' WHERE Id=$Id");

	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['Id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM user WHERE Id=$ISd");

while($user_data = mysqli_fetch_array($result))
{
	$name = $user_data['Name'];
	$email = $user_data['Email'];
	$mobile = $user_data['Mobile'];
}
?>
<html>
<head>
	<title>Edit User Data</title>
</head>

<body>
	<h3 align="center"><a href="index.php">Home</a></h3>
	<br/><br/>
	<div class="center">
<div class="container">
	<form name="update_user" method="post" action="edit.php">
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="Name" value=<?php echo $name;?> class="form-control"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="Email" value=<?php echo $email;?> class="form-control"></td>
			</tr>
			<tr>
				<td>Mobile</td>
				<td><input type="text" name="Mobile" value=<?php echo $mobile;?> class="form-control"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="Id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update" class="btn btn-primary"></td>
			</tr>
		</table>
	</form>
</div></div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>