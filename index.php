<?php
// Search string - change this for testing
$searchquery = "Franc*";

// debug starttime logger
$start = microtime(true);

// Use asteriks syntax for like statement
$searchquery = str_replace('*', '%', $searchquery);

// open database connection and fetch results
$db = new PDO("sqlite:database.db");
$sth = $db->prepare("SELECT * FROM MOCK_DATA WHERE first_name LIKE ? OR last_name LIKE ? OR email LIKE ? OR gender LIKE ? OR ip_address LIKE ?");
$sth->execute([$searchquery,$searchquery,$searchquery,$searchquery,$searchquery]);
$result = $sth->fetchAll();

// calculate a random score for each result item
foreach($result as $key => $value){
	$result[$key]["score"] = random_int(0,100);
}

// debug endtime logger
$end = microtime(true);

// convert the result to josn and show it
header('Content-Type: application/json');
$output = [
	"time" => $end-$start,
	"items" => sizeof($result),
	"results" => $result
];
echo json_encode($output);
?>