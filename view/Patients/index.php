<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Hospital</title>
	<link rel="stylesheet" href="/Hospital/css/style.css" type="text/css">
<script type="text/javascript">
function checkDelete(){
return confirm('Are you sure?');
}
</script>
</head>
<body>
	<h1>Hospital</h1>
	<ul>
		<li><a href="/Hospital/Patients">Patiënts</a></li>
		<li><a href="/Hospital/Patients/Clients">Clients</a></li>
		<li><a href="/Hospital/Patients/Species">Species</a></li>
	</ul>

	<h2>Patiënts</h2>
	<table>
			<tr>
				<th>Name</th>
				<th>Species</th>
				<th>Status</th>
				<th>Client</th>
				<th colspan="2">Action</th>
			</tr>

		    <?php foreach($Patients as $patient) { ?>
		    <tr>
		        <td><?= $patient["patient_name"]; ?></td>
		        <td><?= $patient["species_description"]; ?></td>
		        <td><?= $patient["patient_status"]; ?></td>
		        <td><?= $patient["client_firstname"] . " " . $patient["client_lastname"]; ?></td>
        <td><?php echo '<a href="' . URL . 'Patients/EditPatient/' . $patient['patient_id'] . '">Edit</a>'; ?></td>
        <td><?php echo '<a href="' . URL . 'Patients/DeletePatient/' . $patient['patient_id'] .  '" onclick="return checkDelete()"' . '>Delete</a>'; ?></td>
		    </tr>
		    <?php } ?>
	</table>
		<p><a href="/Hospital/Patients/AddPatient">Add</a></p>
		<p><a href="/Hospital/Patients">Home</a></p>
	</body>
</html>