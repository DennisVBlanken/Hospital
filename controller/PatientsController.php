<?php

require(ROOT . "model/PatientsModel.php");

function index(){
	render('Patients/index', array(
	'Patients' => getAllPatients()
	));
}

function Clients(){
	render('Patients/Clients', array(
	'Clients' => getAllClients()
	));
}

function Species(){
	render('Patients/Species', array(
	'Species' => getAllSpecies()
	));
}
function EditPatient($id){
	render('Patients/EditPatient', array(
		"patient" => getPatient($id)
		));
}
function editPatientSave() {

	$id = $_POST["patient_id"];
	$name = $_POST["patient_name"];
	$species = $_POST["species_id"];
	$client = $_POST["client_id"];
	$status = $_POST["patient_status"];

	$result = editPatients($id, $name, $species, $client, $status);
	if ($result == "Yes") {
		header('location: /Hospital/Patients');
	}
}
function addPatient() {
	render('Patients/AddPatient');
	if (isset($_POST["patient_name"])) {
	$name = $_POST["patient_name"];
	$species = $_POST["species_id"];
	$client = $_POST["client_id"];
	$status = $_POST["patient_status"];
	
		$result = createPatient($name, $species, $client, $status);
		if ($result == "Yes") {
			header('location: /Hospital/Patients');
		}
	}
}
function DeletePatient($id) {
	$result = deleteP($id);

	if ($result == "Yes") {
		header('location: /Hospital/Patients');
	}

}