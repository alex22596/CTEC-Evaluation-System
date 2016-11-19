<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login | CTEC Evaluation System</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/animate.min.css" rel="stylesheet">
    <link href="../css/lightbox.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link href="../css/responsive.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="../js/functionality.js">

    </script>
    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="../images/logo1.png">
</head>
<!--/head-->

<body>
    <div class="page-wrap">
        <header id="header">
            <div class="navbar navbar-inverse" role="banner">
                <div class="container">
                    <div class="navbar-header">
                        <a class="navbar-brand">
                            <h1><img src="../images/logo1.png" alt="logo"></h1>
                        </a>
                    </div>
                </div>
        </header>
        <!--/#header-->
        <section>
            <div class="container center">
                <h1>Bienvenido a CTEC Evaluation System. <br>Iniciar Sesión:</h1>
                <form class="" action="login.php" method="post" name="form" id="form">
                    <div class="form-group">
                        <input type="text" class="form-control" value="" placeholder="Ingrese su nombre de usuario" name="usuario">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" value="" placeholder="Ingrese su contraseña" name ="contra">
                    </div>
                    <input type="submit" class="btn btn-info" value="Iniciar Sesión" name="btnIniciar">
                </form>
                <?php
                if(isset($_POST['btnIniciar'])){

                    include("abrir_conexion.php");

                    $user = $_POST['usuario'];
                    $pass = $_POST['contra'];

                    $resultado = mysqli_query($conexion,"SELECT * FROM users");

                    while($consulta = mysqli_fetch_array($resultado)){
                        $nombreUsu = $consulta["name"];
                        $email = $consulta['email'];
                        $contra = $consulta['password'];
                        if(($nombreUsu == $user) && ($contra == $pass)){
                            header("location: instalaciones.php");
                        }
                        else{
                            ?>
                            <<script>
                                window.alert("Datos incorrectos");
                            </script>
                            <?php
                        }
                    }
                    include("cerrar_conexion.php");
                }
                ?>
            </div>
        </section>
        </div>
        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copy-right">
                            <p>&copy Todos los derechos reservados 2016</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--/#footer-->
        <script type="text/javascript" src="../js/jquery.js"></script>
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../js/lightbox.min.js"></script>
        <script type="text/javascript" src="../js/wow.min.js"></script>
        <script type="text/javascript" src="../js/main.js"></script>
</body>

</html>