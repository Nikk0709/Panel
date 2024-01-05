<!DOCTYPE html>
<html>

<head>
    <style>
        table,
        td,
        th {
            border: 1px solid;
        }

        table {
            margin-left: 40px;
            margin-top: 2%;
            align-self: center;
            text-align: center;
            width: 100%
        }
    </style>
    <title>Fees Receipt</title>

</head>

<body>
    <div class="feereceiptbox" style="
    width: 1700px;
    margin: 0 auto;
    padding: 40px;
    border: 2px solid f2f2f2;
    background-color: white; background-color: #f2f2f2;">
        <div class="feereceipt">
            <h1 style="margin-left:38rem;">Fees Receipts </h1>
            <form action="#" method="post">

                <!-- <p style="padding-left:40px">Fee Receipt List -</p> -->
                <h3 style="margin-left:39.5rem;"> Fee Receipt List </h3>

                <div style="display:flex; flex-direction:row;">
                    <label for="selectsession" style="padding-left:40px">Select Session:- <span
                            style="color:red;">*</span></label>
                    <select id="sesssion" name="Sessions" required>
                        <option style="color:grey; opacity:.5" value=""> --Select-- </option>
                        <option value="2023-2024">2023-2024</option>
                        <option value="2024-2025">2024-2025</option>
                        <option value="2025-2026 ">2025-2026</option>
                        <option value=" 2026-2027">2026-2027</option>
                        <option value=" 2027-2028">2027-2028</option>
                    </select>
                    <button style="width:4rem; font-weight:500; margin-left:59rem;"> <a href="dashboard.php"
                            style="color: black; text-decoration:none;">Exit</a></button>
                </div>
                <table style="width:75%">
                    <tr>
                        <th> Receipt </th>
                        <th> Sr </th>
                        <th> Voucher Date </th>
                        <th> Voucher No. </th>
                        <th> Total Rec.Amount </th>
                        <th> Is cancelled </th>
                    </tr>
                </table>

        </div>
    </div>

</body>

</html>