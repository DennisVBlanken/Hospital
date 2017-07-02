<?php

function getAllClients() {
	$db = openDatabaseConnection();

 	$sql = "SELECT * FROM clients";
    $query = $db->prepare($sql);
    $query->execute();

	return $query->fetchAll();
}

function getAllPatients() {
	$db = openDatabaseConnection();

 	$sql = "SELECT * FROM patients LEFT JOIN species ON patients.species_id=species.species_id LEFT JOIN clients ON patients.client_id=clients.client_id";
    $query = $db->prepare($sql);
    $query->execute();

	return $query->fetchAll();
}

function getAllSpecies() {
	$db = openDatabaseConnection();

 	$sql = "SELECT * FROM species";
    $query = $db->prepare($sql);
    $query->execute();

	return $query->fetchAll();
}
function getPatient($id) {
	$db = openDatabaseConnection();

    $query = $db->prepare("SELECT * FROM patients WHERE patient_id = (:id)");
    $query->bindParam(':id', $id);
    $query->execute();

	return $query->fetch(PDO::FETCH_ASSOC);
}
function EditPatients($id, $name, $species, $client, $status) {
	$db = openDatabaseConnection();

	$sql = "UPDATE patients SET patient_name = (:patient_name), species_id = (:species_id), client_id = (:client_id), patient_status = (:patient_status) WHERE patient_id = (:id)";

	$query = $db->prepare($sql);

	$query->bindParam(':id', $id);
	$query->bindParam(':patient_name', $name);
	$query->bindParam(':species_id', $species);
	$query->bindParam(':client_id', $client);
	$query->bindParam(':patient_status', $status);

	$query->execute();

	$db = null;

	return "Yes";
}
function createPatient($name, $species, $client, $status) {
	$db = openDatabaseConnection();

	$sql = "INSERT INTO patients(patient_name, species_id, client_id, patient_status) VALUES (:patient_name, :species_id, :client_id, :patient_status)";

	$query = $db->prepare($sql);

	$query->bindParam(':patient_name', $name);
	$query->bindParam(':species_id', $species);
	$query->bindParam(':client_id', $client);
	$query->bindParam(':patient_status', $status);

	$query->execute();

	$db = null;

	return "Yes";
}
function deleteP($id) {
	$db = openDatabaseConnection();

	$sql = "DELETE FROM patients WHERE patient_id = (:id)";

	$query = $db->prepare($sql);

	$query->bindParam(':id', $id);

	$query->execute();

	$db = null;

	return "Yes";
}