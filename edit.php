<?php
// include database connection file
include_once 'database.php';

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
    $name=$_POST['fName'];
    $lName = $_POST['lName'];
	$mobile=$_POST['phoneNum'];
	$email=$_POST['email'];
		
	// update user data
	$result = mysqli_query($conn, "UPDATE registration SET fName='$name',email='$email',phoneNum='$mobile' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: admin_dashboard.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($conn, "SELECT * FROM registration WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $name = $user_data['fName'];
    $lName = $user_data['lName'];
	$email = $user_data['email'];
	$mobile = $user_data['phoneNum'];
}
?>
<html>
<head>	
	<title>Edit User Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name" value=<?php echo $name;?>></td>
            </tr>
            <tr> 
				<td>Name</td>
				<td><input type="text" name="name" value=<?php echo $lName;?>></td>
            </tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value=<?php echo $email;?>></td>
			</tr>
			<tr> 
				<td>Mobile</td>
				<td><input type="text" name="mobile" value=<?php echo $mobile;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>

