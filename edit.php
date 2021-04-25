<?php
// including the database connection file
include_once("koneksi.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	
	$fullname = mysqli_real_escape_string($mysqli, $_POST['fullname']);
	$level = mysqli_real_escape_string($mysqli, $_POST['level']);
	$age = mysqli_real_escape_string($mysqli, $_POST['age']);
	$country = mysqli_real_escape_string($mysqli, $_POST['country']);
	$statistic = mysqli_real_escape_string($mysqli, $_POST['statistic']);	
	
	// checking empty fields
	if(empty($fullname) || empty($level) || empty($age) || empty($country) || empty($statistic)) {	
			
		if(empty($fullname)) {
			echo "<font color='red'>Fullname field is empty.</font><br/>";
		}
		
		if(empty($level)) {
			echo "<font color='red'>Level field is empty.</font><br/>";
		}

		if(empty($age)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}

		if(empty($country)) {
			echo "<font color='red'>Country field is empty.</font><br/>";
		}
		
		if(empty($statistic)) {
			echo "<font color='red'>Statistic field is empty.</font><br/>";
		}		
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE menplayers SET fullname='$fullname',level='$level',age='$age',country='$country',statistic='$statistic' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM menplayers WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$fullname = $res['fullname'];
	$level = $res['level'];
	$age = $res['age'];
	$country = $res['country'];
	$statistic = $res['statistic'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="fullname" value="<?php echo $fullname;?>"></td>
			</tr>
			<tr> 
				<td>Level</td>
				<td><input type="text" name="level" value="<?php echo $level;?>"></td>
			</tr>
			<tr> 
				<td>Age</td>
				<td><input type="number" name="age" value="<?php echo $age;?>"></td>
			</tr>
			<tr> 
				<td>Country</td>
				<td><input type="text" name="country" value="<?php echo $country;?>"></td>
			</tr>
			<tr> 
				<td>Statistic</td>
				<td><input type="text" name="statistic" value="<?php echo $statistic;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
