<?php
//  $dbDir = "sqlite:/home/eocakovs/public_html/db/mydb.db";
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $email = $_POST['email'];
  
  //$dbHandle = new PDO($dbDir);
  //$query = "Insert into people (name, surname, email) Values ($name, $surname, $email)";
 // $dbHandle->query($query)
?>
Thank you for input  "<?php echo $name ?>", Your name and surname is saved and assigned to e-mail:  "<?php echo $email?>"
