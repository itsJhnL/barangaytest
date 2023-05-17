<?php
$connection = new mysqli("localhost","root","admin","barangay_system_db");
if (! $connection){
    die("Error in connection".$connection->connect_error);
}