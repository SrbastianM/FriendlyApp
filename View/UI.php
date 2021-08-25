<?php
include("../includes/header.php");
include("../includes/db.php");
session_start();
$mensaje = "";
if (isset($_POST["description"])) {
    $description = $_POST["description"];
    $id = $_SESSION["id_usuario"];
    $sql = "UPDATE `tbl_users` SET `description`='$description' WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        if (mysqli_affected_rows($conn) > 0) {
            $mensaje = '<div class="alert alert-success" role="alert">
            Se ha editado corretamente
            </div>';
            $_SESSION["description"] = $_POST["description"];
        } else {
            $mensaje = '<div class="alert alert-danger" role="alert">
            No se ha podido editar
            </div>';
        }
    } else {
        $mensaje = '<div class="alert alert-danger" role="alert">
        Error en la conexión 
        </div>';
    }
}

if (isset($_POST["posteo"])) {
    $posteo = $_POST["posteo"];
    $id = $_SESSION["id_usuario"];
    $fecha = date("Y-m-d H:i:s");
    $sql = "INSERT INTO `tbl_post`( `description`, `fecha`, `id_usuario`) VALUES 
    ('$posteo','$fecha','$id')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        if (mysqli_affected_rows($conn) > 0) {
            $mensaje = '<div class="alert alert-success" role="alert">
            Posteo Realizado
            </div>';
        } else {
            $mensaje = '<div class="alert alert-danger" role="alert">
            No se puedo realizar el posteo
            </div>';
        }
    } else {
        $mensaje = '<div class="alert alert-danger" role="alert">
        Error en la conexión 
        </div>';
    }
}
?>

