<?php
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'portal');
if(!$con){
    echo 'connection failed';
}

if(isset($_POST['submit'])){
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "image/".$filename;
    move_uploaded_file($tempname, $folder);
    $filename1 = $_FILES["uploadsign"]["name"];
    $tempname1 = $_FILES["uploadsign"]["tmp_name"];
    $folder1 = "image/".$filename1;
    move_uploaded_file($tempname1, $folder1);
    $name = $_POST['fullname'];
    $faname = $_POST['fathername'];
    $enroll = $_POST['enrollment'];
    $dobirth = $_POST['dob'];
    $emailid = $_POST['email'];
    $pswd = $_POST['psw'];
    $phoneno = $_POST['phone'];
    $whatno = $_POST['whatsapp'];
    $gend = $_POST['gender'];
    $cat = $_POST['category'];
    $aadharno = $_POST['aadhar'];
    $states = $_POST['state'];
    $cities = $_POST['city'];
    $pincd = $_POST['pincode'];
    $add = $_POST['address'];
    $q = "insert into registerat(img_source,firstname,middlename,lastname,fathername,mothername,dob,email,psw,pnum,wnum,gender,category,aadhar,state,city,pincode,address)values('$tempname','$fname','$mname','$lname','$faname','$moname','$dob','$emailid','$pswd','$phoneno','$whatno','$gend','$cat','$aadharno','$states','$cities','$pincd','$add')";
    $result = mysqli_query($con, $q);
    if ($result) {
        echo '<script>alert("Register Successfully")</script>';
        // header('location:index.php');
    } else {
        echo 'operation failed';
        // header('location:http://localhost/Blood/Adminmain.php');
    }
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/examform.css">
    <link rel="stylesheet" href="https://cdnjs.cloudfare.com/ajax/libs/twitter-bootstrap/S.1.1/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="conatiner">
        <center>
            <h1>Exam Form</h1>
        </center>
        <div class="content">
            <form action="examform.php" method="post">
                <div class="personal">
                    <div class="per_cred">
                        <div class="per_label"> <label for="fullname">Full Name:</label>
                        <div>  <label for="fathername"> Father Name:</label></div>
                        <div> <label for="enrollment">Enrollment Number:</label></div>
                        <div>  <label for="dob"> Date of Birth:</label></div>
                        <div> <label for="email"> E-Mail: </label></div>
                        </div>
                        <div class="per_input">
                            <input type="text" name="fullname">
                            <input type="text" name="fathername">
                            <input type="text" name="enrollment">
                            <input type="date" name="dob">
                            <input type="mail" name="email">
                        </div>
                    </div>
 
                    <h3>Subject Applied For:<br></h3>
                    <table>
                        <tr>
                            <th>Subject Name</th>
                            <th>Subject Code</th>
                        </tr>
                        <tr>
                            <td><input type="text" name="subname1"></td>
                            <td><input type="text" name="subcode1"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="subname2"></td>
                            <td><input type="text" name="subcode3"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="subname3"></td>
                            <td><input type="text" name="subcode3"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="subname4"></td>
                            <td><input type="text" name="subcode4"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="subname5"></td>
                            <td><input type="text" name="subcode5"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="subname6"></td>
                            <td><input type="text" name="subcode6"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="subname7"></td>
                            <td><input type="text" name="subcode7"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="subname8"></td>
                            <td><input type="text" name="subcode8"></td>
                        </tr>
                    </table>
                </div>
                <div class="uploadfile">
                    Image: <input type="file" name="uploadfile">
                    Signature: <input type="file" name="uploadsign">
                </div>
                <div>
                    <input type="submit" name="submit" value="submit">
                </div>
            </form>
        </div>
    </div>
</body>

</html>