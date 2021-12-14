<?php
include 'config.php';?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Student Details System" />
    <meta name="author" content="Ashfaque Alam & Swapnomoy Chatterjee" />
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"
    />

    <title>Student Details System</title>
    <style>
      .bi-trash-fill:hover {
        color: #e21717 !important;
      }

      .bi-pencil-fill:hover {
        color: #997206 !important;
      }

      
    </style>
    <script>
      $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
      });
    </script>
  </head>

  <body>
    <div class="container-fluid" style="width: 900px; margin: 0 auto">
      <div class="row">
        <div class="col-md-12">
          <div class="mt-5 mb-3 clearfix">
            <div class="row">
              <div class="col-md-4 col-4">
                <a
                  href="insert.php"
                  class="btn btn-success text-light pull-left"
                  style="text-decoration: none"
                  ><i class="bi bi-person-plus-fill"></i> Add New Student</a
                >
              </div>
              <div class="col-md-8 col-8">
                <h2 class="pull-right">Students' Details</h2>
              </div>
            </div>
          </div>

          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Sl No.</th>
                <th scope="col" colspan="2">Name</th>
                <th scope="col">Roll No.</th>
                <th scope="col" colspan="2">Course Name</th>
                <th scope="col" colspan="2">Address</th>
                <th scope="col">Mobile No.</th>
                <th scope="col">Operations</th>
              </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM studentdetails";
                        if($result = mysqli_query($con, $sql)){
                            if(mysqli_num_rows($result) > 0){
                               
                                    while($row = mysqli_fetch_array($result)){ 
                                      
                                        $sl_no=$row['sl_no'];
                                        $name=$row['name'];
                                        $roll_no=$row['roll_no'];
                                        $course_name=$row['course_name'];
                                        $address=$row['address'];
                                        $mobile_no=$row['mobile_no'];
                                        echo '<tr>
                                        <th scope="row">'.$sl_no.'</th>
                                        <td colspan="2">'.$name.'</td>
                                        <td>'.$roll_no.'</td>
                                        <td colspan="2">'.$course_name.'</td>
                                        <td colspan="2">'.$address.'</td>
                                        <td>'.$mobile_no.'</td>
                                        <td style="text-align: center">
                                          
                                          <a
                                            href="update.php?updateid='.$sl_no.'"
                                            class="mr-3"
                                            title="Update Record"
                                            data-toggle="tooltip"
                                            ><i class="bi bi-pencil-fill text-primary"></i></a
                                          >&emsp;
                                          <a href="delete.php? deleteid='.$sl_no.'"
                                           title="Delete Record" 
                                           data-toggle="tooltip"
                                            ><i class="bi bi-trash-fill text-primary"></i
                                          ></a>
                                        </td>
                                      </tr>'; 
                                    }
                                    echo "</tbody>";                            
                                echo "</table>";
                                // Free result set
                                mysqli_free_result($result);
                            } else{
                                echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                            }
                        } else{
                            echo "Oops! Something went wrong. Please try again later.";
                        }
     
                        // Close connection
                        mysqli_close($con);
                ?> 
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- JavasScript - Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>

</html>