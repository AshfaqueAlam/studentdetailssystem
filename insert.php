<?php
require_once 'config.php';
if (isset($_POST['submit']) && $_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $roll_no = $course_name = $address = $mobile_no = "";
  $name_err = $rno_err = $cname_err = $address_err = $mno_err = "";
  // $name = $_POST['name'];
  $input_name = trim($_POST["name"]);
  if (empty($input_name)) {
    $name_err = "Please enter a name.";
  } elseif (!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[a-zA-Z\s]+$/")))) {
    $name_err = "Please enter a valid name.";
  } else {
    $name = $input_name;
  }
  // $roll_no = $_POST['roll_no'];
  $input_rno = trim($_POST["roll_no"]);
  if (empty($input_rno)) {
    $rno_err = "Please enter a roll number.";
  } else {
    $roll_no = $input_rno;
  }
  // $course_name = $_POST['course_name'];
  $input_cname = trim($_POST["course_name"]);
  if (empty($input_cname)) {
    $cname_err = "Please enter a course name.";
  } else {
    $course_name = $input_cname;
  }
  // $address = $_POST['address'];
  $input_address = trim($_POST["address"]);
  if (empty($input_address)) {
    $address_err = "Please enter an address.";
  } else {
    $address = $input_address;
  }
  // $mobile_no = $_POST['mobile_no'];
  $input_mno = trim($_POST["mobile_no"]);
  if (empty($input_mno)) {
    $mno_err = "Please enter a mobile number.";
  } elseif (!filter_var($input_mno, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[0-9\s]+$/")))) {
    $mno_error = "Please enter a valid name.";
  } else {
    $mobile_no = $input_mno;
  }

  if (empty($name_err) && empty($rno_err) && empty($cname_err) && empty($address_err) && empty($mno_err)) {
    $sql = "insert into `studentdetails` (name,roll_no,course_name,address,mobile_no)
    values('$name','$roll_no','$course_name','$address','$mobile_no')";
    $result = mysqli_query($con, $sql);

    if ($result) {
      echo "<svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">";
      echo "  <symbol id=\"check-circle-fill\" fill=\"currentColor\" viewBox=\"0 0 16 16\">";
      echo "    <path d=\"M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z\"/>";
      echo "  </symbol>";
      echo "</svg>";
      echo "<div class=\"alert alert-success d-flex align-items-center\" role=\"alert\">";
      echo "  <svg class=\"bi flex-shrink-0 me-2\" width=\"24\" height=\"24\" role=\"img\" aria-label=\"Success:\"><use xlink:href=\"#check-circle-fill\"/></svg>";
      echo "  <div>";
      echo "    Data inserted successfully!";
      echo "  </div>";
      echo "</div>";
      header("location: index.php");
    } else {
      // die(mysqli_error($con));
      echo "<svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">";
      echo "  <symbol id=\"exclamation-triangle-fill\" fill=\"currentColor\" viewBox=\"0 0 16 16\">";
      echo "    <path d=\"M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z\"/>";
      echo "  </symbol>";
      echo "</svg>";
      echo "<div class=\"alert alert-danger d-flex align-items-center\" role=\"alert\">";
      echo "  <svg class=\"bi flex-shrink-0 me-2\" width=\"24\" height=\"24\" role=\"img\" aria-label=\"Danger:\"><use xlink:href=\"#exclamation-triangle-fill\"/></svg>";
      echo "  <div>";
      echo "    Error occurred. Please try again.";
      echo "  </div>";
      echo "</div>";
    }
  }
  mysqli_close($con);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Student Details System" />
  <meta name="author" content="Ashfaque Alam & Swapnomoy Chatterjee" />
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  <title>Insert Details</title>
  <script>
    if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
    }
  </script>
</head>

<body>
  <div class="container my-5">
    <form method="post">
      <div class="mb-3">
        <label for="validationDefault01" class="form-label">Name</label>
        <input type="text" class="form-control has-validation" id="validationDefault01" placeholder="Enter your Name" name="name" autocomplete="off" required />
      </div>

      <div class="mb-3">
        <label for="validationDefault02" class="form-label">Roll No.</label>
        <input type="text" class="form-control has-validation" id="validationDefault02" placeholder="Enter your Roll Number" name="roll_no" autocomplete="off" required />
      </div>

      <div class="mb-3">
        <label for="validationDefault03" class="form-label">Course Name</label>
        <input type="text" class="form-control has-validation" id="validationDefault03" placeholder="Enter your Course name" name="course_name" autocomplete="off" required />
      </div>

      <div class="mb-3">
        <label for="validationDefault04" class="form-label">Address</label>
        <input type="text" class="form-control has-validation" id="validationDefault04" placeholder="Enter your Current Address" name="address" autocomplete="off" required />
      </div>

      <div class="mb-4">
        <label for="validationDefault05" class="form-label">Mobile No.</label>
        <input type="number" class="form-control has-validation" id="validationDefault05" placeholder="Enter your Mobile Number" name="mobile_no" autocomplete="off" required />
      </div>

      <div class="row">
        <div class="col d-flex justify-content-center align-items-center">
          <button type="submit" class="btn btn-primary" name="submit">
            Submit
          </button>
        </div>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js">
  </script>
</body>

</html>