<?php
$user = "data607user";
$password = "harry2022";
$database = "data607p3";
$table = "LendingClub";

try {
  $db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
  echo "<h2>Number of Loans by State and Loan Status</h2><ol>";
  
  echo "<table>";
  echo "<tr>";
  echo "<th>State</th>";
  echo "<th>Current</th>";
  echo "<th>Fully Paid</th>";
  echo "<th>Late 16-30 days</th>";
  echo "<th>Late 31-120 days</th>";
  echo "<th>Charged Off</th>";

  echo "</tr>";
  
  foreach($db->query("SELECT
  p.addr_state,
  states.State,
  COUNT(IF(p.loan_status = 'Current', p.loan_amnt, NULL)) AS Current,
  COUNT(IF(p.loan_status = 'Fully Paid', p.loan_amnt, NULL)) AS Fully_Paid,
  COUNT(IF(p.loan_status = 'Late (31-120 days)', p.loan_amnt, NULL)) AS Late_31_120,
  COUNT(IF(p.loan_status = 'Late (16-30 days)', p.loan_amnt, NULL)) AS Late_16_30,
  COUNT(IF(p.loan_status = 'Charged Off', p.loan_amnt, NULL)) AS Charged_Off,
  COUNT(IF(p.loan_status = 'In Grace Period', p.loan_amnt, NULL)) AS In_Grace_Period
FROM LendingClub p
  INNER JOIN states
    ON p.addr_state = states.Abbreviation
GROUP BY p.addr_state,
         states.State
ORDER BY p.addr_state") as $row) 
  
  {
	echo "<tr>";
	echo "<td>" . $row['State'] . "</td>"; 
	echo "<td>" . $row['Current'] . "</td>";
	echo "<td>" . $row['Fully_Paid'] . "</td>";	
	echo "<td>" . $row['Late_16_30'] . "</td>";	
	echo "<td>" . $row['Late_31_120'] . "</td>";	
	echo "<td>" . $row['Charged_Off'] . "</td>";	

	echo "</tr>";
	  }
  echo "</table>";

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
	
    die();
}
