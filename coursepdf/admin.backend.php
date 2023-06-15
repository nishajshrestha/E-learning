<?php
    $conn = new mysqli('localhost', 'root', '', 'crudoperation');
    if (!$conn) {
        die("Connection was not successfully: " . mysqli_error($conn));
    }
    // Add course
    if (isset($_POST['add_course'])) {
        $course_name = $_POST['course_name'];
        $course_description = $_POST['course_description'];
        $pdf_name = $_FILES['pdf']['name']; // Get the file name
        $pdf_tmp = $_FILES['pdf']['tmp_name']; // Get the temporary file path

        // Move the uploaded file to a desired location
        $target_directory = "../uploads"; // Specify the directory where you want to store the uploaded files
        $target_file = $target_directory . basename($pdf_name);
        move_uploaded_file($pdf_tmp, $target_file);

        $sql = "INSERT INTO course (course_name, pdf, course_description) VALUES ('$course_name', '$target_file', '$course_description')";
        header("location:admin.php");
        if (mysqli_query($conn, $sql)) {
            echo "Course added successfully";
        } else {
            die(mysqli_error($conn));
        }
    }
    ?>