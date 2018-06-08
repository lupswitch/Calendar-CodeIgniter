<!DOCTYPE html>
<html>
<head>
	<title>Calendar</title>
 	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
 	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-themes.min.css');?>">
 	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css')?>"> -->
</head>
<body>

		
		 <table  class="table table-striped">
		  	<thead>
			<tr>
				<th>ID</th>
				<th>First Name</th>
				<th>Birth date</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>

<?php
// print_r($birthdays);
		foreach ($birthdays as $birthday) {
				echo "<tr>";
				echo "<td>" . "<h3>" . " " . $birthday->id . "</h3>" . "</td>";
				echo "<td>" . "<h4>" . " " . $birthday->person. "</h4>". "</td>";
				echo "<td>" . "<h4>" . " " . $birthday->day. "-" . $birthday->month . "-". $birthday->year . "</h4>". "</td>";
				echo "<td class='center'>" . "<a href=/Calendar-CodeIgnitor0/calendar/update/" . $birthday->id . ">Edit</a></td>";
				echo "<td class='center'>" . "<a href=/Calendar-CodeIgnitor0/calendar/delete_birthdays/" . $birthday->id .  ">Delete</a></td>";

				echo "</tr>";
				}




?>
</table>

</body>
</html>