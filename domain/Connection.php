<?php

$dsn = "mysql:host=localhost;dbname=LibraryAutoIncrementTest";
$user = "root";
$password = null;
$options = null;


try {
    $pdo = new PDO($dsn, $user, $password, $options);
} catch (PDOException $e) {
    die($e->getMessage());  //die() for illustration
    //always handle errors 
}

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//----------------- QUERY: Select all members

$stmt = $pdo->query("SELECT * FROM member", //query 	
        PDO::FETCH_OBJ);     //0th field 
if (is_array($stmt) || is_object($stmt))
    foreach ($stmt as $row) {
        echo $row->firstname . PHP_EOL;
        echo $row->lastname . PHP_EOL;
        echo $row->DoB . PHP_EOL;
        echo $row->email . PHP_EOL;
    } unset($stmt);

//----------------- QUERY: Select books from a specific genre

$stmt = $pdo->query("SELECT title FROM book WHERE genreid=5",
        PDO::FETCH_OBJ);
if (is_array($stmt) || is_object($stmt))
    foreach ($stmt as $row) {
        var_dump($row);
    } unset($stmt);


//----------------- PREPARED STATEMENT: Inserting member information 

$stmt = $pdo->prepare("INSERT INTO member (userid, firstname, lastname, DoB, email) VALUES (:userid, :firstname, :lastname, :DoB, :email)");
$stmt->bindParam(':firstname', $firstname);
$stmt->bindParam(':lastname', $lastname);
$stmt->bindParam(':DoB', $DoB);
$stmt->bindParam(':email', $email);

$firstname = "Sarah";
$lastname = "Tooley";
$DoB = "1992-08-12";
$email = "saraht@gmail.com";
$stmt->execute();
unset($stmt);

//----------------- PREPARED STATEMENT: Inserting a book 

$stmt = $pdo->prepare("INSERT INTO book (title,authorid,genreid,under18,publishdate,loanlength,quantity) VALUES (:title, :authorid, :genreid,:under18, :publishdate, :loanlength, :quantity)");

$stmt->bindParam(":title", $title);
$stmt->bindParam(":authorid", $authorid);
$stmt->bindParam(":genreid", $genreid);
$stmt->bindParam(":under18", $under18);
$stmt->bindParam(":publishdate", $publishdate);
$stmt->bindParam(":loanlength", $loanlength);
$stmt->bindParam(":quantity", $quantity);

$title = "On the Road";
$authorid = 2;
$genreid = 2;
$under18 = "No";
$publishdate = "1992-12-28";
$loanlength = 14;
$quantity = 5;
$stmt->execute();
unset($stmt);

//----------------- PREPARED STATEMENT: Update member's email

$stmt = $pdo->prepare("UPDATE member SET email = :email WHERE userid = :userid");
$stmt->bindParam(':userid', $userid);
$stmt->bindParam(':email', $email);

$userid = 1;
$email = "s_smith@hotmail.com";
$stmt->execute();
unset($stmt);

