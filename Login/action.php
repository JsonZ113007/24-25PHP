<?php

// Values for MySQL Connection
$servername = "localhost";
$username = "root";
$password = "Tripping11!";
$dbname = "db_auth";

// Create the connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//Check Connection
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

// SQL Query to Retrieve Data
$sql = "SELECT * FROM login";

// Execute the query
$result = mysqli_query($conn, $sql);

//Check if the query was successful
if(mysqli_num_rows($result) > 0) {
    // Output the data
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<br />Username: " . $row["user"] . " - Password: " . $row["pass"] . "";
    }
} else {
    echo "0 results";
}


?>