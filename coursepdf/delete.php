<?php
  $conn = new mysqli('localhost', 'root', '', 'crudoperation');
  if (!$conn) {
      die("Connection was not successfully: " . mysqli_error($conn));
  }
if (isset($_GET['delete_course'])) {
            $course_id = $_GET['delete_course'];

            $sql = "DELETE FROM course WHERE course_id='$course_id'";

            if ($conn->query($sql) === TRUE) {
                echo "Course deleted successfully";
                header('location:admin.php');
            } else {
                echo "Error deleting course: " . $conn->error;
            }
        }

