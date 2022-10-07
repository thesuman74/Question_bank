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

include('connection.inc.php');

?>

<main id="main">
    <!-- ======= hero Section ======= -->

    <h1 class="text-center text-capitalize pt-1 display-3 font-weight-normal">Data Entry</h1>
    <hr class="w-75 mx-auto ">


    <div class="bg-white container mt-5 " style="width:auto; height: 500px;">


<?php

$country = "SELECT * FROM courses";
$county_qry = mysqli_query($conn, $country);



<<<<<<< HEAD
include 'includes/header.php' ?>
=======
 ?>
>>>>>>> temp

<div class="d-flex justify-content-center align-items-center">
    <div class="container my-5">
        <div class="card mx-auto">

            <form action="add.php" method="POST">
            <div class="card-body">
                <div class="input-group mb-3">
                    <select class="form-select" id="country" name="course" required>
                        <option selected disabled value="">Select course</option>
                        <?php while ($row = mysqli_fetch_assoc($county_qry)) : ?>
                            <option value="<?php echo $row['id']; ?>" > <?php echo $row['name']; ?> </option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <select required class="form-select" id="state" name='semester'  >
                        <option selected disabled value="">Select Semester</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <select class="form-select" id="city" name="subject" required >
                        <option selected disabled value="">Select Subject</option>
                    </select>
                </div>
                <div class="input-group">
                    <input type="text" name="link" class="form-control" placeholder="Enter google drive link" required  >
                </div>


                <div class="input-group">
                    <input type="file" name="file" class="form-control mt-3" >
                </div>

            </div>
                
                <input type="submit" name="data_entry" class="btn btn-primary form-group ml-3" > 

            </form>

        </div>


    </div>
</div>

<?php include 'includes/footer.php' ?>

<script>
    // County State

    $('#country').on('change', function() {
        var country_id = this.value;
        console.log(country_id);
        $.ajax({
            url: 'ajax/state.php',
            type: "POST",
            data: {
                country_data: country_id
            },
            success: function(result) {
                $('#state').html(result);
                // console.log(result);
            }
        })
    });
    // state city
    $('#state').on('change', function() {
        var state_id = this.value;
        console.log(state_id);
        $.ajax({
            url: 'ajax/city.php',
            type: "POST",
            data: {
                state_data: state_id
            },
            success: function(data) {
                $('#city').html(data);
                console.log(data);
            }
        })
    });
</script>






    <?php
    include('includes/scripts.php');
    include('includes/footer.php');
    ?>