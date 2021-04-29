<?php
if($_POST["message"]) {
    mail("d00363830@dmail.dixie.edu", "Form to email message", $_POST["message"], "From: an@email.address");
}
?>