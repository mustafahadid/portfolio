<?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $mailFrom = $_POST['email'];
        $message =$_POST['message'];
        $subject =['Web mail'];


        $mailTo = "mustafahadid40@gmail.com";
        $headers = "From: ".$mailFrom;
        $txt = "You have recieved an email from".$name.".\n\n".$message;

        mail($mailTo, $subject, $txt, $headers);
        header("Location: index.php?mailsend");
    }
?>