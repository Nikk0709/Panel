<!DOCTYPE html>
<html>

<head>
    <title> Online Fees Payment </title>
    <link rel="stylesheet" href="css/payfeeonline.css">
</head>

<body>
    <div Class="outerbox">
        <div>
            <h2>Online Fees Payment</h2>
        </div>
        <table>
            <tr style="background-color:lightblue;">
                <div>
                    <td> Date:<input type="text"></td>
                    <td width="182vw"></td>
                    <td width="182vw"></td>
                    <td>Receipt No.:<input type="text"></td>
                    <td><span style="color: red;"> Due Upto:<input type="text"></span></td>



                </div>
            </tr>
        </table>
        <table>
            <div class="feesonline">
                <tr>
                    <td>Name: <input type="text"></td>
                    <td>Father's Name: <input type="text"></td>
                    <td> Class-Sec: <input type="text"></td>
                    <td> Admission Date: <input type="text"></td>
                    <td style="color: red ;background-color:lightblue;"> Regular </td>
                </tr>
            </div>
        </table>
        <table>
            <div class="feesonline">
                <tr>
                    <td>Serial No.: <input class="online" type="number"></td>
                    <td> Scholar No.: <input class="online" type="number"></td>
                    <td> Enrollment No.: <input class="online" type="number"></td>
                </tr>
            </div>
        </table>
        <table>
            <tr class="box">
                <td>Sr No.</td>
                <td>Head Name</td>
                <td>Due Amount</td>
                <td>Rec.Amount</td>
                <td>Class</td>
                <td>Session</td>
                <td>Remark/Term</td>
            </tr>
            <tr>
                <td></td>
                <td>DEVELOPMENT FEE </td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>

            </tr>
            <tr>
                <td></td>
                <td>TUTION FEE </td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
            </tr>

        </table>
        <table>
            <tr style="background-color:#ffdbb0;">

                <td>Received Amount Details:-Remarks:- <input type="number"></td>
                <td class="remarks"></td>
                <td>Totals:- Particulars</td>
                <td>Due Amount</td>
                <td width="130rem;">Received Amount</td>


            </tr>
            <tr style="background-color:#ffdbb0;">
                <td>By Bank:-<input type="number"></td>
                <td class="remarks"></td>
                <td>Late Fees Rate: <input type="number"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
            </tr>
        </table>
        <table>
            <tr>

                <table>
                    <tr style="background-color:aliceblue;">
                        <td>

                            <div class="btn" style="float:left;">
                                <input type="button" value="Proceed To Payment">
                                <input type="button" value="Exit" onclick="window.location.href='dashboard.php'">

                            </div>

                    <tr style="background-color:aliceblue;">
                        <td><br>
                            <div style="color:red;">
                                Note :-<br>
                                1. If you are paying through Debit/Credit Card, the transaction will be
                                reflected in
                                your ERP Login after 1 working day.<br>
                                2. If you are paying through Net Banking, the transaction will be reflected in
                                your
                                ERP Login after 2 working days.
                            </div>
                        </td>
                    </tr>
                </table>

                </td>
            </tr>
        </table>
    </div>
</body>

</html>