<body>


    <nav class="navbar  navbar-dark bg-dark">
        <a href="#" class="navbar-brand">Friendly App</a>
        <form class="form-inline">
            <div class="input-group">
                <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-primary" type="button" id="button-addon2">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </nav>

    <!-- DESCRIPTION PANEL -->
    <div class="container-fluid gedf-wrapper">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <?php echo $mensaje; ?>
                    <div class="card-body">
                        <div class="h5"><?php
                                        echo '@' . $_SESSION['nick'];  ?></div>
                        <div class="h7 text-muted"><?php echo $_SESSION['nombre']; ?></div>
                        <div class="h7"> <?php echo $_SESSION['description']; ?>
                        </div>
                    </div>
                    <!-- FOLLOWERS COUNT -->
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="h6 text-muted">Followers</div>
                            <?php
                            $user = $_SESSION['id_usuario'];
                            $sql = "SELECT * FROM followers WHERE id_usuario ='$user' ";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                echo "<div class='h5'>" . mysqli_num_rows($result) . "</div>";
                            } else {
                                echo '0';
                            }

                            ?>
                        </li>
                        <!-- FOLLOWING COUNT -->
                        <li class="list-group-item">
                            <div class="h6 text-muted">Following</div>
                            <?php
                            $user = $_SESSION['id_usuario'];
                            $sql = "SELECT * FROM followers WHERE id_follower ='$user' ";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                echo "<div class='h5'>" . mysqli_num_rows($result) . "</div>";
                            } else {
                                echo '0';
                            }

                            ?>
                        </li>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Edit
                        </button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form action="#" method="POST">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Description Panel</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Put your description here ! :)</span>
                                                </div>
                                                <textarea class="form-control" aria-label="With textarea" name="description"></textarea>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 gedf-main">

                <div class="card gedf-card">
                    <!-- Text area del posteo Y area de posteo -->
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="posts-tab" data-toggle="tab" href="#posts" role="tab" aria-controls="posts" aria-selected="true">Write Something</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="images-tab" data-toggle="tab" role="tab" aria-controls="images" aria-selected="false" href="#images">Images</a>
                            </li>
                        </ul>
                    </div>
                    <form action="" method="POST">

                        <!-- TEXT AREA -->
                        <div class="card-body">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
                                    <div class="form-group">
                                        <label class="sr-only" for="message">post</label>
                                        <textarea name="posteo" class="form-control" id="message" rows="3" placeholder="What are you thinking?"></textarea>
                                    </div>

                                </div>
                                <!-- SECCIÓN DE SUBIDA DE IMAGEN-->
                                <div class="tab-pane fade" id="images" role="tabpanel" aria-labelledby="images-tab">
                                    <div class="form-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Upload image</label>
                                        </div>
                                    </div>
                                    <div class="py-4"></div>
                                </div>
                            </div>
                            <!-- SHARE BUTTON -->
                            <div class="btn-toolbar justify-content-between">
                                <div class="btn-group">
                                    <button type="submit" class="btn btn-primary">share</button>
                                </div>
                                <div class="btn-group">
                                    <button id="btnGroupDrop1" type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-globe"></i>
                                    </button>
                                    <!-- PRIVACY BUTTON -->
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">
                                        <a class="dropdown-item" href="#"><i class="fa fa-globe"></i> Public</a>
                                        <a class="dropdown-item" href="#"><i class="fa fa-users"></i> Friends</a>
                                        <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Just me</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <?php
                $sql = "SELECT p.`id`, p.`description`, p.`fecha`, p.`id_usuario`, u.`name`  FROM `tbl_post` p INNER JOIN tbl_users u ON p.id_usuario = u.id";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <div class="card gedf-card">
                            <div class="card-header">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="mr-2">
                                            <img class="rounded-circle" width="45" src="https://picsum.photos/50/50" alt="">
                                        </div>
                                        <div class="ml-2">
                                            <div class="h5 m-0"><?php echo $row['name']; ?></div>
                                            <div class="h7 text-muted">Basicly Me</div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="dropdown">
                                            <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-ellipsis-h"></i>
                                            </button>
                                            <!-- CONFIGURATION PANEL -->
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                                                <div class="h6 dropdown-header">Configuration</div>
                                                <a class="dropdown-item" href="#">Save</a>
                                                <a class="dropdown-item" href="#">Hide</a>
                                                <a class="dropdown-item" href="#">Report</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- POSTS -->
                            <div class="card-body">
                                <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i><?php echo $row['fecha']; ?></div>
                                <p class="card-text">
                                    <?php echo $row['description']; ?>
                                </p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="card-link"><i class="fa fa-gittip"></i> Like</a>
                                <a href="#" class="card-link"><i class="fa fa-comment"></i> Comment</a>
                                <a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Share</a>
                            </div>
                        </div>
                <?php
                    }
                } else {
                    $mensaje = '<div class="alert alert-danger" role="alert">
                    Error en la conexión 
                    </div>';
                } ?>
                <!--- Publicaciones-->
                <!-- Post /////-->

            </div>
            <div class="col-md-3">
                <div class="card gedf-card">
                    <div class="card-body">
                        <h5 class="card-title">New User</h5>
                        <h6 class="card-subtitle mb-2 text-muted">New User @</h6>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus sunt quis praesentium libero architecto nobis, perferendis consequuntur ex veniam eum et, fuga repellat facere quasi non impedit cumque, exercitationem provident.
                            card's content.</p>
                        <a name href="about.php" class="card-link">Visit</a>
                        <a href="#" class="card-link">Follow!</a>
                    </div>
                </div>
                <div class="card gedf-card">
                    <div class="card-body">
                        <h5 class="card-title"> New User</h5>
                        <h6 class="card-subtitle mb-2 text-muted">New User @</h6>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla fuga explicabo laborum velit excepturi, corrupti doloremque unde, consectetur expedita qui est eligendi iusto nobis nam iste minus aut, voluptatibus quibusdam!
                            card's content.</p>
                        <a href="about.php" name="view" class="card-link">Visit</a>
                        <a href="#" name="follow" class="card-link">Follow</a>
                    </div>
                </div>

            </div> <!-- Bueno, aquí va el formulario, NO LO PIERDAS DE VISTA -->

        </div>
    </div>

</body>


<?php
include("../includes/footer.php");
?>