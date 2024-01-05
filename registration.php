<?php 
    error_reporting(0);
    ?>
<!DOCTYPE html>
<html>

<head>
    <title>Registration Page</title>
    <link rel="stylesheet" href="css/registration.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="registerbox">
        <h2>Registration Form</h2>
        <form action="#" method="post" class="register" enctype="multipart/form-data">
            
            <div class="name" style="display:flex; flex-direction:row; justify-content:space-between;">
                <label for="firstname" style="padding-right:.9rem">First Name:<span style="color:red;">*</span></label>
                <input type="text" placeholder="Enter your first name " id="firstname" name="firstname" required>

                <label for="middlename" style="padding-right:1rem">Middle Name:</label>
                <input type="text" placeholder="Enter your middle name " id="middlename" name="middlename">

                <label for="lastname">Last Name:<span style="color:red;">*</span></label>
                <input type="text" placeholder="Enter your last name " id="lastname" name="lastname" required>
            </div>

            <div class="guardian" style="display: flex; flex-direction:row; justify-content:space-between;">

                <label for="fathername">Father's Name:<span style="color:red;">*</span></label>
                <input type="text" placeholder="Enter your father's  name " id="fathername" name="fathername" required>

                <label for="mothername" style="padding-left:.8rem">Mother's Name:<span
                        style="color:red;">*</span></label>
                <input type="text" placeholder="Enter your Mother's  name " id="mothername" name="mothername" required>


                <label for="dateofbirth">Date Of Birth:<span style="color:red;">*</span></label>
                <input type="date" placeholder="Enter your Date Of Birth " id="dateofbirth" name="dateofbirth" required>

            </div>

            <div class="credentials" style="display: flex; flex-direction:row;">

                <label for="email" style="padding-right:1rem;">E-mail Address:<span style="color:red;">*</span></label>
                <input type="email" placeholder=" Enter your E-mail Address " id="email" name="email" required>

                <label for="psw" style="padding-left:2rem; padding-right:3.5rem;">Password:<span
                        style="color:red;">*</span></label>
                <input type="password" placeholder=" Enter Password Here " id="psw" name="psw" required>

            </div>

            <div class="numbers" style="display: flex; flex-direction:row;">

                <label for="phone" style="padding-right:1rem;">Phone Number:<span style="color:red;">*</span></label>
                <input type="tel" placeholder=" Enter Your Phone Number " id="phone" name="phone" required>

                <label for="whatsapp" style="padding-left:1rem; padding-right:.6rem;">Whatsapp Number:<span
                        style="color:red;">*</span></label>
                <input type="tel" placeholder=" Enter Your Whatsapp Number " id="whatsapp" name="whatsapp" required>

            </div>

            <div class="about" style="display: flex; flex-direction:row; justify-content:space-between;">

                <label for="gender" style="padding-right:3.5rem;">Gender:<span style="color:red;">*</span></label>
                <select id="gender" name="gender" required>
                    <option style="color:grey; opacity:.5" value=""> Select Gender </option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="prefer not to say ">prefer not to say</option>
                </select>

                <label for="category" style="padding-right:2.3rem; padding-left:3rem">Category:<span
                        style="color:red;">*</span></label>
                <select id="category" name="category" required>
                    <option style="color:grey; opacity:.5" value=""> Select Category </option>
                    <option value="general">General</option>
                    <option value="general-ews">General-EWS</option>
                    <option value="obc">OBC</option>
                    <option value="sc">SC</option> city
                    <option value="st">ST</option>
                    <option value="others">Others</option>
                </select>

                <label for="aadhar number">Aadhar Number:<span style="color:red;">*</span></label>
                <input type="int" placeholder=" Enter Your Aadhar Number " id="aadhar" name="aadhar number" required>

            </div>

            <div class="location" style="display: flex; flex-direction:row; justify-content:space-between;">

                <label for="state" style="padding-right:3rem;">State:<span style="color:red;">*</span></label>
                <input type="text" placeholder=" Enter Your State " id="state" name="state" required>

                <label for="city" style="padding-right:1.9rem; padding-left:2rem">City:<span
                        style="color:red;">*</span></label>
                <input type="text" placeholder=" Enter Your City " id="city" name="city" required>

                <label for="pincode">Pincode:<span style="color:red;">*</span></label>
                <input type="text" placeholder=" Enter Your Pincode " id="pincode" name="pincode" required>

            </div>

            <label for="address">Address:<span style="color:red;">*</span></label>
            <input style="width:100%; height:3rem;" type="text" placeholder=" Enter Your Address " id="address"
                name="address" required>

                <div class="img-container" style="display:flex; flex-direction:column; margin-bottom:10px; align-items:center;">
           
                <div class="img-area" data-img="" style="display:flex; flex-direction:column; justify-content:center; align-items:center;">
                    <i class='bx bxs-cloud-upload icon'></i>
                    <h3>Upload Image</h3>
                    <p>Image Size must be less than <span>2MB</span></p>
                </div>
                <input type="file" name="uploadfile" id="uploadfile">
            </div>

            <div class="btn">
                <input type="submit" name="submit" value="Register">
                <button
                    style="width:5rem; height:2.2rem; background:#4CAF50; border:none; color:#fff; margin-left:2rem; margin-top: .5rem;">
                    <a style="text-decoration:none; color:#fff; font-weight:400;" href="index.php"> Close </a></button>
                    <button><a href="display.php">Display</a></button>
            </div>
            
        </form>
    </div>
    <script src="js/registration.js"></script>
</body>

</html>

<?php
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'portal');
            $filename = $_FILES["uploadfile"]["name"];
            $tempname = $_FILES["uploadfile"]["tmp_name"];
            $folder = "image/".$filename;
            move_uploaded_file($tempname, $folder);
            $fname = $_POST['firstname'];
            $mname = $_POST['middlename'];
            $lname = $_POST['lastname'];
            $faname = $_POST['fathername'];
            $moname = $_POST['mothername'];
            $dob = $_POST['dateofbirth'];
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
?>
