<!DOCTYPE html>
<html>

<head>

    <title>SIGN IN</title>
    <link rel="stylesheet" type="text/css" href="styl34.css">
</head>

<body class="backim">
    <div class="containerin">
        <form style="display: flex;
    flex-direction: column;
    justify-content: center;
    margin-top:100px;
    align-items: center;" action="./screens/login.php" method="post">

            <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>


            <input class="lals" type="text" name="uname" placeholder="Email"><br>



            <input class="lals" type="password" name="password" placeholder="password"><br>

            <button class="butss" type="submit">Sign In</button>
        </form>

    </div>
</body>


</html>