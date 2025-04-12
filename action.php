<?php 

    if (isset($_POST['first_name'])) {
        $first_name = $_POST['first_name'];
        echo $first_name;
    }
    else{
        echo "no value";
    }
    
 ?>