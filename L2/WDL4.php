<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'products2_db';

//Set DSN

$dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;

//Create a PDO instance

$pdo = new PDO($dsn, $user, $password);

$stmt = $pdo->query('SELECT * FROM products');

while($row = $stmt->fetch(PDO::FETCH_OBJ)){
    //echo $row->name . '<br>';
    echo '<table >
  <style>
table, th, td {
  border:1px solid black;
  //width:100%;
}
</style>';
    echo "<tr>";

    echo "<th>Product Name</th> <th>Price</th> <th>Type</th> <th>Qty</th>";
     echo "</tr>";

        echo "<td>" .$row->name."</td>"."<br>";
        echo "<td>" .$row->price."</td>"."<br>";
        echo "<td>" .$row->type."</td>"."<br>";
        echo "<td>" .$row->qty."</td>"."<br>";
        echo "</tr>";

    echo "</table>";
    echo "<br>";

}

//var_dump($pdo);

