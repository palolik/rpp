<!doctype html>
<html style="
    height: -webkit-fill-available;">

<head>
    <script src="../assets/js/color-modes.js"></script>
    <script src="livesearch/js/jquery-2.1.3.min.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <link rel="stylesheet" type="text/css" href="../styl30.css">

    <title>Sidebars · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sidebars/">



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

 
    <!-- Custom styles for this template -->
    <link href="sidebars.css" rel="stylesheet">
</head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Live Search</title>

    <!--leave these if you have already used jquery and bootstrap files in your website-->
    <script src="livesearch/js/jquery-2.1.3.min.js"></script>
    <script src="livesearch/js/bootstrap.min.js"></script>
    <link href="livesearch/css/bootstrap.css" rel="stylesheet" />

    <!--Include these lines for live search-->
    <script src="livesearch/js/ls.js"></script>
    <link href="livesearch/css/ls1.css" rel="stylesheet" />
    <!--End-->

</head>

<body>
    <div class="brk">
        <?php include("sidebar.php") ?>
        <div>

            <?php include("header.php") ?>
            <div class="container">
                <div class="form-group">
                    <div class="inp">
                       <div><a class="asdt" href="addemployee.php" >add employee</a><a class="asdt">import Excel</a><a class="asdt">Export Csv</a><a class="asdt">Export Excel</a></div> <div class="asd">Search</div>
                        <input type="text" id="ls_search_text" placeholder="Type any keyword to search"
                            class="form-control" />
                    </div>
                </div>
                <br />
                <div id="ls_result"></div>
            </div>
        </div>
    </div>
</body>

</html>