<?php
	$conn = mysqli_connect("localhost", "root", "", "hapeedb");
    function terminatePage($errorMessage, $redirect = false) {
        if($redirect)
            
        die ('ERROR: '.$errorMessage);
        exit;
    }
?>