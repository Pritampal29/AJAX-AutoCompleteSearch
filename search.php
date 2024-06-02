<?php
include ('dbcon.php');

if(isset($_POST['input'])) {
    $data = $_POST['input'];

    $query = "SELECT * FROM `get_users_data` WHERE `name` LIKE '$data%'";
    $run = mysqli_query($conn,$query);
    $row = mysqli_num_rows($run);
    
    $output = "<ul class='list-unstyled text-center'>";

    if($row > 0) {
        while ($result = mysqli_fetch_assoc($run)) {
            $output .= "<li>".$result['name']."</li>";
        }
    }

    $output .= "</ul>";

    echo $output;
}


?>