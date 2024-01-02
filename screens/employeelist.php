<!doctype html>
<html style=" height: -webkit-fill-available;">
<head>
    <script src="../assets/js/color-modes.js"></script>
    <script src="livesearch/js/jquery-2.1.3.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <link rel="stylesheet" type="text/css" href="../styl39.css">
    <title>Employee List</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sidebars/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="sidebars.css" rel="stylesheet">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="livesearch/js/jquery-2.1.3.min.js"></script>
    <script src="livesearch/js/bootstrap.min.js"></script>
    <link href="livesearch/css/bootstrap.css" rel="stylesheet" />
    <script src="livesearch/js/ls.js"></script>
    <link href="livesearch/css/ls1.css" rel="stylesheet" />
</head>
<body>
    <div class="brk">
        <?php include("sidebar.php") ?>
        <div>
            <?php include("header.php") ?>
            <div class="wea">
            <a class="asdt" href="addemployee.php" >add employee</a>
    <button class="asdt"  onclick="exportTableToExcel('ls_table', 'employees')">Export Excel</button>
    <button class="asdt" onclick="ImportTableToDb()">Import CSV</button>
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
