<?php

//import.php

//   $file = fopen("contacts.csv","r");
// print_r(fgetcsv($file));
// fclose($file);


$file_data = fopen("sales.csv", 'r');
 fgetcsv($file_data);
 while($row = fgetcsv($file_data))
 {
  $data[] = array(
    's_no'  => $row[0],
    'name'  => $row[1],
    'empanelment_number'  => $row[2]
  );
 }
 echo json_encode($data);


?>