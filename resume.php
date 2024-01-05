<!DOCTYPE html>
<html>

<head>
  <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td,
    th {
      text-align: left;
      padding: 8px;
      padding-bottom: 1rem;
      padding-top: 1rem;
    }

    tr {
      border: 1px solid black;
    }
    .careerob{
    height: 3rem;
    width:90%;
    }
</style>
</head>

<body>
  <table style="background-color:lightgrey;">
    <tr>
      <td><b>Student's Resume Profile:-</b></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td>Student Name:</td>
      <td>Enrollment No.:</td>
    </tr>
    <tr>
      <td colspan="4"><b>Career Objective:-</b></td>
    </tr>
    <tr>
      <td colspan="4"><input type="text" class="careerobj" required></td>
    </tr>
    <tr>
      <td colspan="4"><b>Certifications/Proffesional Qualifications:-</b></td>
    </tr>
    <tr>
      <td colspan="4"><input type="text" class="careerobj" required></td>
    </tr>
    <tr>
      <td><b>Work Experience:</b></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td>Name of organization:</td>
      <td><input type="text" class="nameorg" required></td>
      <td>Designation:</td>
      <td><input type="text" class="designation" required></td>
    </tr>
    <tr>
      <td>Duration:</td>
      <td><input type="text" class="duration" required></td>
    </tr>
    <tr>
      <td><b>Summer Internship:</b></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td>Name of organization:</td>
      <td><input type="text" class="organization" required></td>
      <td>Project Title:</td>
      <td><input type="text" class="project" required></td>
    </tr>
    <tr>
      <td>Duration:</td>
      <td><input type="text" class="dur" required></td>
    </tr>
    <tr>
      <td colspan="4"><b>Co-Curricular activities:-</b></td>
    </tr>
    <tr>
      <td colspan="4"><input type="text" class="careerobj" required></td>
    </tr>
    <tr>
      <td colspan="4"><b>Hobbies and Interest:-</b></td>
    </tr>
    <tr>
      <td colspan="4"><input type="text" class="careerobj" required></td>
    </tr>
    <tr>
     <td colspan="4"><button type="Submit" style="background-color: #4e73df; padding: 8px 20px; margin-bottom: 1rem;"><a href="resume.php" style="text-decoration: none; color:white;" class="Save">Save</a></button><button type="Submit" style="background-color: #4e73df; padding: 8px 20px; margin-left: 1rem;"><a href="resume.php" style="text-decoration: none; color:white;" class="Resume">Resume</a></button><button type="Submit" style="background-color: #4e73df; padding: 8px 20px; margin-left: 1rem;"><a href="dashboard.php" style="text-decoration: none; color:white;" class="Exit">Exit</a></button></td>
    </tr>
</body>
</html>