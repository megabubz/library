<?php

$dsn = "mysql:host=localhost;dbname=Library_11April";
$user = "root";
$password = null;
$options = null;

try {
    $pdo = new PDO($dsn, $user, $password, $options);
} catch (PDOException $e) {
    die($e->getMessage());  //die() for illustration
    //always handle errors 
}

$stmt = $pdo->query("SELECT * FROM member", //query 	
        PDO::FETCH_OBJ);     //0th field 
if (is_array($stmt) || is_object($stmt))
    foreach ($stmt as $row) {
        var_dump($row);
    } unset($stmt);


$stmt = $pdo->prepare("INSERT INTO member (firstname, lastname, DoB, email) VALUES (:firstname, :lastname, :DoB, :email)");
$stmt->bindParam(':firstname', $firstname); 
$stmt->bindParam(':lastname', $lastname); 
$stmt->bindParam(':DoB', $DoB); 
$stmt->bindParam(':email', $email); 

$firstname = "Sarah";
$lastname = "Tooley";
$DoB = "1992-08-12";
$email= "saraht@gmail.com";
$stmt->execute($firstname, $lastname, $DoB, $email);


//moving cursor forward, getting a row at a time
while ($row = $stmt->fetch()) {
	print_r($row); //array of columns
}


//
////$pdo = new PDO($dsn);
//$stmt = $pdo->query(
//	"SELECT * FROM author", 		//query
//	PDO::FETCH_COLUMN, 		//data structure
//	1);					//0th field
//
//
//
//foreach ($stmt as $row) {
//	echo $row[0];
//}
////
////unset($stmt); 		//frees result memory
////				//not necessary but efficient
