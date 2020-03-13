<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="admin template, angular admin template, bootstrap admin template, modern admin template, modern design admin template, dashboard template, responsive admin template, angular web app, crypto dashboard, bitcoin dashboard">
    <title>G20 | Comprar Cursos</title><!-- GLOBAL VENDORS-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" media="all">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="shortcut icon" href="../img/logoG20_BTC_original_v2.png">

    <link rel="stylesheet" href="../../../assets/feather-icons/feather.css">
    <link rel="stylesheet" href="../../../assets/line-awesome/css/line-awesome.min.css">
    <link rel="stylesheet" href="../../../assets/@fortawesome/fontawesome-free/css/all.css">
    <link rel="stylesheet" href="../../../assets/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="../../../assets/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="../../../assets/perfect-scrollbar/css/perfect-scrollbar.css">
    <link rel="stylesheet" href="../../../assets/@fortawesome/fontawesome-free/css/all.css">
    <link rel="stylesheet" href="../../../assets/assets/css/themes/app-sidebar-light.css">
    <link rel="stylesheet" href="../../../assets/jvectormap/jquery-jvectormap-2.0.3.css">
    <link rel="stylesheet" href="../../../assets/DataTables/datatables.min.css">

    
    <style>.data-widget-icon {
position: absolute;
top: 20px;
right: 20px;
font-size: 40px;
color: #6a89d7;
}
</style>
</head>

