<?php


include('connection.inc.php');
// adding course name in database 

if (isset($_POST['add_courses'])) { 

  $course = $_POST['course'];
// echo $course;
  $insert_course = "INSERT INTO countries (name) values('$course')";
  $course_query = mysqli_query($conn,$insert_course);

  if ($course_query) {
    ?>
    <script type="text/javascript">
      alert("course added sucessfully");
       window.location.href = 'courses.php';

    </script>

    <?php
  }
  else{

    ?>
    <script type="text/javascript">
      alert("Error while adding course in the database");
    </script>

    <?php
  }
}
// end of add course 




  // start of data_entry

if (isset($_POST['data_entry'])) {
  $course_id= $_POST['course'];
  $semester_id = $_POST['semester'];
  $subject_id = $_POST['subject'];
  $link = $_POST['link'];
  $file = $_POST['file'];


// for selecting course name 
   $select_course = "select name from countries where id = '$course_id'";
  $course_query = mysqli_query($conn,$select_course);
$course_result = mysqli_fetch_array($course_query,MYSQLI_ASSOC);

// for selecting semester name 

  $select_semester = "select name from states where id = '$semester_id'";
  $semester_query = mysqli_query($conn,$select_semester);
$semester_result = mysqli_fetch_array($semester_query,MYSQLI_ASSOC);

// for selecting subject name 

  $select_subject = "select name from subject where id = '$subject_id'";
  $subject_query = mysqli_query($conn,$select_subject);
$subject_result = mysqli_fetch_array($subject_query,MYSQLI_ASSOC);


// extracting name 
  $course_name = $course_result['name'];
  $semester_name = $semester_result['name'];
  $subject_name = $subject_result['name'];


// for inserting course,semester,subject,link and file in questions table 

   $insert = "INSERT INTO questions (course,semester,subject,link,file ) values('$course_name','$semester_name','$subject_name','$link','$file')";
  $insert_query = mysqli_query($conn,$insert);

    if ($insert_query) {
    ?>
    <script type="text/javascript">
      alert("data added sucessfully");
       window.location.href = 'data_entry.php';

    </script>

    <?php
  }
  else{

    ?>
    <script type="text/javascript">
      alert("Error while adding course in the database");
       window.location.href = 'data_entry.php';
      
    </script>

    <?php
  }





}
?>