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

	<h2>Clients</h2>
	<table>
			<tr>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Phone</th>
				<th>Email</th>
				<th colspan="2">Action</th>
			</tr>
			
		    <?php foreach($Clients as $client) { ?>
		    <tr>
		        <td><?= $client['client_firstname']; ?></td>
		        <td><?= $client['client_lastname']; ?></td>
		        <td><?= $client['client_phone']; ?></td>
		        <td><?= $client['client_email']; ?></td>
        <td><?php echo '<a href="' . URL . 'Patients/EditClient/' . $patient['patient_id'] . '">Edit</a>'; ?></td>
        <td><?php echo '<a href="' . URL . 'Patients/DeleteClient/' . $patient['patient_id'] .  '" onclick="return checkDelete()"' . '>Delete</a>'; ?></td>
		    </tr>
		    <?php } ?>
	</table>
		<p><a href="/Hospital/Patients/Create">Create</a></p>
		<p><a href="/Hospital/Patients">Home</a></p>
	</body>
</html>