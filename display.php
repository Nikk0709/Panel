<?php
                        $con= mysqli_connect('localhost', 'root','');
                        mysqli_select_db($con,'portal');
?>
<html>
    <head>
    <style>
        table{
            border:"1px"; 
        }
    </style>
    </head>
<body>
    <table cellpadding="10px" cellspacing="0" >
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Father Name</th>
            <th>Mother Name</th>
            <th>Dob</th>
            <th>Email</th>
            <th>Number</th>
            <th>Gender</th>
            <th>Aadhar Number</th>
            <th>State</th>
            <th>City</th>
            <th>Address</th>
            <th>Actions</th>
        </tr>
        <?php
        $q="SELECT Scholarnumber, firstname, lastname, fathername, mothername, dob, email, pnum, gender, aadhar, state, city, address FROM registerat";
        $data=mysqli_query($con, $q);
        $result=mysqli_num_rows($data);
        if ($result) {
           
            while ($row=mysqli_fetch_array($data)) {
            ?>
            <tr>
                <td><?php echo $row['firstname'];?></td> 
                <td><?php echo $row['lastname'];?></td> 
                <td><?php echo $row['fathername'];?></td> 
                <td><?php echo $row['mothername'];?></td> 
                <td><?php echo $row['dob'];?></td> 
                <td><?php echo $row['email'];?></td> 
                <td><?php echo $row['pnum'];?></td> 
                <td><?php echo $row['gender'];?></td> 
                <td><?php echo $row['aadhar'];?></td> 
                <td><?php echo $row['state'];?></td> 
                <td><?php echo $row['city'];?></td> 
                <td><?php echo $row['address'];?></td> 
                <td><a href="update.php?id=<?php echo $row['Scholarnumber'];?>">Edit</a></td> 
            </tr>
            <?php

           }
        }
            else
            {
                ?>
                <tr>
                    <td>No Record Found</td>
            </tr>
              <?php
            }
        ?>

    </table>
    
</body>
         
</html>