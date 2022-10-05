<?php
session_start();

if (!isset($_SESSION['fullname'])) {
  echo "Please login ";
  header('location:login.php');
}
?>

<?php
include('includes/header.php');
include('includes/navbar.php');
include('includes/links/links.php');






?>

<main id="main">
    <!-- ======= hero Section ======= -->

    <h1 class="text-center text-capitalize pt-1 display-3 font-weight-normal">search database</h1>
    <hr class="w-75 mx-auto ">


    <div class="bg-white container mt-5 " style="width:auto; height: 500px;">

<!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                   
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>course</th>
                                    <th>semester</th>
                                    <th>subject</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","world");

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM questions WHERE CONCAT(course,semester,subject) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['id']; ?></td>
                                                    <td><?= $items['course']; ?></td>
                                                    <td><?= $items['semester']; ?></td>
                                                    <td><?= $items['subject']; ?></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php
    include('includes/scripts.php');
    include('includes/footer.php');
    ?>