<?php include("includes/db.php");
include("includes/header.php");
include("includes/validarLogin.php");
?>



<!-- <div class="sidenav">
        <div class="login-main-text">
            <h2>Friendly App<br> Login Page</h2>
            <p>Login or register from here to access.</p>
        </div>
</div> -->
    <div class="main">
        <div class="col-md-6 col-sm-12">
             <div class="login-form">
                <div> 
                    <form action="validarLogin.php" method="POST">
                        <div class="form-group">
                            <label>User Name</label>
                            <input name ="email" type="text" class="form-control" placeholder="User Name">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input name = "password" type="password" class="form-control" placeholder="Password">
                        </div>
                            <button id = "login-button" type="submit" class="btn btn-black">Login</button>
                            <a href="UIregister.php"> Register</a>
                    </form>
                </div>
            </div>
        </div> 

<?php include("includes/footer.php");?>
