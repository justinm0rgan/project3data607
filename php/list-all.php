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

	echo "<th>id</th>"; 
	echo "<th>loan_amnt</th>";
	echo "<th>funded_amnt</th>";	
	echo "<th>term</th>";	
	echo "<th>int_rate</th>";	
	echo "<th>installment</th>";	
	echo "<th>grade</th>";	
	echo "<th>emp_title</th>";	
	echo "<th>emp_length</th>";	
	echo "<th>home_ownership</th>";	
	echo "<th>issue_d</th>";	
	echo "<th>annual_inc</th>";	
	echo "<th>verification_status</th>";	
	echo "<th>loan_status</th>";	
	echo "<th>desc</th>";	
	echo "<th>title</th>";	
	echo "<th>zip_code</th>";	
	echo "<th>addr_state</th>";	
	echo "<th>dti</th>";	
	echo "<th>delinq_2yrs</th>";	
	echo "<th>earliest_cr_line</th>";	
	echo "<th>fico_range_high</th>";	
	echo "<th>fico_range_low</th>";	
	echo "<th>inq_last_6mths</th>";	
	echo "<th>mths_since_last_deling</th>";	
	echo "<th>mths_since_last_record</th>";	
	echo "<th>open_acc</th>";	
	echo "<th>pub_rec</th>";	
	echo "<th>revol_bal</th>";	
	echo "<th>revol_util</th>";	
	echo "<th>total_acc</th>";	
	echo "<th>initial_list_status</th>";	
	echo "<th>out_prncp</th>";	
	echo "<th>out_prncp_inv</th>";	
	echo "<th>total_pymnt</th>";	
	echo "<th>total_pymnt_inv</th>";	
	echo "<th>total_rec_prncp</th>";	
	echo "<th>total_rec_int</th>";	
	echo "<th>total_rec_late_fee</th>";	
	echo "<th>recoveries</th>";	
	echo "<th>collection_recovery_fee</th>";	
	echo "<th>last_pymnt_d</th>";	
	echo "<th>last_pymnt_amnt</th>";	
	echo "<th>next_pymnt_d</th>";	
	echo "<th>last_credit_pull_d</th>";	
	echo "<th>last_fico_range_high</th>";	
	echo "<th>last_fico_range_low</th>";	
	echo "<th>collections_12_mths_ex_med</th>";	
	echo "<th>mths_since_last_major_derog</th>";	
	echo "<th>policy_code</th>";	
	echo "<th>application_type</th>";	
	echo "<th>acc_now_delinq</th>";	
	echo "<th>annual_inc_joint</th>";	
	echo "<th>dti_joint</th>";	
	echo "<th>verification_status_joint</th>";	
	echo "<th>tot_coll_amnt</th>";	
	echo "<th>tot_cur_bal</th>";	
	echo "<th>open_acc_6m</th>";	
	echo "<th>open_act_il</th>";	
	echo "<th>open_il_12m</th>";	
	echo "<th>open_il_24m</th>";	
	echo "<th>mths_since_rcnt_il</th>";	
	echo "<th>total_bal_il</th>";	
 
  echo "</tr>";
  
  foreach($db->query("SELECT * FROM LendingClub") as $row) {

	echo "<tr>";
	echo "<td>" . $row['id'] . "</td>"; 
	echo "<td>" . $row['loan_amnt'] . "</td>";
	echo "<td>" . $row['funded_amnt'] . "</td>";	
	echo "<td>" . $row['term'] . "</td>";	
	echo "<td>" . $row['int_rate'] . "</td>";	
	echo "<td>" . $row['installment'] . "</td>";	
	echo "<td>" . $row['grade'] . "</td>";	
	echo "<td>" . $row['emp_title'] . "</td>";	
	echo "<td>" . $row['emp_length'] . "</td>";	
	echo "<td>" . $row['home_ownership'] . "</td>";	
	echo "<td>" . $row['issue_d'] . "</td>";	
	echo "<td>" . $row['annual_inc'] . "</td>";	
	echo "<td>" . $row['verification_status'] . "</td>";	
	echo "<td>" . $row['loan_status'] . "</td>";	
	echo "<td>" . $row['desc'] . "</td>";	
	echo "<td>" . $row['title'] . "</td>";	
	echo "<td>" . $row['zip_code'] . "</td>";	
	echo "<td>" . $row['addr_state'] . "</td>";	
	echo "<td>" . $row['dti'] . "</td>";	
	echo "<td>" . $row['delinq_2yrs'] . "</td>";	
	echo "<td>" . $row['earliest_cr_line'] . "</td>";	
	echo "<td>" . $row['fico_range_high'] . "</td>";	
	echo "<td>" . $row['fico_range_low'] . "</td>";	
	echo "<td>" . $row['inq_last_6mths'] . "</td>";	
	echo "<td>" . $row['mths_since_last_deling'] . "</td>";	
	echo "<td>" . $row['mths_since_last_record'] . "</td>";	
	echo "<td>" . $row['open_acc'] . "</td>";	
	echo "<td>" . $row['pub_rec'] . "</td>";	
	echo "<td>" . $row['revol_bal'] . "</td>";	
	echo "<td>" . $row['revol_util'] . "</td>";	
	echo "<td>" . $row['total_acc'] . "</td>";	
	echo "<td>" . $row['initial_list_status'] . "</td>";	
	echo "<td>" . $row['out_prncp'] . "</td>";	
	echo "<td>" . $row['out_prncp_inv'] . "</td>";	
	echo "<td>" . $row['total_pymnt'] . "</td>";	
	echo "<td>" . $row['total_pymnt_inv'] . "</td>";	
	echo "<td>" . $row['total_rec_prncp'] . "</td>";	
	echo "<td>" . $row['total_rec_int'] . "</td>";	
	echo "<td>" . $row['total_rec_late_fee'] . "</td>";	
	echo "<td>" . $row['recoveries'] . "</td>";	
	echo "<td>" . $row['collection_recovery_fee'] . "</td>";	
	echo "<td>" . $row['last_pymnt_d'] . "</td>";	
	echo "<td>" . $row['last_pymnt_amnt'] . "</td>";	
	echo "<td>" . $row['next_pymnt_d'] . "</td>";	
	echo "<td>" . $row['last_credit_pull_d'] . "</td>";	
	echo "<td>" . $row['last_fico_range_high'] . "</td>";	
	echo "<td>" . $row['last_fico_range_low'] . "</td>";	
	echo "<td>" . $row['collections_12_mths_ex_med'] . "</td>";	
	echo "<td>" . $row['mths_since_last_major_derog'] . "</td>";	
	echo "<td>" . $row['policy_code'] . "</td>";	
	echo "<td>" . $row['application_type'] . "</td>";	
	echo "<td>" . $row['acc_now_delinq'] . "</td>";	
	echo "<td>" . $row['annual_inc_joint'] . "</td>";	
	echo "<td>" . $row['dti_joint'] . "</td>";	
	echo "<td>" . $row['verification_status_joint'] . "</td>";	
	echo "<td>" . $row['tot_coll_amnt'] . "</td>";	
	echo "<td>" . $row['tot_cur_bal'] . "</td>";	
	echo "<td>" . $row['open_acc_6m'] . "</td>";	
	echo "<td>" . $row['open_act_il'] . "</td>";	
	echo "<td>" . $row['open_il_12m'] . "</td>";	
	echo "<td>" . $row['open_il_24m'] . "</td>";	
	echo "<td>" . $row['mths_since_rcnt_il'] . "</td>";	
	echo "<td>" . $row['total_bal_il'] . "</td>";	

	echo "</tr>";
}

  echo "</table>";
 

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
	
    die();
}
