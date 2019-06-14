<?php
// var_dump($_POST);
//
//    echo $_POST['vardas'] . '<br>' . $_POST['email'] . '<br>' .$_POST['message'];

//    $vardas = $_POST['vardas'];
//    $email = $_POST['email'];
//    $message = $_POST['message'];
//    if (isset($_POST['submit'])) {
    
        $fname = trim($_POST['fname']);
        $email = trim($_POST['email']);
        $message = trim($_POST['message']);

        if(!empty($fname) && !empty($email) && !empty($message)) {
            if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $from = "$email";
                $to = "kotryna.maldutyte@gmail.com";
                $author = 'from: ' . $fname . '' . $email;
                $mailmessage = htmlspecialchars($message);
                mail($to, $author, $mailmessage, $from);
                echo "<script>alert('$fname ,thanks for reaching out! Will contact You ASAP.')</script>";
//                echo ucfirst($fname) . ',thanks for reaching out! Will contact You ASAP.';
            }
        }

        include('db.php');
