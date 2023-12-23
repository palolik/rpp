<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <table id="tblData" width="400px">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Country</th>
                    </tr>
                    <tr>
                        <td>Sai Kumar</td>
                        <td>saiyah0007@gmail.com</td>
                        <td>India</td>
                    </tr>
                    <tr>
                        <td>Gautham Reddy</td>
                        <td>GauthamReddySurakanti@gmail.com</td>
                        <td>India</td>
                    </tr>
                    <tr>
                        <td>Vishu Vidyasagar</td>
                        <td>vishuvidyasagar@gmail.com</td>
                        <td>India</td>
                    </tr>
                </table>
                <button onclick="exportTableToExcel('tblData', 'members')">Export HTML Table To Excel File</button>
</body>
<script src="exportxl.js"></script>
