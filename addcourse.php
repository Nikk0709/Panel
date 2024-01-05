<?php
include 'index.php';

error_reporting(0);
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'portal');
$crsetype = $_POST['coursetype'];
$crsename = $_POST['coursename'];
$crsefname = $_POST['coursefullname'];
$maxsem = $_POST['maxsemester'];
$descript = $_POST['description'];
$q = "insert into course(coursetype,coursename,coursefullname,maxsem,descript)values('$crsetype', '$crsename', '$crsefname', '$maxsem' ,'$descript')";
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

<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 75rem;
            background-color: beige;
            margin: .5rem;
            margin-left: 2rem;
            border: 1px solid black;
        }

        td,
        th {
            text-align: left;
            padding: 8px;
            padding-bottom: 1rem;
            padding-top: 1rem;
        }
    </style>
</head>

<body>
    <form action="" method="post">
        <table>
            <tr style=" display: flex; align-items: center; justify-content: center;">
                <td>
                    <h1>Add course</h1>
                </td>
            </tr>
            <tr>
                <td>Course type:
                    <select style="height: 1.5rem; width:25rem; margin-left: 4rem;" id="coursetype" name="coursetype">
                        <option>B.tech</option>
                        <option>M.Tech</option>
                        <option>B.com</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Course Name:
                    <input style="margin-left: 3rem;" type="text" class="coursename" id="coursename" name="coursename"
                        required>
                </td>
            </tr>
            <tr>
                <td>Course Full Name:
                    <input style="margin-left: 1rem;" type="text" class="coursefullname" id="coursefullname"
                        name="coursefullname" required>
                </td>
            </tr>
            <tr>
                <td>Max Semester:
                    <input style="margin-left: 2.5rem;" type="text" class="maxsemester" id="maxsemester"
                        name="maxsemester" required>
                </td>
            </tr>
            <tr>
                <td>Description:
                    <input style="margin-left: 4rem;" type="text" class="description" id="description"
                        name="description" required>
                </td>
            </tr>
            <tr>
                <td colspan="4"><button type="Submit"
                        style=" float: right; background-color: red; padding: 8px 20px; margin-bottom: 1rem; margin-left: .6rem;"><a
                            href="index.php" style="text-decoration: none; color:white;"
                            class="Cancel">Cancel</a></button><button type="Submit"
                        style=" float: right; background-color: white; padding: 8px 20px; margin-left: .6rem;"><a
                            href="" style="text-decoration: none; color:black;" class="Reset">Reset</a></button> <input
                        type="submit" value="submit" name="submit"> 
                </td>
            </tr>
        </table>
    </form>
</body>

</html>
</div>