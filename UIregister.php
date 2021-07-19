<?php
include("includes/db.php");
include("includes/header.php");
include("includes/register.php");
?>
<style>
    body {
        background-image: url("assets/Img/background2.jpg");
        margin: 0;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.6;
    }


    .my-form {
        padding-top: 1.5rem;
        padding-bottom: 1.5rem;
    }

    .my-form .row {
        padding-top: .5rem;
        padding-bottom: .8rem;
        margin-left: 0;
        margin-right: 0;
    }

    button {
        align-items: right;
    }
</style>

<body>
    <main class="my-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header text-center"> Register</div>
                        <div class="card-body">
                            <form action="includes/register.php" method='POST'>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label text-md-right"> Full Name :</label>
                                    <div class="col-md-8 ">
                                        <input type="text" class="form-control" name="name" placeholder="Full name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label text-md-right"> Phone Number:</label>
                                    <div class="col-md-8 ">
                                        <input type="number" class="form-control" name="phone" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label text-md-right">Citizenship Card :</label>
                                    <div class="col-md-8 ">
                                        <input type="number" class="form-control" name="citizenshipcard" placeholder="Citizenship Card">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label text-md-right"> E-mail Address :</label>
                                    <div class="col-md-8 ">
                                        <input type="text" class="form-control" name="email" placeholder="E-mail Address">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label text-md-right"> Password :</label>
                                    <div class="col-md-8 ">
                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                    </div>
                                </div>
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-outline-dark btn-lg btn-sm justify-content-right" name="register" value="register User">
                                        Register
                                    </button>
                                    <a href="login.php"> Login </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>


<?php include("includes/footer.php"); ?>