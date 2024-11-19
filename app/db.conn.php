<?php 
date_default_timezone_set("Asia/Calcutta"); 
# server name
$sName = "srv945.hstgr.io";
# user name
$uName = "u704466700_mics_chat";
# password
$pass = 'PA$$w0rd232406';

# database name
$db_name = "u704466700_mics_chat";

#creating database connection
try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", 
                    $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Connection failed : ". $e->getMessage();
}