<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="admin template, angular admin template, bootstrap admin template, modern admin template, modern design admin template, dashboard template, responsive admin template, angular web app, crypto dashboard, bitcoin dashboard">
    <title>Bootstrap &amp; Angular admin template + crypto dashboard - modern design admin | eCommerce Analytics</title><!-- GLOBAL VENDORS-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" media="all">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    
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
                        <div class="row mt-4">
                            <div class="col-md-6 col-xl">
                                 <div class="flex-fill card rounded-0">
                                     <div class="py-4 card-body">
                                        <div class="media">
                                            <div class="d-inline-block mt-2 mr-3"></div>
                                            <div class="media-body">
                                            <h4 class="mb-1">Recebido Hoje</h4>
                                            <h3 class="mb-1">0,0000000 BTC</h3><i class="ft-download data-widget-icon"></i>
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
                                            <div class="media-body">
                                            <h4 class="mb-1">Recebido Geral</h4>
                                            <h3 class="mb-1">0,0000000 BTC</h3><i class="ft-globe data-widget-icon"></i>
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
                                            <div class="media-body">
                                            <h4 class="mb-1">Saldo Reserva</h4>
                                            <h3 class="mb-1">0,0000000 BTC</h3><i class="ft-database data-widget-icon"></i>
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
                                            <div class="media-body">
                                            <h4 class="mb-1">G20 Atual</h4>
                                            <h3 class="mb-1">0000</h3><i class="ft-user data-widget-icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="d-flex col-lg-12">
                                <div class="flex-fill w-100 card rounded-0">
                                    <div class="card-header">
                                        <h4 class="mb-0 card-title"><i class="sidebar-item-icon ft-file-text"></i> Extratos</h4>
                                    </div>
                                <div class="row justify-content-md-center">
                                    <div class="card-body p-1">
                                        <div class="col-md-12">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                             <th scope="col">#</th>
                                                             <th scope="col">First</th>
                                                             <th scope="col">Last</th>
                                                             <th scope="col">Handle</th>
                                                        </tr>
                                                    </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                             </tr>
                                                             <tr>
                                                                <th scope="row">2</th>
                                                                <td>Jacob</td>
                                                                <td>Thornton</td>
                                                                <td>@fat</td>
                                                             </tr>
                                                        <tr>
                                                            <th scope="row">3</th>
                                                            <td>Larry</td>
                                                            <td>the Bird</td>
                                                            <td>@twitter</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
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
    <script>
        $(function() {
            var clipboard = new ClipboardJS('[data-clipboard]')
                .on("success", function(e) {
                    //e.clearSelection();
                    alert("Link copiado com sucesso!");
                });
        });
    </script>
</body>

</html>