<?php
// error_reporting(0);
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'portal');
    $fname = $_POST['fullname'];
    $faculty = $_POST['facultymentor'];
    $email = $_POST['emailid'];
    $contact = $_POST['contactno'];
    $whatsapp = $_POST['whatsappno'];
    $faname= $_POST['fathername'];
    $pmob = $_POST['parentmobno'];
    $pmail = $_POST['parentmail'];
    $bday = $_POST['dateofbirth'];
    $gndr = $_POST['gender'];
    $aadhar = $_POST['aadharno'];
    $addcity = $_POST['currentadd_city'];
    $htown = $_POST['hometown'];
    $hstate = $_POST['homestate'];
    $clang= $_POST['currentadd_citylang'];
    $ctlang = $_POST['townlang'];
    $slang = $_POST['statelang'];
    $lknown = $_POST['langknown'];
    $olang = $_POST['otherlang'];
    $query = "insert into placementbasicinfo(fullname,facultymentor,mail,contactnum,whatsappnum,fathername,parentnum,parentmail,dob,gender,aadharnum,currentadd_city,hometown,homestate,citylang,townlang,statelang,lang_known,otherlang)values('$fname','$faculty','$email','$contact''$whatsapp','$faname','$pmob','$pmail','$bday','$gndr','$aadhar','$addcity','$htown','$hstate','$clang','$ctlang','$slang','$lknown','$olang')";
    $result=mysqli_query($con, $query);
    if($result){
         echo '<script>alert("Register Successfully")</script>';
        // header('location:index.php');
    } else {
        echo 'operation failed';
        // header('location:http://localhost/Blood/Adminmain.php');
    }
    

?>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
      background-color: lightgrey;
     border: .5px solid black;
    }

    td,
    th {
      text-align: left;
      padding: 8px;
      padding-bottom: 1rem;
      padding-top: 1rem;
    }
    tr td input{
      border: .2px ; 
      width:20rem;
       border-radius:.5rem; 
       border-bottom:.5px solid black;
    }

    .btn button{
      background-color: #4e73df; 
      padding: 4px 16px; 
      margin-bottom: 1rem;
    }
    .next{
      text-decoration: none;
       color:white;
    }
  </style>
</head>

<body>
  <form method="post">
  <h1 style="color: blue;">Placement Details</h1>
  <table>
    <tr>
      <td>Full Name:</td>
      <td>Faculty Mentor:</td>
    </tr>
    <tr>
      <td><input type="text" class="fn" name="fullname" id="fullname" required></td>
      <td><input type="text" class="fm" name="facultymentor" id="facultymentor" required></td>
    </tr>
    <tr>
      <td>Email Id (Mention Personal Id only):</td>
      <td>Contact No.:</td>
      <td>Whatsapp No.</td>
    </tr>
    <tr>
      <td><input type="text" class="Email" name="emailid" id="emailid"></td>
      <td><input type="text" class="contact" name="contactno" id="contactno" required></td>
      <td><input type="text" class="whatsapp" name="whatsappno" id="whatsappno" required></td>
    </tr>
    <tr>
      <td>Father's Name:</td>
      <td>Parent's Mobile No.:</td>
      <td>Email Id (Parent):</td>
    </tr>
    <tr>
      <td><input type="text" class="fathername" name="fathername" id="fathername" required></td>
      <td><input type="text" class="parentmob" name="parentmobno" id="parentmobno"></td>
      <td><input type="text" class="emailparent"name="parentmail" id="parentmail"  required></td>
    </tr>
    <tr>
      <td>Date of Birth:</td>
      <td>Gender:</td>
      <td>Aadhar No.:</td>
    </tr>
    <tr>
      <td><input type="text" class="dob" name="dateofbirth" id="dateofbirth" required></td>
      <td><input type="text" class="gender" name="gender" id="gender"></td>
      <td><input type="text" class="aadhar" name="aadharno" id="aadharno" required></td>
    </tr>
    <tr>
      <td>Current Address / City:</td>
      <td>Home Town:</td>
      <td>Home State:</td>
    </tr>
    <tr>
      <td><input type="text" class="curadd" name="currentadd_city" id="currentadd_city" required></td>
      <td><input type="text" class="town" name="hometown" id="hometown" ></td>
      <td><input type="text" class="state" name="homestate" id="homestate" required></td>
    </tr>
    <tr>
      <td>Languages you can Speak (other than Hindi & English):</td>
      <td>Languages you can Speak (other than Hindi & English):</td>
      <td>Languages you can Speak (other than Hindi & English):</td>
    </tr>
    <tr>
      <td><input type="text" class="languages" name="currentadd_citylang" id="currentadd_citylang" required></td>
      <td><input type="text" class="lycs" name="townlang" id="townlang"></td>
      <td><input type="text" class="lang" name="statelang" id="statelang" required></td>
    </tr>
    <tr>
      <td>Languages Known(Expect Hindi & English):</td>
      <td>Other Languages(Not in the List):</td>
    </tr>
    <tr>
      <td><input type="text" class="knownlanguage" name="langknown" id="langknown" required></td>
      <td><input type="text" class="otherlanguage" name="otherlang" id="otherlang"></td>
    </tr>
   
    <tr>
    <td class="btn"><button type="Submit"><a href="pedu.php" class="next">Next</a></button></td>
  </tr>
</table>
  </form>
  </body>

</html>