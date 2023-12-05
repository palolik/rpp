<!doctype html>
<html style="
    height: -webkit-fill-available;">

<head>
    <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <link rel="stylesheet" type="text/css" href="../styl29.css">

    <title>Sidebars · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sidebars/">



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

    </style>


    <!-- Custom styles for this template -->
    <link href="sidebars.css" rel="stylesheet">
</head>

<body>



    <div class="brk">

        <?php include("sidebar.php") ?>
        <div>

            <?php include("header.php") ?>
            <form action="" method="GET">
                <div class="box5">

                    <input type="text" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>"
                        class="form-control" placeholder="Search data">
                    <button type="submit" class="buts">Search</button>

                </div>
                <div class="box8">
                    <a class="buts3" href="home.php">Add Employee</a>
                    <button type="submit" class="buts3">Export Excel</button>
                    <button type="submit" class="buts3">Export CSV</button>
                    <button type="submit" class="buts3">Import Excel</button>
                </div>


                <div
                    style="height: auto;align-items: center;flex-direction: column;justify-content: flex-start;padding: 10px;">
                    <table id="dtVerticalScrollExample" class="table table-striped table-bordered table-sm"
                        cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="th-sm">id</th>
                                <th class="th-sm">employeecode</th>
                                <th class="th-sm">employeename</th>
                                <th class="th-sm">Designation</th>
                                <th class="th-sm">contact no</th>
                                <th class="th-sm">email</th>
                                <th class="th-sm">status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                      include '../config/database.php';
                                        if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM employees WHERE CONCAT(employeecode,status,employeename,contactno,email,designation) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($conn, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $res)
                                            {                                            
                                                echo "<tr>";
                                                echo "<td>".$res['id']."</td>";
                                                echo "<td>".$res['employeecode']."</td>";
                                                echo "<td><form action='query.php' method='post'><input class='trm' type='submit' value=' ".$res['employeename']." ' >
                                                <input type='hidden' name='ds' value=".$res['employeeid'].">                
                                            </form></td>";
                                                echo "<td>".$res['designation']."</td>";
                                                echo "<td>".$res['contactno']."</td>";
                                                echo "<td>".$res['email']."</td>";
                                                echo "<td>".$res['status']."</td>";
                                                echo "</tr>";
                                            }
                                                
                                            }else{
                                                echo "<tr>
                                                <td colspan='7'>No Record Found</td>
                                            </tr>" ;
                                            }
                                        }
                                        else if(empty($_GET['search']))
                                        {
                                            $result = mysqli_query($mysqli, "SELECT * FROM employees");
                                            while ($res = mysqli_fetch_assoc($result))
                                            {   
                                                echo "<tr>";
                                                echo "<td>".$res['id']."</td>";
                                                echo "<td>".$res['employeecode']."</td>";
                                                echo "<td><form action='query.php' method='post'><input class='trm' type='submit' value=' ".$res['employeename']." ' >
                                                <input type='hidden' name='ds' value=".$res['employeeid'].">                
                                            </form></td>";
                                                echo "<td>".$res['designation']."</td>";
                                                echo "<td>".$res['contactno']."</td>";
                                                echo "<td>".$res['email']."</td>";
                                                echo "<td>".$res['status']."</td>";
                                                echo "</tr>";
                                               } 

                                        } else {
                                           
                                        }
                                    
                                ?>

                        </tbody>

                    </table>



                </div>
        </div>
    </div>


</body>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

<script src="sidebars.js"></script>
<script>
$(document).ready(function() {
    $('#dtVerticalScrollExample').DataTable({
        "scrollY": "200px",
        "scrollCollapse": true,
    });
    $('.dataTables_length').addClass('bs-select');
});
</script>

</html>