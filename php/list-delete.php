<?php
$user = "data607user";
$password = "harry2022";
$database = "data607p3";
$table = "LendingClub";

try {
  $db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
  
  
  foreach($db->query("SELECT 
  p.addr_state,
  states.State,
  COUNT(IF(p.home_ownership = "RENT", p.loan_amnt, NULL)) AS RENT,
  COUNT(IF(p.home_ownership = "MORTGAGE", p.loan_amnt, NULL)) AS MORTGAGE,
  COUNT(IF(p.home_ownership = "OWN", p.loan_amnt, NULL)) AS OWN
  FROM LendingClub p
  INNER JOIN states
  ON p.addr_state = states.Abbreviation
  GROUP BY p.addr_state,
  states.State
  ORDER BY p.addr_state") as $row) 
  
  {

	}

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
	
    die();
}
