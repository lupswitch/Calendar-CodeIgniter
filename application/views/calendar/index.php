<!DOCTYPE html>
<html>
<head>
	<title>Calendar</title>
 	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
 	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-themes.min.css');?>">
 	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css')?>"> -->
</head>
<body>

		<div class="navbar navbar-default">
		<div class="container">
		<h2><span class="glyphicon glyphicon-home"></span>&nbsp;Welcome to the Calendar app</h2>
	</div>
</div>
<div class="container">
	<h3>Calendar list</h3>
	<a href="<?php base_url('/Calendar-CodeIgnitor0/calendar/create'); ?>" class="btn btn-primary">Add New</a>


		 <table  class="table table-bordred table-responsive">
		  	<thead>
			<tr>
				<th>ID</th>
				<th>First Name</th>
				<th>Day</th>
				<th>Month</th>
				<th>Year</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>

<?php
// print_r($birthdays);
		foreach ($birthdays as $birthday) {
				echo "<tr>";
				echo "<td>" . "<h6>" . " " . $birthday->id     . "</h6>" . "</td>";
				echo "<td>" . "<h4>" . " " . $birthday->person . "</h4>". "</td>";
				echo "<td>" . "<h4>" . " " . $birthday->day    . "</h4>". "</td>";
				echo "<td>" . "<h4>" . " " . $birthday->month  . "</h4>". "</td>";
				echo "<td>" . "<h4>" . " " . $birthday->year   . "</h4>". "</td>";
				echo "<td class='btn btn-info'>" . "<a href=/Calendar-CodeIgnitor0/calendar/update/" . 				   $birthday->id . ">Edit</a></td>";
				echo " " . "<td class='btn btn-info'>" . "<a href=/Calendar-CodeIgnitor0/calendar/delete_birthdays/" .       	$birthday->id . ">Delete</a></td>";

				echo "</tr>";
				}


				//Can I use this code? To change a month number into a word like '1' => januari    ??						  date('F', mktime(0, 0, 0, $bday['month'], 10))

?>
</table>

</body>
</html>