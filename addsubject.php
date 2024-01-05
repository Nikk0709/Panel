<?php
include 'index.php';
error_reporting(0);
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'portal');
    $crse = $_POST['course'];
    $ssion = $_POST['session'];
    $smster = $_POST['semester'];
    $subtype = $_POST['subjecttype'];
    $subname = $_POST['subjectname'];
    $subcredit = $_POST['subjectcredit'];
    $subcode = $_POST['subjectcode'];
    $maxextmark = $_POST['maxexternalmarks'];
    $intmark = $_POST['internalmarks'];
    $q = "insert into subject(course, session, semester, subjecttype, subjectname, credit, code, extmark, intmark)values('$crse','$ssion','$smster','$subtype','$subname','$subcredit','$subcode','$maxextmark','$intmark')";
    $result = mysqli_query($con, $q);
    if ($result) {
        // echo '<script> alert ("Added Successfully") </script>';
    } else {
        echo '<script> alert ("Error") </script>';
    }
?>
<div class="content" style="margin-left:200px; padding: 16px; margin-top:4rem;">
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 75rem;
            background-color: #E0E0E0;
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
    <form  method="post">
        <table>
            <table>
                <tr style=" display: flex; align-items: center; justify-content: center;">
                    <td>
                        <h1>Add Subject</h1>
                    </td>
                </tr>
                <tr>
                    <td>Course:
                        <select style="height: 1.5rem; width:25rem; margin-left: 8.3rem;" id="course" name="course">
                            <option>Select Course</option>
                        </select>
                    </td>
                    </div>
                </tr>
                <tr>
                    <td>Session:
                        <select style="height: 1.5rem; width:25rem; margin-left: 8rem;" id="session" name="session">
                            <option>Select Session</option>
                        </select>
                    </td>
                    </div>
                </tr>
                <tr>
                    <td>Semester:
                        <select style="height: 1.5rem; width:25rem; margin-left: 7.3rem;" id="semester" name="semester">
                            <option>Select Semester</option>
                        </select>
                    </td>
                    </div>
                </tr>
                <tr>
                    <td>Subject Type:
                        <select style="height: 1.5rem; width:25rem; margin-left: 5.9rem;" id="subjecttype"  name="subjecttype"
                            onchange="changeDropdown(this.value);">
                            <option> Select Subject Type</option>
                            <option value="main">Main</option>
                            <option value="optional">Optional</option>
                            <option>Comprehensive Viva-Voice</option>
                            <option>Seminar</option>
                            <option>Lab Viva-voice</option>
                        </select>
                    </td>
                    </div>
                </tr>

                <tr>
                    <td>Subject Name:


                        <label for="Subject Name" style="margin-right:5.5rem;"></label>
                        <input type="text" style="height:20px; width:24.5rem;" name="subjectname" id="subjectname"
                            placeholder="Basic Of IT">

                    </td>
                    <div>
                </tr>
                <tr>
                    <td>Subject Credit:


                        <label for="Subject Credit" style="margin-right:5.5rem;"></label>
                        <input type="text" style="height:20px; width:24.5rem;" name="subjectcredit" id="subjectcredit"
                            placeholder="5">

                    </td>
                    <div>
                </tr>
                <tr>
                    <td id="add_to_me">Subject Code:


                        <label for="Subject Code" style="margin-right:5.8rem;"></label>
                        <input type="text" style="height:20px; width:24.5rem;" name="subjectcode" id="subjectcode"
                            placeholder="81V">

                    </td>
                    <div>
                </tr>

                </div>
                </tr>

                <tr>
                    <td> Max External Marks:


                        <label for="Max External Marks" style="margin-right:3.0rem;"></label>
                        <input type="text" style="height:20px; width:24.5rem;" name="maxexternalmarks"
                            id="maxexternalmarks" placeholder="100">

                    </td>
                <tr>
                    <td id="internalMarks">Internal Marks:
                        <label for="Internal Marks" style="margin-right:3.0rem;"></label>
                        <input name="internal" style="height:20px; width:24.5rem; margin-left:2.2rem;"
                            name="internalmarks" id="internalmarks" type="text" ; placeholder="100">


                    </td>
                    <div>
                </tr>

                <tr>
                    <td colspan="4"><button type="Submit"
                            style=" float: right; background-color: red; padding: 8px 20px; margin-bottom: 1rem; margin-left: .6rem;"><a
                                href="index.php" style="text-decoration: none; color:white;"
                                class="Cancel">Cancel</a></button><button type="Submit"
                            style=" float: right; background-color: white; padding: 8px 20px; margin-left: .6rem;"><a
                                href="addsubject.php" style="text-decoration: none; color:black;"
                                class="Reset">Reset</a></button>
                        <!-- <button type="Submit"
                            style="float: right; background-color: blue; padding: 8px 20px; margin-left: .6rem;"><a
                                href="" style="text-decoration: none; color:white;" name="submit" class="Submit">Submit</a></button> -->
                                <button type="submit"name ="submit">Submit</button>
                    </td>
                </tr>

            </table>
    </form>
    <script>
 var courseObject = {

"B.Tech": {
    "2021-2025": ["1st sem", "2nd sem", "3rd sem", "4th sem", "5th sem", "6th sem", "7th sem", "8th sem"],
    "2022-2026": ["1st sem", "2nd sem", "3rd sem", "4th sem", "5th sem", "6th sem", "7th sem", "8th sem"],
    "2023-2027": ["1st sem", "2nd sem", "3rd sem", "4th sem", "5th sem", "6th sem", "7th sem", "8th sem"]
},
"M.Tech": {
    "2021-2023": ["1st sem", "2nd sem", "3rd sem", "4th sem"],
    "2022-2024": ["1st sem", "2nd sem", "3rd sem", "4th sem"],
    "2023-2025": ["1st sem", "2nd sem", "3rd sem", "4th sem"]
},
"B.Com": {
    "2021-2024": ["1st sem", "2nd sem", "3rd sem", "4th sem", "5th sem", "6th sem"],
    "2022-2025": ["1st sem", "2nd sem", "3rd sem", "4th sem", "5th sem", "6th sem"],
    "2023-2026": ["1st sem", "2nd sem", "3rd sem", "4th sem", "5th sem", "6th sem"]
},
"Pharmacy": {
    "2021-2025": ["1st sem", "2nd sem", "3rd sem", "4th sem", "5th sem", "6th sem", "7th sem", "8th sem"],
    "2022-2026": ["1st sem", "2nd sem", "3rd sem", "4th sem", "5th sem", "6th sem", "7th sem", "8th sem"],
    "2023-2027": ["1st sem", "2nd sem", "3rd sem", "4th sem", "5th sem", "6th sem", "7th sem", "8th sem"]
}
}
window.onload = function () {
var courseSel = document.getElementById("course");
var sessionSel = document.getElementById("session");
var semesterSel = document.getElementById("semester");
var subjectTypeSel = document.getElementById("subjecttype");
var internalMarksInput = document.getElementById("internalmarks");


for (var x in courseObject) {
    courseSel.options[courseSel.options.length] = new Option(x, x);
}
courseSel.onchange = function () {
    semesterSel.length = 1;
    sessionSel.length = 1;
    subjectTypeSel.selectedIndex = 0;
    // internalMarksInput.style.display = "none";

    for (var y in courseObject[this.value]) {
        sessionSel.options[sessionSel.options.length] = new Option(y, y);
    }
}
sessionSel.onchange = function () {
    semesterSel.length = 1;
    subjectTypeSel.selectedIndex = 0;

    var z = courseObject[courseSel.value][this.value];
    for (var i = 0; i < z.length; i++) {
        semesterSel.options[semesterSel.options.length] = new Option(z[i], z[i]);
    }
}
}

    function changeDropdown() {
        var subject = document.getElementById("subjecttype").value;
        if (subject == "main") {
            document.getElementById("internalMarks").style.visibility = 'visible';
        }
        else {
            document.getElementById("internalMarks").style.visibility = 'hidden';
        }
    }
</script>
</body>
</html>
</div>