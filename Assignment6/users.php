<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
		}

		th, td {
			text-align: left;
			padding: 8px;
			border: 1px solid black;
		}

		th {
			background-color: #ddd;
		}
	</style>
</head>
<body>
	<table>
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Profile Picture</th>
		</tr>

		<?php
		$myCsvFile = fopen("users.csv", "r");

		while (($data = fgetcsv($myCsvFile)) !== FALSE) {
			echo "<tr>";
			echo "<td>" . $data[0] . "</td>";
			echo "<td>" . $data[1] . "</td>";
			echo "<td><img src='" . $data[2] . "' height='100'></td>";
			echo "</tr>";
		}

		fclose($myCsvFile);
		?>
	</table>
    <a href='index.php'>Return Home</a>
</body