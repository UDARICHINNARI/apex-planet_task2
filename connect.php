<?php
// Establish database connection
$con = new mysqli('localhost', 'root', 'Chinnari@709', 'crudoperations');

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

