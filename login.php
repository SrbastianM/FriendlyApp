<?php include("includes/db.php");
include("includes/header.php");
include("includes/validarLogin.php");
?>
<style>
    body {
        font-family: 'Lato', sans-serif;
        background-image: url("/img/background.jpg");
    }



    .main-head {
        height: 120px;
        background: rgb(219, 202, 202);

    }

    .sidenav {
        height: 100%;
        background-color: rgb(73, 47, 67);
        overflow-x: hidden;
        padding-top: 20px;
        border-radius: 0% 120px 0 0;
    }


    .main {
        padding: 0px 10px;
    }

    @media screen and (max-height: 450px) {
        .sidenav {
            padding-top: 15px;
        }
    }

    @media screen and (max-width: 450px) {
        .login-form {
            margin-top: 10%;
        }

        .register-form {
            margin-top: 10%;
        }
    }

    @media screen and (min-width: 768px) {
        .main {
            margin-left: 40%;
        }

        .sidenav {
            width: 40%;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0px;
        }

        .login-form {
            margin-top: 110%;
        }

        .register-form {
            margin-top: 20%;
        }
    }

    /*Title */
    .login-main-text {
        margin-top: 35%;
        padding: 70px;
        color: rgb(214, 214, 214);
    }

    .login-main-text h2 {
        font-weight: 300;
    }

    /*login boton*/
    .btn-black {
        background-color: #000 !important;
        color: #fff;
    }
</style>


<div class="sidenav">
    <div class="login-main-text">
        <h2>Friendly App</h2>
        <br>

        <p>An app for Friends</p>

    </div>
</div>
<div class="main">
    <div class="col-md-6 col-sm-12">
        <div class="login-form">
            <div>
                <form action="includes/validarLogin.php" method="POST">
                    <div class="form-group">
                        <label>User Name</label>
                        <input name="email" type="text" class="form-control" placeholder="User Name">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input name="password" type="password" class="form-control" placeholder="Password">
                    </div>
                    <button name="submitLogin" id="login-button" type="submit" class="btn btn-black">Login</button>
                    <a href="UIregister.php"> Register</a>
                </form>
            </div>
        </div>
    </div>

    <?php include("includes/footer.php"); ?>