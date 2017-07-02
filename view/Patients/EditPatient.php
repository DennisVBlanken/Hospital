<html>
<head>
	<title>Patients</title>
	<link href="/Hospital/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<main>
	
	<header>
		<h1>Hospital</h1>
	<ul>
		<li><a href="/Hospital/Patients">Patiënts</a></li>
		<li><a href="/Hospital/Patients/Clients">Clients</a></li>
		<li><a href="/Hospital/Patients/Species">Species</a></li>
	</ul>
	</header>
	<div class="container">
	<?php echo '<form action="' . URL . 'Patients/editPatientSave' . '" method="post">'; ?>
		<input type="text" name="patient_name" placeholder="Patient name"><br>
		<input type="number" name="species_id" placeholder="Species id"><br>
		<input type="number" name="client_id" placeholder="client id"><br>
		<input type="text" name="patient_status" placeholder="Patient status"><br>
		<input type="number" name="patient_id" hidden value="<?= $patient['patient_id'] ?>">

		<input type="submit" value="Submit">
	</form>

</div>
	<footer>&copy; by Dennis V.B.</footer>
</main>
</body>
</html>