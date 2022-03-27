<?php
$user = "data607user";
$password = "harry2022";
$database = "data607p3";
$table = "LendingClub";

try {
  $db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
  echo "<h2>Show Structure of Table LendingClub</h2><ol>";
  
  echo "<table>";
  echo "<tr>";
  echo "<th>Field Name</th>";
  echo "<th>Field Type</th>";
  echo "</tr>";
  
  foreach($db->query("DESC LendingClub") as $row) 
  
  {
	echo "<tr>";
	echo "<td>" . $row['Field'] . "</td>"; 
	echo "<td>" . $row['Type'] . "</td>"; 
	echo "</tr>";
  }
  echo "</table>";

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
	
    die();
}
