<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="../styl8.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    </style>
</head>

<body>
    <div>
        <div class="sidenav">
            <a href="#about">ADMIN</a>
            <button class="dropdown-btn">- User Management</button>
            <div class="dropdown-container">
                <a href="#">User Level Creation</a>
                <a href="#">Role Assign</a>
                <a href="#">User Creation</a>
            </div>
            <button class="dropdown-btn">- Setup Page</button>
            <div class="dropdown-container">
                <a href="#">Office</a>
                <a href="#">Currency</a>
                <a href="#">Country</a>
                <a href="#">Measurement Unit</a>
                <a href="#">Supplier</a>

            </div>
            <a href="#contact">+ Store</a>


        </div>

        <div>
            <form>
                <div class="title">
                    <div class="box1">
                        <div class="bol">
                            <p>Create User</p>
                        </div>
                        <div class="box11">
                            <div class="box111">
                                <div class="f1">
                                    <label for="fname">Employee Id:</label>
                                    <input type="text" id="fname" name="fname">
                                </div>
                                <div class="f1">
                                    <label for="fname">Employee Name:</label>
                                    <input type="text" id="fname" name="fname">
                                </div>
                                <div class="f1">
                                    <label for="fname">Designation:</label>
                                    <select name="cars" id="cars">
                                        <option value="volvo">Volvo</option>
                                        <option value="saab">Saab</option>
                                        <option value="mercedes">Mercedes</option>
                                        <option value="audi">Audi</option>
                                    </select>
                                </div>
                                <div class="f1">
                                    <label for="fname">Role:</label>
                                    <select name="cars" id="cars">
                                        <option value="volvo">Volvo</option>
                                        <option value="saab">Saab</option>
                                        <option value="mercedes">Mercedes</option>
                                        <option value="audi">Audi</option>
                                    </select>
                                </div>


                            </div>
                            <div class="box112">

                                <div class="f1">
                                    <label for="fname">Office :</label>
                                    <select name="cars" id="cars">
                                        <option value="volvo">Volvo</option>
                                        <option value="saab">Saab</option>
                                        <option value="mercedes">Mercedes</option>
                                        <option value="audi">Audi</option>
                                    </select>
                                </div>
                                <div class="f1">
                                    <label for="fname">Email Address :</label>
                                    <input type="text" id="fname" name="fname">
                                </div>
                                <div class="f1">
                                    <label for="fname">First name:</label>
                                    <input type="text" id="fname" name="fname">
                                </div>
                                <div class="f1">
                                    <label for="fname">Mobile Number :</label>
                                    <input type="text" id="fname" name="fname">
                                </div>

                            </div>
                        </div>
                        <div><button>Sign up</button></div>

                    </div>
                </div>
            </form>


        </div>
    </div>
</body>
<script src="script.js"></script>

</html>