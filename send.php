<?php 
//create a connection
try{
$host="mysql:host=localhost;dbname=lambar";
$user_name="root";
$user_password="";
$dbh=new PDO($host,$staff_id,$password);
} 
 
catch(Exception $e){
exit("Connection Error".$e->getMessage());
}




 ?>