<?php
session_start();

if (!isset($_SESSION['fullname'])) {
  echo "Please login ";
  header('location:login.php');
}
// if (isset($_POST['Add'])) {
//   echo "Please login ";
//   header('location:add.php');

// }



?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <?php include 'links/links.php'; ?>

</head>

<body>

  <h1>Welcome back,<?php echo $_SESSION['fullname']; ?></h1>


  <button type="submit" class="btn btn-default btn-success " name="ass"><a href="logout.php" class="text-white float-right ">logout</a></button>

  <button type="submit" class="btn btn-default btn-primary " name="home"><a href="index.php" class="text-white float-right ">Home</a></button>

  <button type="button" class="btn btn-warning " data-toggle="modal" data-target="#exampleModalCenter">ADD</button>



  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalCenterTitle">Sign Up</h2>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="add.php" method="POST" enctype="multipart/form-data">
            <label for="username">Full name:</label>
            <input type="text" class="form-control" name="fname" required>
            <div class="form-group">
              <label for="email">Email address:</label>
              <input type="email" class="form-control" id="email" name="email">
            </div>

            <div class="form-group">
              <label for="email">Phone number</label>
              <input type="number" class="form-control" name="phone" required>
            </div>
            <label for="file">Upload photo:</label>
            <input type="file" name="photo" required><br>

            <button type="submit" class="btn btn-default btn-success mt-3">Submit</button>

          </form>

        </div>

      </div>
    </div>
  </div>



  </section>




  <section>

    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Full name</th>
          <th scope="col">Email</th>
          <th scope="col">Phone</th>
          <th scope="col">Photo</th>
          <th scope="col">Edit</th>
          <th scope="col">Delete</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include 'dbcon.php';

        $selectquery = "select * from regtable";

        $query = mysqli_query($con, $selectquery);



        while ($result = mysqli_fetch_array($query)) {
        ?>

          <tr>
            <td><?php echo $result['id']; ?></td>
            <td><?php echo $result['fullname']; ?></td>
            <td><?php echo $result['email']; ?></td>
            <td><?php echo $result['phone']; ?></td>
            <td><img src="<?php echo $result['photo'];  ?>" width="100px" height="60px"></td>
            <td>
              <form action="edit.php?id=<?php echo $result['id']; ?>" method="POST">

                <button type="submit" class="btn btn-success">Edit</button>

            <td><button type="submit" class="btn btn-danger" name="delete">DELETE</button></td>


            </form>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </section>
</body>

</html>