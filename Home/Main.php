<!DOCTYPE html>
<html>
    <?php session_start(); ?>
    <head>
    </head>
    <body>
        <?php echo "You are login as ".$_SESSION['email'] ?><a href="http://localhost/php/sms/Home/Signout.php">Click here</a> <?php " to sign Out !" ?>
    </body>
</html>