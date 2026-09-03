<? php 
session_start();
require 'db.php';
header ('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true); 


if ($_SERVER['REQUEST_METHOD'] == "POST") 
    {
        $student_id = trim ($data['student_id'] ?? '' );
        $name = trim ($data['name'] ?? '' ); 
        $email = trim ($data['email'] ?? '' );
        $department = trim ($data['department'] ?? '' ); 
        $workdshop_id = trim ($data['workshop_id'] ?? '' );


        if (!empty($student_id) && !empty($name) && !empty($email) && !empty($department) && !empty($workshop_id)) {
            echo json_encode(['error' => 'All fields are required']);
            exit;
        }
         if(!filter_var(($email), FILTER_VALIDATE_EMAIL)) {
            echo json_encode(['error' => 'Invalid email format']);
            exit;
        }

        $student_id_escaped = mysqli_real_escape_string($conn, $student_id);
        $name_escaped = mysqli_real_escape_string($conn, $name);
        $email_escaped = mysqli_real_escape_string($conn, $email);
        $department_escaped = mysqli_real_escape_string($conn, $department);
        $workshop_id_escaped = mysqli_real_escape_string($conn, $workshop_id);

        $sql = "INSERT INTO registrations (student_id, name, email, department, workshop_id) 
        VALUES ('$student_id_escaped', '$name_escaped', '$email_escaped', '$department_escaped', '$workshop_id_escaped')";

    
    }