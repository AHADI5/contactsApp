<?php 
include("../configurations/config.php");
include("../model/Contact.php");

error_reporting(E_ALL);
ini_set('display_errors', 1);


$nom = $_POST["nom"];
$adresse = $_POST["adresse"];
$numero = $_POST["numero"];
$description = $_POST["description"];
$mail = $_POST["mail"];

$contact = new Contact($nom,$mail,$adresse,$numero,$description);
$contact -> registerContact();

if ($contact) {
    # code...
    echo "Success" ;
}