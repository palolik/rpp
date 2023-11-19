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
    <link rel="stylesheet" type="text/css" href="../styl24.css">

    <title>Sidebars · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sidebars/">



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }

    .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
    }

    .bi {
        vertical-align: -.125em;
        fill: currentColor;
    }

    .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
    }

    .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
    }

    .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
    }

    .bd-mode-toggle {
        z-index: 1500;
    }

    .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
    }
    </style>


    <!-- Custom styles for this template -->
    <link href="sidebars.css" rel="stylesheet">
</head>

<body>



    <div class="brk">

        <div class="flex-shrink-0 p-3" style="height:100%;background-color:#0a0026;">
            <a href="/"
                class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-white text-decoration-none border-bottom">
                <span class="fs-5 fw-semibold text-white">ADMIN</span>
            </a>
            <ul class="list-unstyled ps-0">
                <li class="mb-1">
                    <button class="btn btn-toggle d-inline-flex align-items-center text-white border-0 collapsed"
                        data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
                        User Management
                    </button>
                    <div class="collapse show" id="home-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="#"
                                    class="link-body-emphasis d-inline-flex text-white text-decoration-none rounded">User
                                    Level Creation</a></li>
                            <li><a href="#"
                                    class="link-body-emphasis d-inline-flex text-white text-decoration-none rounded">Role
                                    Assign</a></li>
                            <li><a href="#"
                                    class="link-body-emphasis d-inline-flex text-white text-decoration-none rounded">User
                                    Creation</a></li>
                        </ul>
                    </div>
                </li>
                <li class="mb-1">
                    <button
                        class="btn btn-toggle d-inline-flex align-items-center text-white rounded border-0 collapsed"
                        data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                        Setup Page
                    </button>
                    <div class="collapse" id="dashboard-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="#"
                                    class="link-body-emphasis d-inline-flex text-white text-decoration-none rounded">Category</a>
                            </li>
                            <li><a href="#"
                                    class="link-body-emphasis d-inline-flex text-white text-decoration-none rounded">Item</a>
                            </li>
                            <li><a href="#"
                                    class="link-body-emphasis d-inline-flex text-white text-decoration-none rounded">Store</a>
                            </li>
                            <li><a href="#"
                                    class="link-body-emphasis d-inline-flex text-white text-decoration-none rounded">Cinsignee</a>
                            </li>
                            <li><a href="#"
                                    class="link-body-emphasis d-inline-flex text-white text-decoration-none rounded">Office
                                    Wise Store Mapping</a></li>

                        </ul>
                    </div>
                </li>

                <li class="border-top my-3"></li>
                <li class="mb-1">
                    <button
                        class="btn btn-toggle d-inline-flex align-items-center text-white rounded border-0 collapsed"
                        data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                        Account
                    </button>
                    <div class="collapse" id="account-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="#"
                                    class="link-body-emphasis d-inline-flex text-white text-decoration-none rounded">New...</a>
                            </li>
                            <li><a href="#"
                                    class="link-body-emphasis d-inline-flex text-white text-decoration-none rounded">Profile</a>
                            </li>
                            <li><a href="#"
                                    class="link-body-emphasis d-inline-flex text-white text-decoration-none rounded">Settings</a>
                            </li>
                            <li><a href="#"
                                    class="link-body-emphasis d-inline-flex text-white text-decoration-none rounded">Sign
                                    out</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>

        <div>
            <div class="heder">
                <img src="../images/logo.jpg" class="heder">
                <p style="font-size: 32px;color: antiquewhite;margin-left: 29px;">Rural Power Company Limited</p>
            </div>
            <div style="
    height: auto;
    align-items: center;
    flex-direction: column;
    justify-content: flex-start;
">
                <form action="query.php" method="post">
                <div class="box5"> 
               
        <label for="fname">Employee Id:</label>
        <input class="form-control " name="ds" type="text" placeholder="Enter 8-digit employee id here"
            aria-label="default input example">
        <input class="buts" type="submit" value="Search">

    </form>
                                  
                               

</div>

<?php
            include '../config/database.php';

            $conn = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName);



            $id = $_POST['ds'];

            $sql = "SELECT * FROM employees where employeeid=$id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {
                    echo 
                    "
                 
     
                    
            <form>
                    <div class='box1'>
                        <div class='bol'>
                            <p>Existing Employee Details</p>
                        </div>
                        <div class='box11'>
                            <div class='box111'>
                               
                                <div class='f2'>
                                    <label for='fname'>Employee Name:</label>
                                    <input class='form-control' type='text'  value=". $row['employeename'] ."
                                        >

                                </div>
                                <div class='f2'>
                                    <label for='fname'>Designation:</label>
                                    <input class='form-control' type='text' value=". $row['designation'] ."
                                       >
                                </div>
                                <div class='f2'>
                                    <label for='fname'>Employee Code:</label>
                                    <input class='form-control' type='text' value=". $row['employeecode'] ."
                                        aria-label='default input example'>
                                </div>


                            </div>
                            <div class='box112'>

                                <div class='f2'>
                                    <label for='fname'>Office :</label>
                                    <input class='form-control' type='text' value=". $row['officename'] ."
                                        aria-label='default input example'>
                                </div>
                                <div class='f2'>
                                    <label for='fname'>Email Address :</label>
                                    <input class='form-control' type='text' value=". $row['email'] ."
                                        aria-label='default input example'>
                                </div>
                                <div class='f2'>
                                    <label for='fname'>Status</label>
                                    <input class='form-control' type='text' value=". $row['status'] ."
                                        aria-label='default input example'>
                                </div>
                                <div class='f2'>
                                    <label for='fname'>Mobile Number :</label>
                                    <input class='form-control' type='text' value=". $row['contactno'] ."
                                        aria-label='default input example'>
                                </div>

                            </div>
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