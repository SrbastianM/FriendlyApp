<?php include("includes/db.php");
include("includes/header.php");
include("includes/validarLogin.php");
include("includes/register.php")
?>



<div class="sidenav">
        <div class="login-main-text">
            <h2>Friendly App<br> Login Page</h2>
            <p>Login or register from here to access.</p>
        </div>
</div>
    <div class="main">
        <div class="col-md-6 col-sm-12">
             <div class="login-form">
                <div> 
                    <form action="includes/UI.php" method="POST">
                        <div class="form-group">
                            <label>User Name</label>
                            <input name ="Usuario" type=" text" class="form-control" placeholder="User Name">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input name = "Contraseña" type="password" class="form-control" placeholder="Password">
                        </div>
                            <button id = "login-button" type="submit" class="btn btn-black">Login</button>
                            <button action ="includes/register.php"id ="sign-button" type="submit" class="btn btn-secondary">Register</button>
                    </form>
                </div>
            </div>
        </div> 

<?php include("includes/footer.php");?>
