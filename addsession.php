<?php
include 'index.php';
error_reporting(0);
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'portal');
    $crse = $_POST['course'];
    $sstartyr = $_POST['sessionstartyear'];
    $sendyr = $_POST['sessionendyear'];
    $descrip = $_POST['description'];
    $q = "insert into addsession(course,sessionstartyear,sessionendyear,description)values('$crse','$sstartyr','$sendyr','$descrip')";
    $result = mysqli_query($con, $q);
    if ($result) {
        // echo '<script>alert("Register Successfully")</script>';
        // header('location:index.php');
    } else {
        echo 'operation failed';
        // header('location:http://localhost/Blood/Adminmain.php');
    }
?>


<div class="content" style="margin-left:200px; padding: 16px; margin-top:4rem;">



<!DOCTYPE html>
<html>

<head>
    <title> Add Session </title>
    <link rel="stylesheet" href="addsession.css">
</head>

<body>
    <div class="addsessionbox" style="width:1000px;
margin:0 auto;
padding: 40px;
border: 2px solid f2f2f2;
background-color: white; background-color: #f2f2f2;">
        <div class="addsession">
            <h1 style="font-size; 2rem; margin-left:25rem; padding-bottom:1rem">Add Session</h1>
            <form  method="post">
                <div style="margin-bottom:1rem">
                    <label for="course" style="margin-right:6.7rem;">Course</label>
                    <select style="height:45px; width:25rem " name="course" id="course">
                        <option style="color:grey; opacity:.5" value="">Select Course </option>
                        <option value="B.tech">B.tech</option>
                        <option value="M.tech">M.tech</option>
                        <option value="B.Sc">B.Sc</option>
                        <option value="M.Sc">M.Sc</option>
                        <option value="BBA">BBA</option>
                        <option value="MBA">MBA</option>
                        <option value="B.com">B.com</option>
                        <option value="M.com">M.com</option>
                    </select>
                </div>
 
               <div style="margin-bottom:1rem">
                <label for="Session Start Year" style="margin-right:2.3rem;"> Session Start Year</label>
                <input type="text" style="height:40px; width:24.6rem;" name="sessionstartyear" id="SessionStartYear" placeholder="YYYY">
               </div>
                <div style="margin-bottom:1rem">
                <label for="Session End Year" style="margin-right:2.6rem;"> Session End Year</label>
                <input type="text" style="height:40px; width:24.6rem;" name="sessionendyear" id="SessionEndYear" placeholder="YYYY">
                </div>
                <div style="margin-bottom:1rem">
                <label for="Description" style="margin-right:4.9rem;"> Description</label>
                <input name="description" style="height:60px; width:24.5rem;"id="description"  placeholder=" Description">
                
                </div>
                <div style="float:right;">
                    <input type="submit" name="submit" style="background-color:lightblue; height:30px; width:8rem;" value="Submit">
                    <input type="button" style="background-color:lightgrey; height:30px; width:8rem;"value="Reset" onclick="window.location.href='index.html'">
                    <input type="button" style="background-color:red;height:30px; width:8rem;"value="Cancel" onclick="window.location.href='index.html'">
                </div>
            </form>
        </div>
    </div>
</body>

</html>
</div>