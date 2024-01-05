<?php
    $con= mysqli_connect('localhost', 'root','');
    mysqli_select_db($con,'portal');

   $id=$_GET['Scholarnumber'];
   $select="SELECT * FROM `registerat` WHERE Scholarnumber='$id'";
   $result=mysqli_query($con,$select);
    $row = mysqli_fetch_assoc($result);

$fname = $row['firstname'];
$lname = $row['lastname'];
$faname = $row['fathername'];
$moname = $row['mothername'];
$dob = $row['dateofbirth'];
$emailid = $row['email'];
$phoneno = $row['phone'];
$gend = $row['gender'];
$aadharno = $row['aadhar'];
$states = $row['state'];
$cities = $row['city'];
$add = $row['address'];

// if(isset($_POST['submit'])){
//     $fname = $_POST['firstname'];
// $lname = $_POST['lastname'];
// $faname = $_POST['fathername'];
// $moname = $_POST['mothername'];
// $dob = $_POST['dateofbirth'];
// $emailid = $_POST['email'];
// $phoneno = $_POST['phone'];
// $gend = $_POST['gender'];
// $aadharno = $_POST['aadhar'];
// $states = $_POST['state'];
// $cities = $_POST['city'];
// $add = $_POST['address'];

//     $select = " update registerat set firstname = $fname, lastname = '$lname', fathername = '$faname', mothername ='$moname', dob ='$dob', email ='$emailid', pnum ='$phoneno', gender ='$gend', aadhar ='$aadharno', state ='$states', city ='$cities', address ='$add' where Scholarnumber =$id";
//     $result=mysqli_query($con,$select);

    if($result){
        // echo "updated successfully ";
        header('location:display.php');
    } 
    else{
        die(mysqli_error($con));

    }

// }
?>
 
?>

<html>
    <head>
        <style>
.name{
    display:flex; 
    flex-direction:row; 
    justify-content:space-between;
}
span{
    color:red;
}

        </style>
    </head>
    <body>
        
    <div class="registerbox">
        <h2>Registration Form</h2>
        <form action="#" method="post" class="register" enctype="multipart/form-data">
            
            <div class="name">
                <label for="firstname" style="padding-right:.9rem">First Name:<span>*</span></label>
                <input type="text"  id="firstname" name="firstname" value =<?php echo $fname;?> required>

                <label for="lastname">Last Name:<span>*</span></label>
                <input type="text" value="<?php echo $row['lastname'];?>" id="lastname" name="lastname" required>
            </div>

            <div class="guardian" style="display: flex; flex-direction:row; justify-content:space-between;">

                <label for="fathername">Father's Name:<span>*</span></label>
                <input type="text" placeholder="Enter your father's  name " id="fathername" name="fathername" required>

                <label for="mothername" style="padding-left:.8rem">Mother's Name:<span
                    >*</span></label>
                <input type="text" placeholder="Enter your Mother's  name " id="mothername" name="mothername" required>


                <label for="dateofbirth">Date Of Birth:<span>*</span></label>
                <input type="date" placeholder="Enter your Date Of Birth " id="dateofbirth" name="dateofbirth" required>

            </div>

            <div class="credentials" style="display: flex; flex-direction:row;">

                <label for="email" style="padding-right:1rem;">E-mail Address:<span>*</span></label>
                <input type="email" placeholder=" Enter your E-mail Address " id="email" name="email" required>

               
            </div>

            <div class="numbers" style="display: flex; flex-direction:row;">

                <label for="phone" style="padding-right:1rem;">Phone Number:<span>*</span></label>
                <input type="tel" placeholder=" Enter Your Phone Number " id="phone" name="phone" required>

            </div>

            <div class="about" style="display: flex; flex-direction:row; justify-content:space-between;">

                <label for="gender" style="padding-right:3.5rem;">Gender:<span>*</span></label>
                <select id="gender" name="gender" required>
                    <option style="color:grey; opacity:.5" value=""> Select Gender </option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="prefer not to say ">prefer not to say</option>
                </select>

                <label for="aadhar number">Aadhar Number:<span>*</span></label>
                <input type="int" placeholder=" Enter Your Aadhar Number " id="aadhar" name="aadhar number" required>

            </div>

            <div class="location" style="display: flex; flex-direction:row; justify-content:space-between;">

                <label for="state" style="padding-right:3rem;">State:<span>*</span></label>
                <input type="text" placeholder=" Enter Your State " id="state" name="state" required>

                <label for="city" style="padding-right:1.9rem; padding-left:2rem">City:<span
                    >*</span></label>
                <input type="text" placeholder=" Enter Your City " id="city" name="city" required>

                
            </div>

            <label for="address">Address:<span>*</span></label>
            <input style="width:100%; height:3rem;" type="text" placeholder=" Enter Your Address " id="address"
                name="address" required>

            <div class="btn">
                <input type="submit" name="update" value="Update">
                <button
                    style="width:5rem; height:2.2rem; background:#4CAF50; border:none; color:#fff; margin-left:2rem; margin-top: .5rem;">
                    <a style="text-decoration:none; color:#fff; font-weight:400;" href="index.php"> Close </a></button>
                    <button><a href="update.php">Back</a></button>
            </div>
            
        </form>
    </div>
    
    </body>
    </html>

