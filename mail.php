<?php
      if ($_POST['message']) {
        $message = $_POST['message'];
        $email = $_POST['email'];
        $name = $_POST['name'];
        $headers = "From: ".$name."<".$email.">";

        mail('georgittanchev@gmail.com', "Contact from RRR", $message, $headers);
      }
    ?>

<script>
window.location.replace("http://georgittanchev.github.io/thanks.html");</script>