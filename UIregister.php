<?php 
include("includes/db.php");
include("include/header.php");
?>

<body>
    <main class="my-form">
        <div class="container">
                <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                    <div class="card-header text-center"> Register</div>
                                    <div class="card-body">
                                        <form action="register.php" method ='Post'>
                                            <div class="form-group row">
                                                <label for="" class="col-md-4 col-form-label text-md-right"> Full Name </label>
                                                <div class="col-md-8 ">
                                                    <input type="text" class="form-control" name="name" placeholder="Full name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class="col-md-4 col-form-label text-md-right"> Phone Number </label>
                                                <div class="col-md-8 ">
                                                    <input type="text" class="form-control" name="phoneNumber" placeholder="Phone Number">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class="col-md-4 col-form-label text-md-right">Citizenship Card</label>
                                                <div class="col-md-8 ">
                                                    <input type="text" class="form-control" name="citizenshipCard" placeholder="Citizenship Card">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class="col-md-4 col-form-label text-md-right"> E-mail Address </label>
                                                <div class="col-md-8 ">
                                                    <input type="text" class="form-control" name="e-mailAdress" placeholder="E-mail Address">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class="col-md-4 col-form-label text-md-right"> Password </label>
                                                <div class="col-md-8 ">
                                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                                </div>
                                            </div>
                                            <div class="d-grid gap-2">
                                                <button type="submit" class="btn btn-outline-dark btn-lg btn-sm justify-content-right" >
                                                Register
                                                </button>
                                                <button type="submit" class="btn btn-outline-dark btn-lg btn-sm justify-content-left" >
                                                    Login
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                            </div>
                        </div>
                </div>
        </div>
    </main>
</body>


<?php include("includes/footer.php");?>