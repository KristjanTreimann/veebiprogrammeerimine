<?php
require("../../../config.php");
//echo $GLOBALS["serverhost"];
//echo $GLOBALS["serverUsername"];
//echo $GLOBALS["serverPassword"];
$database = "if18_Kristjan_TR_1";

function saveAMsg($msg){
	//echo "Töötab!";
	$notice = ""; //see on teade, mis antakse salvestamise kohta
	//loome ühenduse andmebaasiserveriga
	$mysqli = new mysqli($GLOBALS["serverhost"], $GLOBALS["serverUsername"], $GLOBALS["serverPassword"], $GLOBALS["database"]);
	//Valmistame ette SQL päringu
	$stmt = $mysqli->prepare("INSERT INTO vpamsg3 (message) VALUES (?)");
	echo $mysqli->error;
	$stmt->bind_param("s", $msg);//s - string, i - integrer, d - decimal
	if ($stmt->execute()){
		$notice = 'Sõnum: "' .$msg . 'on salvestatud!"';
	} else {
		$notice = "Sõnumi salvestamisel tekkis tõrge: " .$stmt->error;
	}
	$stmt->close();
	$mysqli->close();
	return $notice;
}
?>