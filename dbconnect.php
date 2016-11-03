<?php

$conn = mysql_connect("localhost","zero__cool","Hacktheplanet");
mysql_select_db("c9");
session_start();

if (false===$conn){
    die("connection failed");
}

else {
    echo "Database Connected";
    
}

//set up variable to hold sql statement

$sql = "SELECT * FROM users";

$result = mysql_query($sql);


echo mysql_num_rows($result);