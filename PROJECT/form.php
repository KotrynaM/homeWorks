<?php
// var_dump($_POST);

//    echo $_POST['vardas'] . '<br>' . $_POST['email'] . '<br>' .$_POST['message'];

//    $vardas = $_POST['vardas'];
//    $email = $_POST['email'];
//    $message = $_POST['message'];
//    if (isset($_POST['submit'])) {

        $fname = trim($_POST['fname']);
        $email = trim($_POST['email']);
        $subject = trim($_POST['subject']);

        if(!empty($fname) && !empty($email) && !empty ($subject)) {
//            echo "<p>Vardas: $vardas</p>";
            if(filter_var($email, FILTER_VALIDATE_EMAIL)) {

                $from = "$email";
                $to = "kotryna.maldutyte@gmail.com";
                $autorius = 'from: ' . $fname . '' . $email;
                $zinute = htmlspecialchars($subject);
                mail($to, $autorius, $zinute, $from);

                echo "<script>alert('Thanks for reaching out! Will contact You ASAP.');</script>";
            }
        }

        include('db.php');
