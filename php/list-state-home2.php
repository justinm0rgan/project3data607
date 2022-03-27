<?php
$user = "data607user";
$password = "harry2022";
$database = "data607p3";
$table = "LendingClub";

try {
  $db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
  echo "<h2>Loan Balances by State and Home Ownership</h2><ol>";
  
  echo "<table>";
  echo "<tr>";
  echo "<th>State</th>";
  echo "<th>Rent</th>";
  echo "<th>Mortgage</th>";
  echo "<th>Own</th>";
  echo "</tr>";
  
  foreach($db->query("SELECT
  p.addr_state,
  states.State,
  SUM(IF(p.home_ownership = 'RENT', p.loan_amnt, NULL)) AS RENT,
  SUM(IF(p.home_ownership = 'MORTGAGE', p.loan_amnt, NULL)) AS MORTGAGE,
  SUM(IF(p.home_ownership = 'OWN', p.loan_amnt, NULL)) AS OWN
FROM LendingClub p
  INNER JOIN states
    ON p.addr_state = states.Abbreviation
GROUP BY p.addr_state,
         states.State
ORDER BY p.addr_state") as $row) 
  
  {
	echo "<tr>";
	echo "<td>" . $row['State'] . "</td>"; 
	echo "<td>" . $row['RENT'] . "</td>";
	echo "<td>" . $row['MORTGAGE'] . "</td>";	
	echo "<td>" . $row['OWN'] . "</td>";	
	echo "</tr>";
	  }
  echo "</table>";

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
	
    die();
}
