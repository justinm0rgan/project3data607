<?php
$user = "data607user";
$password = "harry2022";
$database = "data607p3";
$table = "LendingClub";

try {
  $db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
  echo "<h2>List all loans in the Database</h2><ol>";
 
  echo "<table>";
  echo "<tr>";
  echo "<th>Term</th>";
  echo "<th>Int. Rate</th>";
  echo "<th>Loan Status</th>";
  echo "<th>State</th>";
  echo "<th>Amount</th>";
  echo "</tr>";
  
  foreach($db->query("SELECT
  LendingClub.id,
  LendingClub.term,
  LendingClub.int_rate,
  LendingClub.loan_status,
  LendingClub.addr_state,
  LendingClub.loan_amnt FROM LendingClub") as $row) {


	echo "<tr>";
	echo "<td>" . $row['term'] . "</td>"; 
	echo "<td>" . $row['int_rate'] . "</td>";
	echo "<td>" . $row['loan_status'] . "</td>";	
	echo "<td>" . $row['addr_state'] . "</td>";	
	echo "<td>" . $row['loan_amnt'] . "</td>";	
	echo "</tr>";
}

  echo "</table>";
 

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
	
    die();
}
