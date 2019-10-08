<?php
    $servername = "localhost";
    $username = "admin";
    $password = "_camelCase";
    $dbname = "tailor";
    // Create connection
    $mysqli = new mysqli($servername, $username, $password, $dbname);
    if ($mysqli->connect_error) {
        exit('Could not connect');
    }

    $myArray = array();
    if ($result = $mysqli->query("SELECT * FROM user")) {
        $tempArray = array();
        while($row = $result->fetch_object()) {
                $tempArray = $row;
                array_push($myArray, $tempArray);
            }
        echo json_encode($myArray);
    }
?>