<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="admin template, angular admin template, bootstrap admin template, modern admin template, modern design admin template, dashboard template, responsive admin template, angular web app, crypto dashboard, bitcoin dashboard">
    <title>Bootstrap &amp; Angular admin template + crypto dashboard - modern design admin | Login</title><!-- GLOBAL VENDORS-->
    
    <link rel="stylesheet" href="../../../assets/feather-icons/feather.css">
    <link rel="stylesheet" href="../../../assets/line-awesome/css/line-awesome.min.css">
    <link rel="stylesheet" href="../../../assets/@fortawesome/fontawesome-free/css/all.css">
    <link rel="stylesheet" href="../../../assets/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="../../../assets/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="../../../assets/perfect-scrollbar/css/perfect-scrollbar.css">
    <link rel="stylesheet" href="../../../assets/@fortawesome/fontawesome-free/css/all.css">
    <link rel="stylesheet" href="../../../assets/assets/css/themes/app-sidebar-light.min.css">
    <link rel="stylesheet" href="../../../assets/jvectormap/jquery-jvectormap-2.0.3.css">
    <link rel="stylesheet" href="../../../assets/DataTables/datatables.min.css">
    
    <!-- PAGE LEVEL STYLES-->
    <style>body {
	background-color: #F2F3FA;
}

.auth-wrapper {
	flex: 1 0 auto;
	display: flex;
	align-items: center;
	justify-content: center;
    padding: 50px 15px 30px 15px;
}

.auth-content {
	max-width: 400px;
	flex-basis: 400px;
    box-shadow: 0 5px 20px #d6dee4;
}
.home-link {
	position: absolute;
	left: 5px;
	top: 10px;
}
</style>
</head>

<body>
    <div class="page-wrapper">
        <div class="auth-wrapper">
            <div class="card auth-content mb-0">
                <div class="card-body py-5">
                    <div class="text-center mb-5">
                        <img src="#" class="" alt="LOGO" height="" width="">
                        <h1>Esqueceu a Senha</h1>
                    </div>
                    <form id="login-form" action="" method="post">
                        <div class="mb-4">
                            <div class="md-form mb-0"><input class="md-form-control" type="email" autocomplete="off" name="email"><label>E-mail</label></div>
                        </div>
                        <div>
                        
                        </div>
                        <button class="btn btn-primary btn-rounded btn-block" type="submit">Enviar</button>
                        <button class="btn btn-danger btn-rounded btn-block" type="submit">Voltar</button>
                    </form>
                   
                </div>
            </div><a class="btn btn-link home-link" href="index.html"><span class="btn-icon"><i class="ti-arrow-left font-20"></i>Voltar</span></a>
        </div>
    </div><!-- BEGIN: Page backdrops-->
        <!-- CORE PLUGINS-->
    <script src="jquery/dist/jquery.min.js"></script>
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script><!-- PAGE LEVEL PLUGINS-->
    <script src="jquery-validation/dist/jquery.validate.min.js"></script><!-- CORE SCRIPTS-->
    <script src="js/app.min.js"></script><!-- PAGE LEVEL SCRIPTS-->
    <script>
        $(function() {
            $('#login-form').validate({
                rules: {
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true
                    }
                },
                errorClass: 'invalid-feedback',
                validClass: 'valid-feedback',
                errorPlacement: function(error, element) {
                    if (element.hasClass('md-form-control')) {
                        error.insertAfter(element.closest('.md-form'));
                    } else {
                        error.insertAfter(element);
                    }
                },
                highlight: function(e) {
                    $(e).addClass("invalid").removeClass('valid');
                },
                unhighlight: function(e) {
                    $(e).removeClass("invalid").addClass('valid');
                },
            });
        });
    </script>
</body>

</html>