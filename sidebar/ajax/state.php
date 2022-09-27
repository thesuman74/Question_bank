<?php
include '../connection.inc.php';
$country_id =   $_POST['country_data'];

$state = "SELECT * FROM states WHERE country_id = $country_id";

$state_qry = mysqli_query($conn, $state);
// $output="";
$output = '<option value="">Select State</option>';
while ($state_row = mysqli_fetch_assoc($state_qry)) {
    $output .= '<option value="' . $state_row['id'] . '">' . $state_row['name'] . '</option>';
}
echo $output;
