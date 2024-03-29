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
    <link rel="stylesheet" type="text/css" href="../styl54.css">

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

            <div style="
    height: auto;
    align-items: center;
    flex-direction: column;
    justify-content: flex-start;
">



            </div>

            <?php
            include '../config/database.php';

            $conn = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName);


            $id = $_GET['id'];
        

            $sql = "SELECT * FROM employees where id=$id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {
                    echo 
                    "
                 
     
                    
        <form action=controller.php?id=".$row['id'] ." method='post'>
        <div class='box1'>
            <div class='bol'>
                <p>Existing Employee Details</p>
            </div>
            <div class='box11'>
            <div class='box111'>
                                   
            <div class='f2'>
                <label for='fname'>Password:</label>
                <input class='form-control' type='text' name='password'  value=' ".$row['password']." '
                >
<input style='display:none;' name='employeeid' value='". $row['employeeid'] ."' >
                  
            </div>             
            <div class='f2'>
                <label for='fname'>Password:</label>
                <input class='form-control' type='text' name='employeename'  value=' ".$row['employeename']." '
                >

            </div>
            <div class='f2'>
                <label for='fname'>Designation:</label>
                
                <select name='designation' class='form-select form-select mb-3' aria-label='Large select example'>
                <option value=". $row['designation'] .">". $row['designation'] ."</option>"
                ;

                $sql = "SELECT * FROM designations";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($ron = $result->fetch_assoc()) {
                        echo  "<option value=" .$ron['designations']. ">" .$ron['designations']. "</option>";
                    }
                   }
               
                  echo " </select>
            </div>
            <div class='f2'>
                <label for='fname'>Employee Code:</label>
                <input class='form-control' type='text' name='employeecode' value=' ". $row['employeecode'] ." '
                >
            </div>


        </div>
                <div class='box112'>

                <div class='f2'>
                    <label for='fname'>Office :</label>
                    <select name='officename' class='form-select form-select mb-3' aria-label='Large select example'>
                    <option value=" .$row['officename']. ">" .$row['officename']. "</option>"
                    ;

                    $sql = "SELECT * FROM offices";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($ron = $result->fetch_assoc()) {
                            echo  "<option value=" .$ron['office']. ">" .$ron['office']. "</option>";
                        }
                       }
                   
                      echo " </select>
                </div>
                <div class='f2'>
                    <label for='fname'>Email Address :</label>
                    <input class='form-control' type='text' name='email' value=' ". $row['email'] ." '
                    >
                </div>
                <div class='f2'>
                    <label for='fname'>Status</label>
                    <input class='form-control' type='text' name='status' value='". $row['status'] ." '
                    >
                </div>
                <div class='f2'>
                    <label for='fname'>Mobile Number :</label>
                    <input class='form-control' type='text' name='contactno' value=' ". $row['contactno'] ." '
                    >
                </div>

             
            </div> 
                       
                       


                 
                            
                        </div>
                     
                        <div style='display: flex;
                        width: -webkit-fill-available;
                        justify-content: center;'>  
                    <input class='nm3' type='submit' name='pass' value='Edit'>
                    </div>
                    </div>
                   
                </form>


            </div>
        </div>
    </div>
    ";
}
}

?>

</body>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

<script src="sidebars.js"></script>

</html>