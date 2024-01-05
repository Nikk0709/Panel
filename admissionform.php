<?php
error_reporting(0);
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'portal');
$fname= $_POST['fullname'];
$faname = $_POST['fathername'];
$mname = $_POST['mothername'];
$bday= $_POST['dob'];
$mail = $_POST['email'];
$phone = $_POST['pnumber'];
$tally = $_POST['tnumber'];
$stat = $_POST['state'];
$ct = $_POST['city'];
$pcode = $_POST['pin'];
$cste = $_POST['caste'];
$gndr = $_POST['gender'];
$qual = $_POST['qualification'];
$brd10 = $_POST['boardname10'];
$pass10 = $_POST['passyear10'];
$roll10 = $_POST['rollno10'];
$cr = $_POST['score'];
$board12 = $_POST['boardname12'];
$pass12 = $_POST['passyear12'];
$roll12 = $_POST['rollno12'];
$score12 = $_POST['score12'];
$pguni = $_POST['universitypg'];
$pgclg = $_POST['collegepg'];
$pgcrs = $_POST['coursegra'];
$pgroll = $_POST['rollnopg'];
$pgpass = $_POST['passyearpg'];
$pg1 = $_POST['score1sem'];
$pg2 = $_POST['score2sem'];
$pg3 = $_POST['score3sem'];
$pg4 = $_POST['score4sem'];
$pg5 = $_POST['score5sem'];
$pg6 = $_POST['score6sem'];
$pg7 = $_POST['score7sem'];
$pg8 = $_POST['score8sem'];
$uguni = $_POST['universityug'];
$ugclg = $_POST['collegeug'];
$ugcrs = $_POST['courseug'];
$ugroll = $_POST['rollnoug'];
$ugpass = $_POST['passyearug'];
$ug1 = $_POST['score1'];
$ug2 = $_POST['score2'];
$ug3 = $_POST['score3'];
$ug4 = $_POST['score4'];
$ug5 = $_POST['score5'];
$ug6 = $_POST['score6'];
$q = "insert into admission(fullname,fathername,mothername,dob,mail,pnum,tnum,state,city,pincode,caste,gender,hqualification,board10,pass10,roll10,score10,board12,pass12,roll12,score12,graduniversity,clgname,course,idnum,passuniversity,1semresult,2semresult,3semresult,4semresult,5semresult,6semresult,7semresult,8semresult,postuniversity,pgclgname,pgcourse,pgid,pgpass,1semres,2semres,3semres,4semres,5semres,6semres)values('$fname', '$faname', '$mname', '$bday' ,'$mail','$phone','$tally','$stat','$ct','$pcode','$cste','$gndr','$qual','$brd10','$pass10','$roll10','$cr','$board12','$pass12','$roll12','$score12','$pguni','$pgclg','$pgcrs','$pgroll','$pgpass','$pg1','$pg2','$pg3','$pg4','$pg5','$pg6','$pg7','$pg8','$uguni','$ugclg','$ugcrs','$ugroll','$ugpass','$ug1','$ug2','$ug3','$ug4','$ug5','$ug6')";
$result = mysqli_query($con, $q);
if ($result) {
    echo '<script>alert("Register Successfully")</script>';
    // header('location:index.php');
} else {
    echo 'operation failed';
    // header('location:http://localhost/Blood/Adminmain.php');
}
?>
<html>
<head>
    <link rel="stylesheet" href="css/admissionform.css">
    </head>

