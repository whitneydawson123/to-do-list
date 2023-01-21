<?php
// MongoDB connection URL
$url = "mongodb://localhost:27017";

// Create a new MongoDB client
$client = new MongoDB\Client($url);

// Connect to the database
$db = $client->selectDatabase("toDoList");

// Connection was successful
echo "Connected to the database successfully";
?>