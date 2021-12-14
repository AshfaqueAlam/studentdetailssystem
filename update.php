<?php
 include 'config.php';
 $id=$_GET['updateid'];
//  from here
 $sql="select * from 'studentdetails' where sl_no=$id";
 $result=mysqli_query($con,$sql);
 $row=mysqli_fetch_assoc($result);
 $name=$row['name'];
 $roll_no=$row['roll_no'];
 $course_name=$row['course_name'];
 $address=$row['address'];
 $mobile_no=$row['mobile_no'];
//  sql problem
  if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $roll_no=$_POST['roll_no'];
    $course_name=$_POST['course_name'];
    $address=$_POST['address'];
    $mobile_no=$_POST['mobile_no'];

    $sql="update 'studentdetails' set sl_no=$id, name='$name', roll_no='$roll_no', course_name='$course_name',
    address='$address', mobile_no='$mobile_no' where sl_no=$id";

    
    $result=mysqli_query($con,$sql);
    if($result){
      echo "Data inserted sucessfully";
    }else{
      die(mysqli_error($con));
    }

  }

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>studentdetails</title>
  </head>
  <body>
  <div class="container my-5">
  <form method="post">
  <div class="mb-3" >
    <label  class="form-label">Name</label>
    <input type="text" class="form-control"
    placeholder= "Enter your Name" name= "name" autocomplete="off" value=<?php echo $name;?> >
    
  </div>
  <div class="mb-3">
    <label class="form-label">Roll No</label>
    <input type="text" class="form-control" 
    placeholder= "Enter your Roll Number" name= "roll_no" autocomplete="off" value=<?php echo $roll_no;?>>
  
  </div>
  <div class="mb-3">
    <label class="form-label">Course Name</label>
    <input type="text" class="form-control" 
    placeholder= "Enter your Course name" name= "course_name" autocomplete="off" value=<?php echo $course_name;?>>
  

  </div>
  <div class="mb-3">
    <label class="form-label">Address</label>
    <input type="text" class="form-control" 
    placeholder= "Enter your Current Address" name= "address" autocomplete="off" value=<?php echo $address;?>>
  

  </div>
  <div class="mb-3">
    <label class="form-label">Mobile No</label>
    <input type="text" class="form-control" 
    placeholder= "Enter your Mobile Number" name= "mobile_no" autocomplete="off" value=<?php echo $mobile_no;?>>
  </div>
 <button type="submit" class="btn btn-primary" name="submit">update</button>
</form>

</div>
  </body>
</html>