<body>
    <form action="" method="post">
    <table>
        <tr>
            <th colspan="3">Admission Form</th>
        </tr>
        <tr style="height:1rem;">
            <td> <b>
                    <li> Personal Details </li>
                </b></td>
        </tr>
        <tr>
            <td style="padding-left:1.65rem"> Full Name: <input type="text" value="" name="fullname"> </td>
            <td>Father Name: <input type="text" value="" name="fathername" > </td>
            <td>Mother Name: <input type="text" value="" name="mothername" > </td>
        </tr>
        <tr>
            <td style="padding-left:0.7rem;">Date of birth: <input type="date"name="dob" id="dob"> </td>
            <td colspan="2" >E-Mail: <input type="email" placeholder="EMail Address" name="email" id="email"> </td>
        </tr>
        <tr>
            <td> Phone Number: <input  type="number" value="" name="pnumber"> </td>
            <td> Telephone No:<input type="number"  name="tnumber"> </td>
        </tr>
        <tr>
            <td> State: <input type="text" class="state" id="state" name="state"> </td>
            <td> City: <input type="text" class="city" id="city" name="city"></td>
            <td>Pin Code:<input type="text" class="pin" id="pin" name="pin"></td>
        </tr>
        <tr>
            <td>Caste: <select class="caste" id="caste" name="caste">
                <option>General</option>
                <option>OBC</option>
                <option>SC</option>
                <option>ST</option>
            </select> </td>
            <td>Gender: <select class="gndr" id="gender" name="gender">
                <option>Male</option>
                <option>Female</option>
                <option>other</option></td>
            </script>
        </tr>

        <tr style="height:1rem;">
            <td> <b>
                    <li> Educational Details </li>
                </b></td>
        </tr>
        <tr>
            <td style="padding-left:1.65rem"> Highest Qualification: 
            <select name="qualification" id="qualification">
                <option value="higherSecondary">Higher Secondary</option>
                <option value="diploma">Diploma</option>
                <option value="graduate">Graduation</option>
                <option value="postGraduation">Post Graduation</option>
            </select>
            </td>
        </tr>
        <tr>
            <td><b>Senior Secondary:-</b></td>
        </tr>
        <tr>
            <td>Board Name: <input type="text" value="" id="boardname10" name="boardname10" > </td>
            <td>Passing Year: <select name="passyear10" id="passyear10">
                    <option value="" style="color:grey; opacity:.5">Select Passing Year</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                </select></td>
        </tr>
        <tr>
            <td>Roll Number: <input type="text" name="rollno10" id="rollno10" style="width:13rem"> </td>
            <td>Score(%, cgpa): <input type="text" value="" id="score" name="score"> </td>
        </tr>
        <tr>
            <td><b>Higher Secondary:-</b></td>
        </tr>
        <tr>
            <td>Board Name: <input type="text" value=""id="boardname12" name="boardname12" > </td>
            <td>Passing Year: <select id="passyear12" name="passyear12"
                    id="passyear">
                    <option value="" style="color:grey; opacity:.5">Select Passing Year</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                </select></td>
        </tr>
        <tr>
            <td>Roll Number: <input type="text" name="rollno12" id="rollno12" style="width:13rem"> </td>
            <td>Score(%, cgpa): <input type="text" value="" id="score12" name="score12"> </td>
        </tr>

        
        <tr>
            <td><b>Graduation:-</b></td>
        </tr>
        <tr>
            <td>University: <input type="text" value="" id="university" name="university" > </td>
            <td>College Name: <input type="text" name="college" id="college">
            </td>
            <td> Select Course:
                <select name="coursegra" id="coursegra">
                    <option value="" style="color:grey; opacity:.5">Select Course</option>
                    <option value="2015">B.Tech</option>
                    <option value="2016">BCA</option>
                    <option value="2017">B.Com</option>
                    <option value="2018">B.Pharma</option>
                    <option value="2019">BSc</option>
                    <option value="2020">BBA</option>
                </select></td>
        </tr>
        <tr>
            <td>ID Number:<input type="text" name="rollnopg" id="rollnopg" style="width:13rem"> </td>
            <td> Passing Year:
                <select name="passyearpg" id="passyearpg">
                    <option value="" style="color:grey; opacity:.5">Select Passing Year</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                </select></td>
        </tr>
        <tr>
            <td>Score(%, cgpa) <span style="color:red; font-size:12px;">(Write NA if semester is not in your course)<span>            </td>
        </tr>
        <tr>
            <td>1st Sem: <input type="text" value="" id="score1sem" name="score1sem"></td>
            <td>2nd Sem: <input type="text" value="" id="score2sem"  name="score2sem"></td>
            <td>3rd Sem: <input type="text" value="" id="score3sem" name="score3sem"></td>
        </tr>
        <tr>

            <td>4th Sem: <input type="text" value="" id="score4sem" name="score4sem"></td>
            <td>5th Sem: <input type="text" value="" id="score5sem" name="score5sem"></td>
            <td>6th Sem: <input type="text" value="" id="score6sem" name="score6sem"></td>
        </tr>
        <tr>

        </tr>
        <tr>

            <td>7th Sem: <input type="text" value="" id="score7sem" name="score7sem"></td>
            <td>8th Sem: <input type="text" value="" id="score8sem" name="score8sem"></td>
        </tr>
        <tr>
        <td><b>Post Graduation:-</b></td>
        </tr>
        <tr>
            <td>University: <input type="text" value="" id="universityug" name="universityug" > </td>
            <td>College Name: <input type="text" name="collegeug" id="collegeug">
            </td>
            <td> Select Course:
                <select name="courseug" id="courseug">
                    <option value="" style="color:grey; opacity:.5">Select Course</option>
                    <option value="2015">M.Tech</option>
                    <option value="2016">MCA</option>
                    <option value="2017">M.Com</option>
                    <option value="2018">M.Pharma</option>
                    <option value="2019">MSc</option>
                    <option value="2020">MBA</option>
                </select></td>
        </tr>
        <tr>
            <td>ID Number:<input type="text" name="rollnoug" id="rollnoug" style="width:13rem"> </td>
            <td> Passing Year:
                <select name="passyearug" id="passyearug">
                    <option value="" style="color:grey; opacity:.5">Select Passing Year</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                </select></td>
        </tr>
        <tr>
            <td>Score(%, cgpa) <span>(Write NA if semester is not in your course)<span>            </td>
        </tr>
        <tr>
            <td>1st Sem: <input type="text" value="" id="score1" name="score1"></td>
            <td>2nd Sem: <input type="text" value="" id="score2" name="score2"></td>
            <td>3rd Sem: <input type="text" value="" id="score3" name="score3"></td>
        </tr>
        <tr>

            <td>4th Sem: <input type="text" value="" id="score4" name="score4"></td>
            <td>5th Sem: <input type="text" value="" id="score5" name="score5"></td>
            <td>6th Sem: <input type="text" value="" id="score6" name="score6"></td>
        </tr>
        <tr>

        </tr>
        <tr><td><input type="submit" value="submit"></td></tr>
    </table>
    </form>
</body>

</html>