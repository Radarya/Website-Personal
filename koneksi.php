<?php
$host     = 'aws-0-ap-southeast-1.pooler.supabase.com';
$user     = 'postgres.pgwthdemnavsehafqsfh'; 
                    
$password = 'b@nU8GDdV6GQkXQ'; 
$db       = 'postgres'; 
$con = mysqli_connect($host, $user, $password, $db);
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
?>
