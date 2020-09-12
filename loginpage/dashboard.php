<?php
	session_start();
	require_once('dbconfig/config.php');
	//phpinfo();
?>
<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div id="main-wrapper">
		<center><h2>Dashboard</h2></center>
<table width="100%" border="1">
  <tr>
    <td><h3>Name</h3></td>
    <td><h3>Email</h3></td>
    <td><h3>Mobile</h3></td>
    <td><h3>Plan</h3></td>
    <td><h3>Action</h3></td>
  </tr>

<?php
$query = "select * from form ";
$result = mysqli_query($con, $query);
while ($rows=mysqli_fetch_assoc($result)) {
?>
   
  <tr>
    <td><?php echo $rows['name'];  ?></td>
    <td><?php echo $rows['email']; ?></td>
    <td> <?php echo $rows['mobile']; ?></td>
    <td> <?php echo $rows['plan']; ?></td>
    <td><button name="edit" style=".padding: 10px 24px background-color: #4CAF50">Edit</button><br><button name="delete">Delete</button> </td>
  </tr>
<?php 
}
?>
</table>
	</div>
</body>
</html>