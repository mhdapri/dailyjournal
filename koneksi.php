<?php
date_default_timezone_set('Asia/Jakarta');

// $servername = "sql311.infinityfree.com";
// $username = "if0_38013839";
// $password = "yxNCWF94XHbKd7w";
// $db = "if0_38013839_webdailyjournal"; //nama database
$servername = "localhost";
$username = "root";
$password = "";
$db = "webdailyjournal"; //nama database

//create connection
$conn = new mysqli($servername,$username,$password,$db);

//check apakah ada error connection
if($conn->connect_error){
	//jika ada, hentikan script dan tampilkan pesan error
	die("Connection failed : ".$conn->connect_error);
}



?>