<!doctype html>
<html style="height: -webkit-fill-available;">
<head>
    <script src="../assets/js/color-modes.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../styl51.css">
    <title>PC distributions</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="sidebars.css" rel="stylesheet">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="livesearch/js1/jquery-2.1.3.min.js"></script>
    <script src="livesearch/js1/ss.js"></script>
    <link href="livesearch/css/ls2.css" rel="stylesheet" />
</head>
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
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="sidebars.js"></script>
</html>