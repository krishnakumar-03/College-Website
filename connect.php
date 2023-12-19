<?php

$dbname = 'postgres';
$host = 'db.lfmxuuepmhehiqnyitxz.supabase.co';
$port = '5432';
$user = 'postgres';
$password = 'dhvQffKUeVDEcWx2';

try {
    $pdo = new PDO("pgsql:dbname=$dbname;host=$host;port=$port", $user, $password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $a=$_POST["n"];
    $b=$_POST["d"];
    $c=$_POST["g"];
    $d=$_POST["ten"];
    $e=$_POST["twe"];
    $f=$_POST["s"];
    $g=$_POST["a"];
    $h=$_POST["m"];
    $i=$_POST["w"];
    $stmt = $pdo->prepare('insert into admission(name, dob, gender, ten, twe, dept, address, mobile, whatsapp) values('$a','$b','$c','$d','$e','$f','$g','$h','$i')');
    
    
    // Execute the prepared statement to insert data
    $stmt->execute();

    echo 'Data inserted successfully.';
    include("admission.php");

  
} catch (PDOException $e) {
    // Handle database connection or query errors
    echo 'Connection failed: ' . $e->getMessage();
}
?>
