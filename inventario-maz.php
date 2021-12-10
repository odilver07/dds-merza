<!-- Validamos que el usuario haya iniciado sesion -->
<?php
    session_start();
    $username = $_SESSION['username'];
    if(!$username){
        header("Location: login.php");
        die("query fail");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin 2 - Tables</title>
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="css/estilos.css" rel="stylesheet">
    <link href="librerias/datatables/dataTables.bootstrap4.css" rel="stylesheet">

</head>

<body id="page-top">
    <!-- Barra latearal -->
    <div id="wrapper">
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: black;">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15 text-white">
                    Grupo MERZA
                </div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Ganancias Villa Union</span></a>
            </li>
            <hr class="sidebar-divider my-0">
            <li class="nav-item">
                <a class="nav-link" href="ganancias-maz.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Ganancias Mazatlan</span></a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link" href="tables.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Inventario Villa Union</span></a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item active">
                <a class="nav-link" href="inventario-maz.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Inventario Mazatlan</span></a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">
            <li class="nav-item">
                <a class="nav-link" href="mas-vendido.php">
                    <i class="fa fa-bolt" aria-hidden="true"></i>
                    <span>Mas vendidos Villa Union</span></a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">
            <div class="text-center d-none d-md-inline">
                <img src="img/merza.png" alt="" style="width: 200px">
            </div>
        </ul>

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow" style="background-color: black;">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Navbar merza -->
                    <ul class="navbar-nav ml-auto">

                        <!-- La seccion del boton salir-->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 text-info">Gerente de ventas</span>
                                <img class="img-profile rounded-circle"
                                    src="img/merza-conejo-ADMIN.png">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Salir
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <div class="container-fluid">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h4 class="m-0 font-weight-bold text-primary">Inventario de Merza Mazatlan</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Categoria</th>
                                            <th>Marca</th>
                                            <th>Cantidad</th>
                                            <th>última fecha de entrega</th>
                                            <th>Precio</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Categoria</th>
                                            <th>Marca</th>
                                            <th>Cantidad</th>
                                            <th>última fecha de entrega</th>
                                            <th>Precio</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <!-- obtenemos los productos de la base de datos -->
                                        <?php
                                            include("db-mazatlan.php");
                                            $query = "select p.nombre_producto, c.tipo_categoria, p.marca, p.cantidad, p.fecha_entrega, p.precio from producto as p inner join categoria_producto as c on p.idcategoria_producto = c.id;";
                                            $p = mysqli_query($conn,$query);
                                            while($row = mysqli_fetch_array($p)){ ?>
                                            <tr>
                                            <td> <?php echo $row['nombre_producto'] ?></td>
                                            <td> <?php echo $row['tipo_categoria'] ?></td>
                                            <td> <?php echo $row['marca'] ?></td>
                                            <td> <?php echo $row['cantidad'] ?></td>
                                            <td> <?php echo $row['fecha_entrega'] ?></td>
                                            <td> <?php echo $row['precio'] ?></td>
                                            </tr>         
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="sticky-footer text-white" style="background-color:black;">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Merza &copy;</span>
                    </div>
                </div>
            </footer>
        </div>

    </div>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Modal para salir del sistema -->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Desea Salir?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body mx-auto"><img src="./img/merza-logout.png" alt="" style="width: 400px;"></div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-danger" href="cerrar-sesion.php">Salir</a>
                </div>
            </div>
        </div>
    </div>

    <!-- importacion de los script del dds -->
    <script src="librerias/jquery/jquery.js"></script>
    <script src="librerias/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="librerias/datatables/jquery.dataTables.js"></script>
    <script src="librerias/datatables/dataTables.bootstrap4.js"></script>
    <script src="js/graficas/agotarse.js"></script>
</body>

</html>