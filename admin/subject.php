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


$selectquery = "SELECT * FROM courses ";



$showdata = mysqli_query($conn, $selectquery);





?>



<main id="main">
    <!-- ======= About Section ======= -->

    <h1 class="text-center text-capitalize pt-1 display-3 font-weight-normal">Subjects</h1>
    <hr class="w-75 mx-auto ">


    <div class="bg-white container mt-5 " style="width:auto; height: 500px;;">


        <section id="courses" class="about">

    <hr>

    <h2>Add new Subject</h2>
    <!-- add course section  -->
    <div class="add_courses">


        <?php
        include 'connection.inc.php';

        $country = "SELECT * FROM courses";
        $county_qry = mysqli_query($conn, $country);



        ?>

        <div class="d-flex justify-content-center align-items-center">
            <div class="container my-5">
                <div class="card mx-auto">
                    <div class="card-body">
                        <form action="add.php" method="POST">
                        <div class="input-group mb-3">
                            <select class="form-select" id="country" name="country">
                                <option selected disabled>Select course</option>
                                <?php while ($row = mysqli_fetch_assoc($county_qry)) : ?>
                                    <option value="<?php echo $row['id']; ?>"> <?php echo $row['name']; ?> </option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <select class="form-select" id="state" name='semester'>
                                <option selected disabled>Select Semester</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <input type="text" name="subject" class="form-control" placeholder="Enter Subject name">
                        </div>

                      <input type="submit" name="add_subject" class="btn btn-primary mt-4" > 

                        </form>

                    </div>

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
    
</script>






<?php
include('includes/scripts.php');
include('includes/footer.php');
?>

</div>


<!-- course add end here -->


</div>

</section>


<!-- End About Section -->








</form>
</div>
</div>
</section>






</form>
</div>
</div>
</section>


<?php
include('includes/scripts.php');
include('includes/footer.php');
?>