<?php 
   
   include '../server/server.php';


   $query = $conn->query("select * from tblresident where id=".$_POST['person_id']);


   $data = array();


   while ($r = $query->fetch_assoc()) {

        $data[] = array(
              "id" => $r['id'],
              // "complete_name" => ucwords($r['firstname'], $r['middlename'], $r['lastname']),
              "status" => $r['benefit_id'],
              "remarks" => $r['remarks']
         );
   }

   echo json_encode($data);

  
?>