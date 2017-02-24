<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>;
    </script>

    <title>Penggajian Ujikom</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

   <link href="css/app.css" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

</head>
<body>
            
            <!-- Top Menu Items -->
           

                    <!-- Branding Image -->

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        <?php if(Auth::guest()): ?>
                            <li><a href="<?php echo e(url('/login')); ?>">Login</a></li>
                        <?php else: ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="<?php echo e(url('/logout')); ?>"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                                    </li>
                                </ul>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="brand">Aplikasi Penggajian</div>
    <div class="address-bar">Standar Ujikom Smk Assalaam</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-5">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="/Jabatan">Jabatan</a>
                    </li>
                    <li>
                        <a href="/Golongan">Golongan</a>
                    </li>
                    <li>
                        <a href="/Kategori_Lembur">Kategori Lembur</a>
                    </li>
                    <li>
                        <a href="/Pegawai">Pegawai</a>
                    </li>
                    <li>
                        <a href="/Lembur_Pegawai">Lembur Pegawai</a>
                    </li>
                    <li>
                        <a href="/Tunjangan">tunjangan</a>
                    </li>
                    <li>
                        <a href="/Tunjangan_Pegawai">tunjangan Pegawai</a>
                    </li>
                    <li>
                        <a href="/Penggajian">Penggajian</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        
                    <h2 class="brand-before">
                        <small>Welcome to</small>
                    </h2>
                    <h1 class="brand-name">Aplikasi Penggajian</h1>
                    <hr class="tagline-divider">
                    <h2>
                        <small>By
                            <strong>Anugrah</strong>
                        </small>
                    </h2>
                </div>
            </div>
        </div>

     


        <?php echo $__env->yieldContent('content'); ?>
         <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Pembuatan Aplikasi 2017 </p>
                </div>
            </div>
        </div>
    </footer>

    </div>

    <!-- Scripts -->
    <script src="js/jquery.js"></script>


    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
</body>
</html>
