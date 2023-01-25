

<!DOCTYPE>
<html>
	<head>
		<title>View Data from Database</title>
		<link rel="stylesheet" href="Include/style.css">
		<style media="screen">
		fieldset{
				background-image: url("Include/images/ems1.jpg");
				background-repeat: repeat-x;
		}
		body{
				background-image: url("Include/images/2.jpg");
				background-repeat: repeat;
		}
		</style>
	</head>
	<body>
		<h2 class="success">  </h2>
		<div>
			<fieldset>
				<form class="" action="View_From_Database.php" method="GET">
					<input type="text" name="Search" value="" placeholder="Search by name / ssn"><br><br>
					<input type="submit" name="SearchButton" value="Search record">
				</form>
			</fieldset>
		</div>
				<table width="1000" border="5" align="center">
			<caption>View From Database</caption>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>SSN</th>
				<th>Department</th>
				<th>Salary</th>
				<th>HomeAddress</th>
				<th>Update</th>
				<th>Delete</th>
			</tr>


</table>
<div>

</div>

	</body>
</html>