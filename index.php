<!DOCTYPE html>
<html>

<head>
<link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sidebars/">



<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">


    <title>SIGN IN</title>
    <link rel="stylesheet" type="text/css" href="styl39.css">
</head>

<body class="backim">
    <div class="containerin">
        <form style="display: flex;
    flex-direction: column;
    justify-content: center;
    margin-top:100px;
    align-items: center;" action="./screens/login.php" method="post">

          
          
                                           
          <div style="font-size:45px;color:white;" >Log in</div>

            <div >
                                                <label  style="font-size:25px;color:white;" class="form-label">Role:</label>
                                                <select name="role"class="form-select form-select mb-3" style="color:white;font-size:25px;width:500px;height:70px;background-color:rgba(22, 19, 19, 0.3);">
                                                
                                                <option value="one">Admin</option>
                                                <option value="two">Employee</option>
                                               
                                                </select>
                                            </div>  
           
            <div >
                                                <label style="font-size:25px;color:white;" class="form-label">User Email:</label>
                                                <input style="color:white;font-size:25px;width:500px;height:70px;background-color:rgba(22, 19, 19, 0.3);" name="uname" class="form-control" type="text">
                                            </div>    
                                            <div >
                                                <label  style="font-size:25px;color:white;" class="form-label">Password</label>
                                                <input style="color:white;font-size:25px;width:500px;height:70px;background-color:rgba(22, 19, 19, 0.3);" name="password" class="form-control" type="text" >
                                            </div>   
                                            
                                            <div><?php if (isset($_GET['error'])) { ?>
            <div class='ere'><p style="padding-left:10px;font-size:25px;color:red;"><?php echo $_GET['error']; ?></p></div>
            <?php } ?></div><br>  


            <button class="butss" type="submit">Sign In</button>
        </form>

    </div>
</body>


</html>