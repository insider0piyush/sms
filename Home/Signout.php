<?php

unset($_SESSION['email']);
?>
    <script>
        alert ("You are logged out successslly");
        window.open("http://localhost/php/sms/Home/Login.php","_self");
        </script>
<?php

?>