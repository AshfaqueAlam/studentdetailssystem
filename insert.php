<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Student Details System" />
  <meta name="author" content="Ashfaque Alam & Swapnomoy Chatterjee" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <title>Student Details System</title>
</head>
<body>
  <div class="container-fluid" style="width: 900px; margin: 0 auto;">
    <div class="row">
      <div class="col-md-12">
        <div class="mt-5 mb-3 clearfix">
          <div class="row">
            <div class="col-md-4 col-4">
              <a href="insert.php" class="btn btn-success text-light pull-left" style="text-decoration:none;"><i class="bi bi-person-plus-fill"></i> Add New Student</a>
            </div>
            <div class="col-md-8 col-8">
              <h2 class="pull-right">Students' Details</h2>
            </div>
          </div>
        </div>
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">Sl No</th>
              <th scope="col">Name</th>
              <th scope="col">Roll No</th>
              <th scope="col">Course Name</th>
              <th scope="col">Address</th>
              <th scope="col">Mobile No</th>
              <th scope="col">Operations</th>
            </tr>
          </thead>
          <tbody>
            <!-- <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td colspan="2">Larry the Bird</td>
              <td>@twitter</td>
            </tr> -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- JavasScript - Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
