<!DOCTYPE html>
<html>
<head>
	<title>Calendar</title>
	<link rel="stylesheet" type="text/css" href="<?php base_url('assets/css/bootstrap.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php base_url('assets/css/bootstrap-themes.min.css'); ?>">
</head>
<body>


		<fieldset>
		
			<tr>
				<th>ID</th>
				<th>First Name</th>
				<th>Birth date</th>
				<th colspan="2">Action</th>
			</tr>

<?php
// print_r($birthdays);
		foreach ($birthdays as $birthday) {
				echo "<tr>";
				echo "<td>" . "<h3>" . " " . $birthday->id . "</h3>" . "</td>";
				echo "<td>" . "<h4>" . " " . $birthday->person. "</h4>". "</td>";
				echo "<td>" . "<h4>" . " " . $birthday->day. "-" . $birthday->month . "-". $birthday->year . "</h4>". "</td>";
				echo "<td class='center'>" . "<a href=calendar/update/" . $birthday->id . "'>Edit</a></td>";
				echo "<td class='center'>" . "<a href=calendar/delete/" . $birthday->id .  "'>Delete</a></td>";
				echo "</tr>";
				}




?>

</fieldset>
</body>
</html>