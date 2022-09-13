<?php // login.php
$hm = 'localhost';
$db = 'publications';
$un = 'jeny';
$pw = 'password';

//  require_once 'login.php';
$conn = new mysqli ($hm, $un, $pw, $db);
if($conn->connect_error)  die ($conn->connect_error);

// $query = "CREATE TABLE cats(
//    id SMALLINT NOT NULL AUTO_INCREMENT,
//    family VARCHAR(32) NOT NULL,
//    name VARCHAR(32) NOT NULL,
//    age TINYINT NOT NULL,
//    PRIMARY KEY (id)
// )";

// $query ="DESCRIBE cats";
// $query ="TRUNCATE TABLE cats";
// $query ="SELECT * FROM cats";
// $query = "INSERT INTO cats VALUES(NULL,'Cheetah','Charly',4)";
// $query = "INSERT INTO owners VALUES($insertID,'Ann','Smith')";
// $query = "DELETE FROM cats WHERE cats.id = 2";
// $query = "UPDATE cats SET name='Charlie' WHERE name='Charly'"
// $result = $conn->query($query);

// if (!$result) {
//    die ("Сбой при доступе к без данных: " . $conn->error);
// }

$query ="SELECT * FROM customers";
$result = $conn->query($query);


if (!$result) {
   die ("Сбой при доступе к без данных: " . $conn->error);
}

$rows = $result->num_rows;

// echo "<table><tr> <th>Id</th> <th>Family</th>
// <th>Name</th> <th>Age</th> </tr>";

for ($j = 0 ; $j < $rows ; ++$j)
{
   $result->data_seek($j);
   $row = $result->fetch_array(MYSQLI_NUM);
   
   // echo "<tr>";
   // for ($k = 0 ; $k < 4 ; ++$k) echo "<td>$row[$k]</td>";
   // echo "<tr>";

   echo "$row[0] purchased ISBN $row[1]:<br>";

   $subquery= "SELECT * FROM jeny WHERE isbn='$row[1]";
   $subresult= $conn->query($subquery);
   // if(!$subresult) die ("Сбой при доступе к базе данных: " . $conn->error);

   // $subrow = $subresult->fetch_array(MYSQLI_NUM);
   // echo " '$subrow[1]' by $subrow[0]<br>";
}

// echo "</table>";
