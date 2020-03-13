<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="admin template, angular admin template, bootstrap admin template, modern admin template, modern design admin template, dashboard template, responsive admin template, angular web app, crypto dashboard, bitcoin dashboard">
    <title>G20 | Rede</title><!-- GLOBAL VENDORS-->
    <link rel="shortcut icon" href="../img/logoG20_BTC_original_v2.png">
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
    <link rel="stylesheet" href="../../../assets/assets/css/themes/app-sidebar-light.css">
    <link rel="stylesheet" href="../../../assets/jvectormap/jquery-jvectormap-2.0.3.css">
    <link rel="stylesheet" href="../../../assets/DataTables/datatables.min.css">
    <link rel="stylesheet" href="../../../assets/jstree/dist/themes/default/style.min.css">

    
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
                </nav>
                <main>
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
                                            <h4 class="mb-1">G20 Concluidos</h4>
                                            <h3 class="mb-1">000</h3><i class="ft-user-check data-widget-icon"></i>
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
                                            <h4 class="mb-1">Pessoas na Rede</h4>
                                            <h3 class="mb-1">0000</h3><i class="ft-sliders data-widget-icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card rounded-0">
                                    <div class="text-left">
                                        <h4 class="mt-4 ml-4"><i class="sidebar-item-icon ft-git-pull-request"></i> Sua rede G20</h4>
                                    </div>
                                    <div class="row justify-content-md-center">
                                        <div class="col-11 ml-4">
                                            <form name="frm_Selected" method="post">
                                                
                                                <div class="input-group mb-4" data-select2-id="221"><select class="form-control select2_demo select2-hidden-accessible" data-select2-id="31" tabindex="-1" aria-hidden="true">
                                                <option data-select2-id="33" selected>Selecione..</option>
                                                    <option value="option_1" data-select2-id="223">Option 1</option>
                                                    <option value="option_2" data-select2-id="224">Option 2</option>
                                                    <option value="option_3" data-select2-id="225">Option 3</option>
                                                    <option value="option_4" data-select2-id="226">Option 4</option>
                                                    <option value="option_5" data-select2-id="227">Option 5</option></select>
                                                    <div class="input-group-append"><input class="btn ml-2 btn-rounded btn-block btn-info" type="submit" value="Buscar"></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="row justify-content-md-center">
                                        <div class="col-11">
                                            <div class="rounded-0 ml-4">
                                     <div class="row justify-content-md-center mt-4">
                                        <div class="col-sm-3">
                                            <div class="card rounded-0 ml-3 mr-3">
                                                <div class="pl-2 mt-2 mb-2">
                                                    <h5>Recebido Hoje</h5>
                                                <h4>0,000000 BTC</h4><i class="ft-download data-widget-icon"></i>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="col-sm-3 ml-3 mr-3">
                                            <div class="card rounded-0 ">
                                                <div class="pl-2 mt-2 mb-2">
                                                    <h5>Recebido Geral</h5>
                                                    <h4>0,000000 BTC</h4><i class="ft-globe data-widget-icon"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row ml-4 justify-content-md-center">
                                        <div class="col-5">
                                            
                                            <div class="card-body">
                                                <div class="text-left">
                                               
                                                </div>
                                                <div class="demo jstree jstree-2 jstree-default" id="jstree2" role="tree" aria-multiselectable="true" tabindex="0" aria-activedescendant="j2_1" aria-busy="false"><ul class="jstree-container-ul jstree-children jstree-contextmenu" role="group"><li role="treeitem" aria-selected="false" aria-level="1" aria-labelledby="j2_1_anchor" id="j2_1" class="jstree-node  jstree-leaf"><i class="jstree-icon jstree-ocl" role="presentation"></i><a class="jstree-anchor" href="#" tabindex="-1" id="j2_1_anchor"><i class="jstree-icon jstree-themeicon fas fa-folder jstree-themeicon-custom" role="presentation"></i>TreeView</a></li><li role="treeitem" data-jstree="{ &quot;opened&quot; : true }" aria-selected="false" aria-level="1" aria-labelledby="j2_2_anchor" aria-expanded="true" id="j2_2" class="jstree-node  jstree-open"><i class="jstree-icon jstree-ocl" role="presentation"></i><a class="jstree-anchor" href="#" tabindex="-1" id="j2_2_anchor"><i class="jstree-icon jstree-themeicon fas fa-folder jstree-themeicon-custom" role="presentation"></i>TreeView</a><ul role="group" class="jstree-children"><li role="treeitem" data-jstree="{ &quot;icon&quot; : &quot;fas fa-briefcase text-success&quot; }" aria-selected="false" aria-level="2" aria-labelledby="j2_3_anchor" id="j2_3" class="jstree-node  jstree-leaf"><i class="jstree-icon jstree-ocl" role="presentation"></i><a class="jstree-anchor" href="#" tabindex="-1" id="j2_3_anchor"><i class="jstree-icon jstree-themeicon far fa-file-code jstree-themeicon-custom" role="presentation"></i>TreeView</a></li><li role="treeitem" data-jstree="{ &quot;type&quot; : &quot;file&quot; }" aria-selected="false" aria-level="2" aria-labelledby="j2_4_anchor" id="j2_4" class="jstree-node  jstree-leaf"><i class="jstree-icon jstree-ocl" role="presentation"></i><a class="jstree-anchor" href="#" tabindex="-1" id="j2_4_anchor"><i class="jstree-icon jstree-themeicon far fa-file-code jstree-themeicon-custom" role="presentation"></i>TreeView</a></li><li role="treeitem" data-jstree="{ &quot;type&quot; : &quot;file&quot; }" aria-selected="false" aria-level="2" aria-labelledby="j2_5_anchor" id="j2_5" class="jstree-node  jstree-leaf"><i class="jstree-icon jstree-ocl" role="presentation"></i><a class="jstree-anchor" href="#" tabindex="-1" id="j2_5_anchor"><i class="jstree-icon jstree-themeicon far fa-file-code jstree-themeicon-custom" role="presentation"></i>TreeView</a></li></ul></li><li role="treeitem" aria-selected="false" aria-level="1" aria-labelledby="j2_10_anchor" id="j2_10" class="jstree-node  jstree-leaf jstree-last"><i class="jstree-icon jstree-ocl" role="presentation"></i><a class="jstree-anchor" href="#" tabindex="-1" id="j2_10_anchor"><i class="jstree-icon jstree-themeicon fas fa-folder jstree-themeicon-custom" role="presentation"></i>TreeView</a></li></ul></div>
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
                </main>
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
    <script src="../../../assets/jstree/dist/jstree.min.js"></script>
    <script>
         $(function() {
            $('#jstree1').jstree();
            $('#jstree2').jstree({
                core: {
                    'check_callback': true
                },
                types: {
                    default: {
                        icon: "fas fa-folder"
                    },
                    file: {
                        icon: "far fa-file-code"
                    },
                    image: {
                        icon: "far fa-image"
                    }
                },
                plugins: ["dnd", "types", "contextmenu"],
            });
            var file_types = {
                default: {
                    icon: "fas fa-folder text-warning"
                },
                file: {
                    icon: "far fa-file"
                },
                image: {
                    icon: "far fa-image"
                },
                html: {
                    icon: 'far fa-file-code'
                },
                css: {
                    icon: 'far fa-file-code'
                },
                code: {
                    icon: 'far fa-file-alt'
                },
                audio: {
                    icon: 'far fa-file-audio'
                },
                video: {
                    icon: 'far fa-file-video'
                },
            };
            $('#jstree3').jstree({
                core: {
                    'check_callback': true
                },
                types: file_types,
                plugins: ["dnd", "types", "contextmenu", "wholerow"],
            });
            $('#jstree4').jstree({
                core: {
                    'check_callback': true
                },
                core: {
                    data: {
                        urlx: function(node) {
                            return "./assets/demo/server/ajax_tree_data.php"
                        },
                        url: function(node) {
                            return node.id === '#' ?
                                './assets/demo/data/tree-data/ajax_roots.json' :
                                './assets/demo/data/tree-data/ajax_childrens.json';
                        },
                        data: function(node) {
                            return {
                                id: node.id
                            }
                        }
                    },
                },
                types: file_types,
                plugins: ["dnd", "types", "contextmenu", "wholerow"],
            });
        });
    </script>
</body>

</html>