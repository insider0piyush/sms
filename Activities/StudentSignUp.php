<!DOCTYPE html>
<html lang="en-US" style="text-align: center;">
<meta charset="UTF-8">

<head>
    <title>
        Sign Up Here
    </title>
</head>
<style>
    #grad_back {
       background: linear-gradient(to left,red,indigo,white);
    }

    .label {
        font-size: 32px;
        font-family: "Comic Sans MS";
        font-weight: bold;
        font-style: italic;
        color: white;
    }

    .legend {
        margin-right: auto;
        margin-left: auto;
        padding: 3px 6px;
    }

    .input {
        margin: 0.4rem;
    }

    .btn {
        border: 2px solid black;
        background-color: white;
        color: black;
        padding: 14px 28px;
        font-size: 16px;
        cursor: pointer;
    }

    .signin {
        border-color: crimson;
        color: crimson;
    }

    .signin:hover {
        background-color: crimson;
        color: white;
    }
</style>

<body id="grad_back">

    <table style="margin:auto ; margin-top:90px ; margin-bottom:90px">
        <td>
            <img src="images/home_register.png"></br>
            <label class="label">
                Welcome To SMS ~</br>
            </label>
            <label class="label">
                ~ Registration Form</br>
            </label>
        </td>

        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>

        <td>
            <table>
                <td>
                    <tr>
                        <form action="" method="post">
                            <fieldset
                                style="border-radius:15px ; border-color:white ; border-width:3px ; background-color: #FF7474">
                                <legend style="color:white ; font-family:Comic Sans MS">
                                    <fieldset
                                        style="border-radius:15px ; border-color:white ; border-width:3px ; background-color: crimson">
                                        Student Personal Details</fieldset>
                                </legend>

                                <div style="margin-top: 17px;">
                                    <input type="text" name="studfname" id="studfname"
                                        style="border-radius:12px ; border-color:transparent ; outline-color:transparent ; margin-inline-start: 7px;padding: 7px; width: 128px; margin-right: 0px;"
                                        placeholder="Enter First Name" required>
                                    <input type="text" name="studlname" id="studlname"
                                        style="border-radius:12px ; border-color:transparent ; outline-color:transparent ; margin-inline-start: 7px;padding: 7px; width: 128px;"
                                        placeholder="Enter Last Name" required>
                                </div>

                                <div style="margin-top: 7px;">
                                    <input type="email" name="studemail" id="studemail"
                                        style="border-radius:12px ; border-color:transparent ; outline-color:transparent ; margin-inline-start: 7px;padding: 7px; width: 282px;"
                                        placeholder="Enter Email Id" required>
                                </div>

                                <div style="margin-top: 7px;">
                                    <select name="mcode"
                                        style="border-right: 10px solid transparent ; border-radius:15px ; border-color:transparent ; outline-color:transparent ; margin-inline-start: 7px ; padding: 7px;">
                                        <option name="mcode">+91</option>
                                        <option name="mcode">+93</option>
                                        <option name="mcode">+213</option>
                                        <option name="mcode">+1</option>
                                        <option name="mcode">+57</option>
                                        <option name="mcode">+49</option>
                                        <option name="mcode">+30</option>
                                        <option name="mcode">+261</option>
                                        <option name="mcode">+60</option>
                                        <option name="mcode">+212</option>
                                        <option name="mcode">+258</option>
                                        <option name="mcode">+242</option>
                                        <option name="mcode">+262</option>
                                        <option name="mcode">+58</option>
                                        <option name="mcode">+84</option>
                                        <option name="mcode">+260</option>
                                    </select>
                                    <input type="text" name="studmno" id="studmno"
                                        style="border-radius:15px ; border-color:transparent ; outline-color:transparent ; margin-inline-start: 7px;padding: 7px; width: 202px;"
                                        placeholder="Enter Mobile Number" required>
                                </div>

                                <div>
                                    <label for="studgender"
                                        style="font-family:Comic Sans MS ; color:white ; padding: 7px;margin-top: 7px;">Gender</label>
                                    <select name="studgender"
                                        style="border-radius:15px ; border-color:transparent ; outline-color:transparent ; margin-inline-start: 7px ; padding: 7px; width: 232px ; margin-top: 7px ; border-right: 16px solid transparent">
                                        <option name="studgender">Male</option>
                                        <option name="studgender">Female</option>
                                        <option name="studgender">Other</option>
                                    </select>
                                </div>
                            </fieldset>
                    </tr>
                    </br>
                    <tr>
                        <fieldset
                            style="border-radius:15px ; border-color:white ; border-width:3px ; background-color: #FF7474">
                            <legend style="color:white ; font-family:Comic Sans MS">
                                <fieldset
                                    style="border-radius:15px ; border-color:white ; border-width:3px ; background-color: crimson">
                                    Student Educational Detail</fieldset>
                            </legend>
                            <div style="margin-top: 7px;">
                                <input type="text" name="studschool" id="studschool"
                                    style="border-radius:12px ; border-color:transparent ; outline-color:transparent ; margin-inline-start: 7px;padding: 7px; width: 282px;"
                                    placeholder="Last Year School Name" required>
                            </div>

                            <div style="margin-top: 7px;">
                                <input type="text" name="std12" id="std12"
                                    style="border-radius:12px ; border-color:transparent ; outline-color:transparent ; margin-inline-start: 7px;padding: 7px; width: 282px;"
                                    placeholder="Student 12th Percentage" required>
                            </div>

                            <div style="margin-top: 7px;">
                                <input type="text" name="std10" id="std10"
                                    style="border-radius:12px ; border-color:transparent ; outline-color:transparent ; margin-inline-start: 7px;padding: 7px; width: 282px;"
                                    placeholder="Student 10th Percentage" required>
                            </div>

                            <div style="margin-top: 7px;">
                                <input type="text" name="otheredu" id="otheredu"
                                    style="border-radius:12px ; border-color:transparent ; outline-color:transparent ; margin-inline-start: 7px;padding: 7px; width: 282px;"
                                    placeholder="Other Education Qualification" >
                            </div>
                        </fieldset>
                    </tr>
                </td>
            </table>
        </td>

        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>

        <td>
            <fieldset style="border-radius:15px ; border-color:white ; border-width:3px ; background-color: #FF7474">
                <legend style="color:white ; font-family:Comic Sans MS">
                    <fieldset
                        style="border-radius:15px ; border-color:white ; border-width:3px ; background-color: crimson">
                        Student Residential Data</fieldset>
                </legend>
                <div style="margin-top: 7px;">
                    <textarea name="studaddress" id="studaddress"
                        style="border-radius:12px ; border-color:transparent ; outline-color:transparent ; margin-inline-start: 7px;padding: 7px; width: 282px; "
                        placeholder="Enter Your Address" required></textarea>
                </div>

                <div>
                    <input type="text" name="studcity" id="studcity"
                        style="border-radius:12px ; border-color:transparent ; outline-color:transparent ; margin-inline-start: 7px;padding: 7px; width: 282px;"
                        placeholder="Enter Current City" required>
                </div>

                <div>
                    <label for="studstate"
                        style="padding: 7px;margin-top: 7px ; font-family:Comic Sans MS ; color:white">State </label>
                    <select name="studstate"
                        style="border-right: 16px solid transparent ; border-radius:12px ; border-color:transparent ; outline-color:transparent ; margin-inline-start: 7px;padding: 7px; width: 232px;margin-top: 7px;">
                        <option name="studstate">Gujarat</option>
                        <option name="studstate">Maharastra</option>
                        <option name="studstate">Delhi</option>
                        <option name="studstate">MadhyaPradesh</option>
                        <option name="studstate">Banglore</option>
                    </select>
                </div>

                <div style="margin-top: 7px;">
                    <input type="text" name="studpincode" id="studpincode"
                        style="border-radius:12px ; border-color:transparent ; outline-color:transparent ; margin-inline-start: 7px;padding: 7px; width: 282px;"
                        placeholder="Enter Correct Pincode" required>
                </div>

                <div style="margin-top: 7px;">
                    <input type="password" name="studpassword" id="studpassword"
                        style="border-radius:12px ; border-color:transparent ; outline-color:transparent ; margin-inline-start: 7px;padding: 7px; width: 282px;"
                        placeholder="Create Strong Password" required>
                </div>

            </fieldset>

            </br>

            <div>
                <input type="submit" name="btnSignUp" id="btnSignUp" value="Sign up" style="padding-left: 32px;padding-right: 32px;padding-top: 7px;padding-bottom: 7px;font-size: 17px;
                        font-family: Comic Sans MS ; 
                        font-weight: bold ; 
                        color: white ; 
                        background-color: crimson ; 
                        border-color: crimson ; outline-color: white ; border-radius: 12px;
                        margin-top: 22px;">
            </div>

            </form>

            <form action="" method="post">
                <div>
                    <button class="btn signin" style="padding-left: 32px;padding-right: 32px;padding-top: 7px;padding-bottom: 7px;font-size: 17px;
                                font-family: Comic Sans MS ; 
                                font-weight: bold ;   
                                border-radius: 12px ; 
                                margin-top: 22px" name="alreadyAccount">Already A Student ?
                    </button>
                </div>
            </form>
        </td>
    </table>
    <?php
    include "C:\inetpub\wwwroot\php\sms\Utilities\_init.php";
    $createTable = "CREATE TABLE IF NOT EXISTS $STUDENT(
                $STUD_FNAME VARCHAR(20),$STUD_LNAME VARCHAR(20),
                $STUD_EMAIL VARCHAR(42) UNIQUE,$STUD_MOBILE BIGINT(10) UNIQUE,$STUD_GENDER VARCHAR(10),
                $STUD_SCHOOL VARCHAR(52), $STUD_12TH FLOAT ,$STUD_10TH FLOAT,$STUD_OTHER_EDU TEXT ,
                $STUD_ADDRESS VARCHAR(100), $STUD_CITY VARCHAR(20), $STUD_STATE VARCHAR(10),$STUD_PINCODE INT(6),$STUD_PASSWORD TEXT)";

    $queryExe=mysqli_query($con,$createTable);
    
    if (isset($_POST['btnSignUp'])) {
        $FNAME = $_POST[$STUD_FNAME];
        $LNAME = $_POST[$STUD_LNAME];
        $EMAIL = $_POST[$STUD_EMAIL];
        $MCODE = $_POST['mcode'];
        $MNO = $_POST[$STUD_MOBILE];
        $MOBILE = $MCODE . $MNO;
        $GENDER = $_POST[$STUD_GENDER];
        $M12TH=$_POST[$STUD_12TH];
        $M10TH=$_POST[$STUD_10TH];
        $STUD_SCHOOL=$_POST[$STUD_SCHOOL];
        $OTHER_EDU=$_POST[$STUD_OTHER_EDU];
        $ADDRESS = $_POST[$STUD_ADDRESS];
        $CITY = $_POST[$STUD_CITY];
        $STATE = $_POST[$STUD_STATE];
        $PINCODE = $_POST[$STUD_PINCODE];
        $PASSWORD = $_POST[$STUD_PASSWORD];

        $sql = "SELECT * FROM $STUDENT WHERE $STUD_EMAIL='$EMAIL' OR $STUD_MOBILE=$MOBILE ";
        $dbquery = mysqli_query($con, $sql);
        $data = mysqli_num_rows($dbquery);
        if ($data) {
            ?>
            <script type="text/javascript">
                alert("User account already exist, Please kindly contact to administrator")
                window.open("http://localhost/php/sms/Home/Login.php", "_self")
            </script>
            <?php
        } else {
            $insertInTable = "INSERT INTO $STUDENT VALUES('$FNAME','$LNAME','$EMAIL',$MOBILE,'$GENDER','$STUD_SCHOOL',$M12TH,$M10TH,'$OTHER_EDU','$ADDRESS','$CITY','$STATE',$PINCODE,'$PASSWORD')";
            $queryExe = mysqli_query($con, $insertInTable);
            if ($queryExe) {
                ?>
                <script type="text/javascript">
                    alert("Successfully Register !")
                    window.open("http://localhost/php/sms/Activities/StudentSignIn.php", "_self")
                </script>
                <?php
            }
        }
    }

    if (isset($_POST['alreadyAccount'])) {
        ?>
    <script>
        window.open("http://localhost/php/sms/Activities/StudentSignIn.php", "_self")
    </script>
    <?php
    }
    ?>
</body>

</html>