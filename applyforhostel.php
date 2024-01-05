<?php
// error_reporting(0);
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'portal');
if (isset($_POST['submit'])) {
    $htype = $_POST['hosteltype'];
    $hname = $_POST['hostelname'];
    $rtype = $_POST['roomtype'];
  
    $q = "insert into hostel(hosteltype,hostelname,roomtype)values('$htype','$hname','$rtype')";
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





<!DOCTYPE html>
<html>

<head>
  <title>Hostel Application Form</title>
  <link rel="stylesheet" href="applyforhostel.css">
</head>

<body>
  <div class="applyforhostelbox" style="width: 500px;
    margin: 0 auto;
    padding: 40px;
    border: 2px solid f2f2f2;
    background-color: white; background-color: #f2f2f2;">
    <div class="applyforhostel">
      <h1 style="font-size: 2rem; margin-left:3rem;">Hostel Application Form</h1>
      <form action="process_application.php" method="POST">

        <label for="hosteltype">Hostel Type:<span style="color:red;">*</span></label>
        <select name="hosteltype" id="hosteltype">
          <option style="color:grey; opacity:.5" value=""> Select Hostel </option>
          <option value="Boys">Boys Hostel</option>
          <option value="Girls">Girls Hostel</option>
        </select>
        <br><br>

        <label for="hostelname">Hostel Name:<span style="color:red;">*</span></label>
        <input type="text" name="hostelname" placeholder=" Write Your Hostel Name " id="hostelname" required>
        <br><br>

        <label for="roomtype">Room Type:<span style="color:red;">*</span></label>
        <select name="roomtype" id="roomtype">
          <option style="color:grey; opacity:.5" value=""> Select Room </option>
          <option value="Single Room">Single Room</option>
          <option value="Double Room">Double Room</option>
          <option value="Triple Room">Triple Room</option>
        </select>
        <br><br>

        <input type="submit" name="submit" value="Submit Request">
        <input type="type" value="Exit" onclick="window.location.href='dashboard.php'">
      </form>
    </div>
  </div>
</body>

</html>