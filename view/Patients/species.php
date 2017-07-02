<!-- Work In Progress -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Hospital</title>
	<link rel="stylesheet" href="/Hospital/css/style.css" type="text/css">
</head>
<body>
	<h1>Hospital</h1>
	<ul>
		<li><a href="/Hospital/Patients">Patiënts</a></li>
		<li><a href="/Hospital/Patients/Clients">Clients</a></li>
		<li><a href="/Hospital/Patients/Species">Species</a></li>
	</ul>

	<h2>Species</h2>
	<table>
			<tr>
				<th>#</th>
				<th>Description</th>
				<th colspan="2">Action</th>
			</tr>

		    <?php foreach($Species as $specie) { ?>
		    <tr>
		        <td><?= $specie["species_id"]; ?></td>
		        <td><?= $specie["species_description"]; ?></td>
		        <td><?php echo '<a href="' . '' . '' . '">edit</a>'; ?></td>
		        <td><?php echo '<a href="' . '' . '' . '">delete</a>'; ?></td>
		    </tr>
		    <?php } ?>
	</table>
		<p><a href="/Create">Create</a></p>
		<p><a href="/Hospital/Patients">Home</a></p>
	</body>
</html>