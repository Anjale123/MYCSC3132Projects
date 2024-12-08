<?php
require_once 'dbconf.php';
require_once 'myfun.php';

// Check if 'student_id' is passed in the URL
if (isset($_GET['student_id'])) {
    $student_id = $_GET['student_id'];
    Studentdetails($student_id, $connect);
} else {
    echo "Student ID is missing!";
}
?>