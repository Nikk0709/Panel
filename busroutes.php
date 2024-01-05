<!DOCTYPE html>
<html>

<head>
    <title>Bus Routes</title>
    <link rel="stylesheet" href="css/busroutes.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="back" style="font-size:1.5rem; width:2.5rem; border: .5px solid black; border-radius:50%; display: flex; align-item:center; justify-content:center;">
       <a href="index.php" style="text-decoration:none; color:black;"> <i class='bx bx-arrow-back'></i> </a>
    </div>
    <div class="busroutesbox" style="width: 500px;
    margin: 0 auto;
    padding: 40px;
    border: 2px solid f2f2f2;
    background-color: white; background-color: #f2f2f2;">
        <div class="busroutes">
            <h2>Bus Routes</h2>

            <form action="#" method="post">

                <label for="routename">Route Name:-<span style="color:red;">*</span></label>
                <select id="routes" name="routes" required>
                    <option style="color:grey; opacity:.5" value=""> --Select-- </option>
                    <option value="routeno.1">Route No.1</option>
                    <option value="routeno.2">Route No.2</option>
                    <option value="routeno.3 ">Route No.3</option>
                    <option value="routeno.4 ">Route No.4</option>
                    <option value="routeno.5 ">Route No.5</option>
                    <option value="routeno.6 ">Route No.6</option>
                    <option value="routeno.7 ">Route No.7</option>
                    <option value="routeno.8 ">Route No.8</option>
                    <option value="routeno.9 ">Route No.9</option>
                    <option value="routeno.10 ">Route No.10</option>
                </select>
</body>

</html>