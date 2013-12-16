<html>
<head>
	<title>PHP Example - Db</title>
</head>
<body>
	<?php
	$mysqli = mysqli_connect("localhost", "root", "","php_book");
	$result = $mysqli-> query("SELECT * FROM characters");
	if ($result) { ?>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Occupation</th>
		</tr>
		<?php while ($row = $result-> fetch_object()) { ?>
		<tr>
			<td><?php echo $row->id; ?></td>
			<td><?php echo $row->firstName; ?></td>
			<td><?php echo $row->lastName; ?></td>
			<td><?php echo $row->occupation; ?></td>
		</tr>
		<?php } ?>
		</table>
	<?php } ?>
</body>
</html>
