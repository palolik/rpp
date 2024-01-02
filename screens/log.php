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
    <link rel="stylesheet" type="text/css" href="../styl39.css">

    <title>Sidebars · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sidebars/">



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="sidebars.css" rel="stylesheet">
</head>

<body>



<div class="brk">

<?php include("sidebar.php") ?>
<div>

    <?php include("header.php") ?>


       
             


                <div
                    style="height: auto;align-items: center;flex-direction: column;justify-content: flex-start;padding: 10px;">
                    <table id="dtVerticalScrollExample" class="table table-striped table-bordered table-sm"
                        cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="th-sm">Mainteinence</th>
                                <th class="th-sm">Cost</th>
                                <th class="th-sm">Feedback</th>
                           
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                       include '../config/database.php';
                                       $serial = $_GET['sid'];
                                        $query = "SELECT * FROM log WHERE did=$serial";
                                        $query_run = mysqli_query($conn, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $res)
                                            {                                            
                                                echo "<tr>";
                                                echo "<td>".$res['mainteinence']."</td>";
                                                echo "<td>".$res['cost']."</td>";
                                                echo "<td>".$res['feedback']."</td>";
                                              
                                       
                                             
                                                echo "</tr>";
                                            }
                                                
                                            }else{
                                                echo "<tr>
                                                <td colspan='7'>No Record Found</td>
                                            </tr>" ;
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