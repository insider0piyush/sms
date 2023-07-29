<?php

unset($_SESSION['email']);
?>
    <script>
        alert ("You are logged out successslly");
        window.open("http://localhost/php/sms/Activities/StudentSignIn.php","_self");
        </script>
<?php

?>