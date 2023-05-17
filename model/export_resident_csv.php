<?php

require("../server/server.php");

// get Users
if(isset($_GET['id'])){
	$query = "SELECT r.national_id,r.firstname,r.middlename,r.lastname,r.alias,r.household,r.birthplace,r.birthdate,DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(), r.birthdate)), '%Y') + 0 AS age, r.citizenship,r.civilstatus,r.gender,r.occupation,r.purok,r.voterstatus,r.identified_as,r.phone,r.email, s.status_name FROM tblresident AS r LEFT JOIN status as s ON r.stat_id = s.stat_id WHERE r.stat_id=".$_GET['id'];
}
else{
	$query = "SELECT r.national_id,r.firstname,r.middlename,r.lastname,r.alias,r.household,r.birthplace,r.birthdate,DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(), r.birthdate)), '%Y') + 0 AS age,r.civilstatus,r.gender,r.purok,r.voterstatus,r.identified_as,r.phone,r.email, s.status_name FROM tblresident AS r LEFT JOIN status as s ON r.stat_id = s.stat_id";
}
if (!$result = $conn->query($query)) {
    exit($conn->error);
}

$users = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
}

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=Residents.csv');
$output = fopen('php://output', 'w');
fputcsv($output, array('National ID', 'First Name','Middle Name', 'Last Name', 'Alias', 'Household', 'Birtplace', 'Birthdate', 'Age','Citizenship' , 'Civil Status', 'Gender', 'Occupation', 'Purok', 'Registered Voter', 'Voter Identify As', 'Contact Number', 'Email Address', 'Beneficiaries Status'));

if (count($users) > 0) {
    foreach ($users as $row) {
        fputcsv($output, $row);
    }
}


?>