<body>
<!--   ----------------------------------------------------------- DELETAR DAQUI PARA CIMA------------------------------------------------------>
    <div class="page-wrapper">
        <div class="content-wrapper">
            <!-- BEGIN: Sidebar-->
              <div class="page-sidebar custom-scroll text-dark" id="sidebar">
                <div class="sidebar-header mb-0 p-0 pt-2"><a class="sidebar-brand" href="#"><img src="../img/logoG20_BTC_original_v1.png" class="rounded" alt="LogoG20"></a><a class="sidebar-brand-mini" href="#"></a><span class="sidebar-points"></span></div>
                <ul class="sidebar-menu metismenu">
                    <li class="heading p-0 pl-4"><span>Navegação</span></li>
                    <li><a href="#"><i class="sidebar-item-icon ft-home"></i><span class="nav-label">Home</span></a></li>
                    <li><a href="#"><i class="sidebar-item-icon ft-git-pull-request"></i><span class="nav-label">Rede</span></a></li>
                    <li><a href="#"><i class="sidebar-item-icon ft-user"></i><span class="nav-label">Perfil</span></a></li>
                    <li><a href="javascript:;"> <i class="sidebar-item-icon ft-settings"></i><span class="nav-label text-dark">Financeiro</span><i class="arrow la la-angle-right"></i></a>
                        <ul class="nav-2-level">
                            <!-- 2-nd level-->
                            <li><a href="#"><i class="sidebar-item-icon ft-dollar-sign"></i>Comprar Curso</a></li>
                            <li><a href="#"><i class="sidebar-item-icon ft-file-text"></i>Extrato</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="sidebar-item-icon ft-monitor"></i><span class="nav-label">Curso</span></a></li>
                    <li><a href="#"><i class="sidebar-item-icon ft-headphones"></i><span class="nav-label"> Suporte</span></a>
                    </li>
                </ul>
            </div><!-- END: Sidebar-->
            <!-- BEGIN: Content-->
            <div class="content-area">
                <!-- BEGIN: Header-->
                <nav class="navbar navbar-expand navbar-light fixed-top header">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a class="nav-link navbar-icon sidebar-toggler" id="sidebar-toggler" href="#"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a></li>
                        <li class="nav-item dropdown d-none d-sm-inline-block"><a class="nav-link dropdown-toggle megamenu-link" href="#" data-toggle="dropdown"></a>
                        </li>
                    </ul>
                </nav><!-- END: Header-->
                <div class="container-fluid">
        <div class="main mt-4">
            <div class="content ">
                    <div class="p-0 container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-lg">
                                <div class="flex-fill card rounded-0">
                                    <div class="py-4 card-body">
                                        <div class="alert alert-warning alert-bordered has-icon" role="alert"><i class="la la-warning alert-icon"></i> <strong>Warning!</strong><br>A simple warning alert&mdash;check it out!
                                         </div> 
                                        <div class="media mt-4">
                                            <div class="media-body">
                                                <h6><i class="fab fa-bitcoin"></i> Reserva de bitcoin</h6>
                                                <h4 class="mb-2">0,0000000 BTC</h4>
                                                <div class="mb-0">
                                                    <form class="from-label-group" name="frm_reservabtc" method="post">
                                                    <input class="btn btn-info btn-rounded btn-sm mt-0" type="submit" value="Retirar Reserva">
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-lg">
                                <div class="flex-fill card rounded-0">
                                    <div class="py-4 card-body">
                                        <div class="media">
                                            <div class="media-body">
                                                <h6><i class="sidebar-item-icon ft-check-circle"></i> Curso Ativo</h6>
                                                <h5 class="ml-2">Básico</h5>
                                                
                                            </div>
                                            <div class="media-body"></div>
                                            <div class="media-body">
                                                <div class="mb-0 text-center">Compra Automatica</div>
                                                <div class="supensebox container">
                                                    <form name="frm_select" method="post">
                                                        <div class="input-group container mr-2">
                                                            <select class="custom-select" id="inputGroupSelect">
                                                                <option selected>Selecione Uma Opção</option>
                                                                <option value="1">Modo automático</option>
                                                                <option value="2">Desligar modo automático</option>
                                                            </select>
                                                             <div class="form-group my-4">
                                                                 <label class="checkbox checkbox-primary mt-2"><input type="checkbox" checked=""><span></span></label>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    <div class="row">
                        <div class="col-md-6 col-xl">
                            <div class="flex-fill card rounded-0">
                                <div class="py-4 card-body">
                                    <div class="text-center">
                                        <h4>Assinatura de curso</h4>
                                    </div>
                                    <div class="alert alert-warning alert-bordered has-icon" role="alert"><i class="la la-warning alert-icon"></i>          <strong>Warning!</strong><br>A simple warning alert&mdash;check it out!
                                    </div> 
                                    <div class="row">
                                        <div class="col-md-4 col-xl">
                                            <div class="flex-fill card rounded-0">
                                                <div class="py-4 card-body">
                                                    <div class="media">
                                                        <div class="d-inline-block mt-2 mr-3"></div>
                                                        <div class="media-body text-center">
                                                            <h4 class="mb-1">Titulo</h4>
                                                            <div class="mb-0">Texto</div>
                                                            <div class="mb-0">Texto</div>
                                                            <div class="mb-0">Texto</div>
                                                            <h5 class="mb-1">Numero</h5>
                                                            <form class="" name="frm_Comprar1" method="post">
                                                                <input class="btn btn-success btn-rounded btn-lg mt-0" type="submit" value="Comprar">
                                                            </form>
                                                      </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xl">
                                            <div class="flex-fill card rounded-0">
                                                <div class="py-4 card-body">
                                                    <div class="media">
                                                        <div class="d-inline-block mt-2 mr-3"></div>
                                                        <div class="media-body text-center">
                                                            <h4 class="mb-1">Titulo</h4>
                                                            <div class="mb-0">Texto</div>
                                                            <div class="mb-0">Texto</div>
                                                            <div class="mb-0">Texto</div>
                                                            <h5 class="mb-1">Numero</h5>
                                                            <form class="" name="frm_Comprar2" method="post">
                                                                <input class="btn btn-success btn-rounded btn-lg mt-0" type="submit" value="Comprar">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xl">
                                            <div class="flex-fill card rounded-0">
                                                <div class="py-4 card-body">
                                                    <div class="media">
                                                        <div class="d-inline-block mt-2 mr-3"></div>
                                                        <div class="media-body text-center">
                                                            <h4 class="mb-1">Titulo</h4>
                                                            <div class="mb-0">Texto</div>
                                                            <div class="mb-0">Texto</div>
                                                            <div class="mb-0">Texto</div>
                                                            <h5 class="mb-1">Numero</h5>
                                                            <form class="" name="frm_Comprar3" method="post">
                                                                <input class="btn btn-success btn-rounded btn-lg mt-0" type="submit" value="Comprar">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                          </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>  
            </div>
        </div>
    </div>
</div>
    <!-- END: Quick sidebar-->
    <!-- BEGIN: Page backdrops-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Carregando..</div>
    </div> 
    <!-- CORE PLUGINS-->
    
    <script src="../../../assets/jquery/dist/jquery.min.js"></script>
    <script src="../../../assets/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../../assets/metismenu/dist/metisMenu.min.js"></script>
    <script src="../../../assets/perfect-scrollbar/dist/perfect-scrollbar.js"></script>
    <script src="../../../assets/moment/min/locales.min.js"></script>
    <script src="../../../assets/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="../../../assets/chart.js/dist/Chart.min.js"></script>
    <script src="../../../assets/easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
    <script src="../../../assets/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="../../../assets/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../../../assets/DataTables/datatables.min.js"></script>
    <script src="../../../assets/assets/js/app.min.js"></script>
    <script src="../../../assets/assets/js/scripts/calendar-demo.js"></script>
    <script src="../../../assets/clipboard/dist/clipboard.js"></script>
</body>

</html>