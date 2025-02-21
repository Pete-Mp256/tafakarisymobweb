<?php
// Database connection
$servername = "localhost";  // Change if using a remote database
$username = "root";         // Update with your DB username
$password = "";             // Update with your DB password
$dbname = "sympo_database"; // Your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect form data
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$gender = $_POST['gender'];
$organisation = $_POST['organisation'];
$position = $_POST['position'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$country = $_POST['country'];
$state = $_POST['state'];
$career_stage = $_POST['career_stage'];
$sector = $_POST['sector'];
$background = $_POST['background'];
$expertise = $_POST['expertise'];
$event_goals = $_POST['event_goals'];
$personal_connection = $_POST['personal_connection'];
$thematic_activities = $_POST['thematic_activities'];
$heard_about = $_POST['heard_about'];

// Prepare and execute SQL statement
$sql = "INSERT INTO applicants (first_name, last_name, gender, organisation, position, email, phone, country, state, career_stage, sector, background, expertise, event_goals, personal_connection, thematic_activities, heard_about) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssssssssssssss", 
    $first_name, $last_name, $gender, $organisation, $position, $email, $phone,  $country, $state, $career_stage, $sector, $background, $expertise, $event_goals, $personal_connection, $thematic_activities, $heard_about
);

if ($stmt->execute()) {
    echo "<script>
        alert('Application submitted successfully!');
        window.location.href = 'index.html'; // Redirect to the form page
    </script>";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
