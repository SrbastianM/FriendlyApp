<?php
include("../includes/header.php");
include("../includes/db.php");

?>

<html>


</html>
<div class="card mb-3" style="max-width: 800px; ">
    <div class="row no-gutters">
        <div class="col-md-4">
            <img src="https://i.pinimg.com/280x280_RS/58/3b/b4/583bb434a1d4832f01461cc5f87e060e.jpg" alt="auto">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title"><?php

                                        echo $_SESSION['nombre'];

                                        ?></h5>
                <p class="card-text"><?php

                                        echo '@' . $_SESSION['nick'];


                                        ?></p>
                <p class="card-text"><?php

                                        echo $_SESSION['description'];

                                        ?>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>
</div>
<div class="card-mb-3">
    <div class="card bg-dark text-white">
        <img src="" class="card-img" alt="...">
        <div class="card-img-overlay">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text">Last updated 3 mins ago</p>
        </div>
    </div>
</div>