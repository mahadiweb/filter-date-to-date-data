<?php
$conn = mysqli_connect("localhost","root","","database");
if (isset($_POST['fromdate']) && isset($_POST['todate'])) {
	$fromdate = $_POST['fromdate'];
	$todate = $_POST['todate'];
	//echo "SELECT * FROM data WHERE date_time BETWEEN '$fromdate' AND '$todate'";
	$query = mysqli_query($conn,"SELECT * FROM data WHERE date_time BETWEEN '$fromdate' AND '$todate'");
	//print_r($query);
	while ($row = mysqli_fetch_assoc($query)) {
		echo "<table border='1'><tr><th>Name</th></tr><tr><td>".$row['name']."</td></tr></table>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Filter time</title>
</head>
<body>
<form action="" method="post">
	<input type="date" id="fromdate" name="fromdate" value="<?= @$fromdate; ?>">
	<input type="date" id="todate" name="todate" value="<?= @$todate; ?>">
	<input type="submit" name="submit">
</form>
</body>
</html>
