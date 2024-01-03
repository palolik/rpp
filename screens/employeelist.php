<!doctype html>
<html style=" height: -webkit-fill-available;">

<body>
    <div class="brk">
        <?php include("sidebar.php") ?>
        <div>
            <?php include("header.php") ?>
            <div class="wea">
            <a class="asdt" href="addemployee.php" >add employee</a>
    <button class="asdt"  onclick="exportTableToExcel('ls_table', 'employees')">Export Excel</button>
    <!-- <button class="asdt" onclick="ImportTableToDb()">Import CSV</button> -->
    <button class="asdt" onclick="exportTableToCSV()">Export CSV</button>
<div>
            <div class="container">              
                <div class="form-group">
                    <div class="inp">
                        <input type="text" id="ls_search_text" placeholder="Type any keyword to search"
                            class="form-control" />    
                </div>
                <br />
                <div id="ls_result" style="overflow-x:scroll;border-top: 5px solid #ddd;overflow-y:scroll;height:550px"></div>
            </div>
        </div>
    </div>
</body>
<script src="exportcsv.js"></script>
<script src="exportxl.js"></script>

</html>
