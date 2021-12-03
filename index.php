<!-- Validamos que el usuario haya iniciado sesion -->
<?php
    include("db.php");
    session_start();
    $username = $_SESSION['username'];
    if(!$username){
        header("Location: login.php");
        die("query fail");
    }else{
        // obtenemos las ganancias de cada mes
        $query = "select sum(cantidad * precio - (cantidad * precio *descuento)) as total_enero from ventas where fecha between '2021-01-01' and '2021-01-31'";
        $tenero = mysqli_query($conn,$query);
        while($row = mysqli_fetch_array($tenero)){
           $enero = $row['total_enero']; 
        }
        $query = "select sum(cantidad * precio - (cantidad * precio *descuento)) as total_enero from ventas where fecha between '2021-02-01' and '2021-02-31'";
        $tenero = mysqli_query($conn,$query);
        while($row = mysqli_fetch_array($tenero)){
           $febrero = $row['total_enero']; 
        }
        $query = "select sum(cantidad * precio - (cantidad * precio *descuento)) as total_enero from ventas where fecha between '2021-03-01' and '2021-03-31'";
        $tenero = mysqli_query($conn,$query);
        while($row = mysqli_fetch_array($tenero)){
           $marzo = $row['total_enero']; 
        }
        $query = "select sum(cantidad * precio - (cantidad * precio *descuento)) as total_enero from ventas where fecha between '2021-04-01' and '2021-04-31'";
        $tenero = mysqli_query($conn,$query);
        while($row = mysqli_fetch_array($tenero)){
           $abril = $row['total_enero']; 
        }
        $query = "select sum(cantidad * precio - (cantidad * precio *descuento)) as total_enero from ventas where fecha between '2021-05-01' and '2021-05-31'";
        $tenero = mysqli_query($conn,$query);
        while($row = mysqli_fetch_array($tenero)){
           $mayo = $row['total_enero']; 
        }
        $query = "select sum(cantidad * precio - (cantidad * precio *descuento)) as total_enero from ventas where fecha between '2021-06-01' and '2021-06-31'";
        $tenero = mysqli_query($conn,$query);
        while($row = mysqli_fetch_array($tenero)){
           $junio = $row['total_enero']; 
        }
        $query = "select sum(cantidad * precio - (cantidad * precio *descuento)) as total_enero from ventas where fecha between '2021-07-01' and '2021-07-31'";
        $tenero = mysqli_query($conn,$query);
        while($row = mysqli_fetch_array($tenero)){
           $julio = $row['total_enero']; 
        }
        $query = "select sum(cantidad * precio - (cantidad * precio *descuento)) as total_enero from ventas where fecha between '2021-08-01' and '2021-08-31'";
        $tenero = mysqli_query($conn,$query);
        while($row = mysqli_fetch_array($tenero)){
           $agosto = $row['total_enero']; 
        }
        $query = "select sum(cantidad * precio - (cantidad * precio *descuento)) as total_enero from ventas where fecha between '2021-09-01' and '2021-09-31'";
        $tenero = mysqli_query($conn,$query);
        while($row = mysqli_fetch_array($tenero)){
           $septiembre = $row['total_enero']; 
        }
        $query = "select sum(cantidad * precio - (cantidad * precio *descuento)) as total_enero from ventas where fecha between '2021-10-01' and '2021-10-31'";
        $tenero = mysqli_query($conn,$query);
        while($row = mysqli_fetch_array($tenero)){
           $octubre = $row['total_enero']; 
        }
        $query = "select sum(cantidad * precio - (cantidad * precio *descuento)) as total_enero from ventas where fecha between '2021-11-01' and '2021-11-31'";
        $tenero = mysqli_query($conn,$query);
        while($row = mysqli_fetch_array($tenero)){
           $noviembre = $row['total_enero']; 
        }
        $query = "select sum(cantidad * precio - (cantidad * precio *descuento)) as total_enero from ventas where fecha between '2021-12-01' and '2021-12-31'";
        $tenero = mysqli_query($conn,$query);
        while($row = mysqli_fetch_array($tenero)){
           $diciembre = $row['total_enero']; 
        }
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
    <title>DSS Merza</title>
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="css/estilos.css" rel="stylesheet">
</head>
<body id="page-top">
    <!-- Barra lateral de navegacion -->
    <div id="wrapper">
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: black;">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15 text-white">
                    Grupo MERZA
                </div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Ganancias</span></a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link" href="tables.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Inventario</span></a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">
            <li class="nav-item">
                <a class="nav-link" href="mas-vendido.php">
                    <i class="fa fa-bolt" aria-hidden="true"></i>
                    <span>Mas vendidos</span></a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">
            <div class="text-center d-none d-md-inline">
                <img src="img/merza.png" alt="" style="width: 200px">
            </div>
        </ul>
        <!-- Modal y boton del navbar para salir -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow" style="background-color: black;">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <ul class="navbar-nav ml-auto">
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
                <!-- Ganacias del mes -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Ganancias (Diciembre)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php
                                                            include("db.php");
                                                            $query = "select sum(cantidad * precio - (cantidad * precio *descuento)) as total from ventas where fecha between '2021-12-01' and '2022-01-01'";
                                                            $total = mysqli_query($conn,$query);
                                                            while($row = mysqli_fetch_array($total)){ ?>
                                                            <p> <?php echo "$ " . $row['total'] ?></p>        
                                                        <?php } ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Ganancias anuales -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Ganancias (Anual)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                        <?php
                                                            include("db.php");
                                                            $query = "select sum(cantidad * precio - (cantidad * precio *descuento)) as total from ventas";
                                                            $total = mysqli_query($conn,$query);
                                                            while($row = mysqli_fetch_array($total)){ ?>
                                                            <p> <?php echo "$ " . $row['total'] ?></p>        
                                                        <?php } ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Ganacias esperadas -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Ganancias esperadas
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                        <?php
                                                            include("db.php");
                                                            $query = "select (sum(cantidad * precio - (cantidad * precio *descuento)) / 25000)*100 as ganancias from ventas where fecha between '2021-12-01' and '2022-01-01'";
                                                            $total = mysqli_query($conn,$query);
                                                            while($row = mysqli_fetch_array($total)){ ?>
                                                            <p> <?php echo $row['ganancias'] . "%" ?></p>        
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                                <!-- aqui llenamos la grafica del porcetanje de ganacias esperadas -->
                                                <div class="col">
                                                        <?php
                                                            include("db.php");
                                                            $query = "select (sum(cantidad * precio - (cantidad * precio *descuento)) / 25000)*100 as ganancias from ventas where fecha between '2021-12-01' and '2022-01-01'";
                                                            $total = mysqli_query($conn,$query);
                                                            while($row = mysqli_fetch_array($total)){ ?>
                                                            <div class="progress progress-sm mr-2">
                                                                <div class="progress-bar bg-info" role="progressbar"
                                                                    style="width: <?php echo $row['ganancias'] . "%"?>;" aria-valuenow="50" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                        <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Parte para mandar mensaje a merza Villa union -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Enviar mensaje</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Merza Villa Union</div>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#"><img src="img/whatsapp.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- aqui la grafica de ganancias -->
                    <div class="row">
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Historial de ganancias</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="myAreaChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Categorias mas vendidas</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- Categorias mas vendidas -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="myPieChart"></canvas>
                                    </div>
                                    <div class="mt-4 text-center small">
                                        <?php
                                            include("db.php");
                                            $query = "select  distinct tipo_categoria from ventas as v inner join producto as p on v.id_producto = p.id inner join categoria_producto as c on c.id = p.idcategoria_producto";
                                            $p = mysqli_query($conn,$query);
                                            while($row = mysqli_fetch_array($p)){ ?>
                                            <span class="mr-2">
                                            <i class="fas fa-circle text-primary"></i> <?php echo $row['tipo_categoria'] ?>
                                            </span>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <!-- Footer de la pagina -->
            <footer class="sticky-footer text-white mt-5" style="background-color:#000">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Merza &copy DSS</span>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Modal llamado arriba con jquery para salir -->
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
    <script>
        ler arr[]; 
    </script>
    
    <!-- Obtenemos los datos del mysql con php y aqui lo mandamos a javascript para crear las graficas -->
    <script>
        let enero = <?php echo $enero;?>;
        let febrero = <?php echo $febrero;?>; 
        let marzo = <?php echo $marzo;?>; 
        let abril = <?php echo $abril;?>;
        let mayo = <?php echo $mayo;?>;
        let junio = <?php echo $junio;?>; 
        let julio = <?php echo $julio;?>; 
        let agosto = <?php echo $agosto;?>; 
        let septiembre = <?php echo $septiembre;?>;
        let octubre = <?php echo $octubre;?>; 
        let noviembre = <?php echo $noviembre;?>; 
        let diciembre = <?php echo $diciembre;?>;         
    </script>

    <!-- importaciond de librerias y scripts -->
    <script src="librerias/jquery/jquery.js"></script>
    <script src="librerias/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="librerias/chart.js/Chart.js"></script>
    <script src="js/graficas/mas-vendido.js"></script>
    <script src="js/graficas/categorias.js"></script>
    <script src="js/graficas/chart-bar-demo.js"></script>
</body>

</html>