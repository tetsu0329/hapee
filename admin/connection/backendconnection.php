<?php
    $sqlinquiry = mysqli_query($conn,"SELECT * FROM inquirytable");
    $inquirycount = mysqli_num_rows($sqlinquiry);

    $usertable = mysqli_query($conn,"SELECT * FROM usertable");
    $usercount = mysqli_num_rows($usertable);

    $producttable = mysqli_query($conn,"SELECT * FROM producttable");
    $prodcount = mysqli_num_rows($producttable);

    $contacttable = mysqli_query($conn,"SELECT * FROM  contacttable");
?>