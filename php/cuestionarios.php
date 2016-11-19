<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cuestionarios | CTEC Evaluation System</title>
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
</head>
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
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                      </button>
                        <a class="navbar-brand">
                            <h1><img src="../images/logo1.png" alt="logo"></h1>
                        </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="../php/instalaciones.php">Instalaciones</a></li>
                            <li class="active"><a href="../php/cuestionarios.php">Cuestionarios</a></li>
                            <li class="active"><a href="../php/preguntas.php">Preguntas</a></li>
                            <li class="active"><a href="../php/respuestas.php">Respuestas</a></li>
                            <li class="active"><a href="index.html">Enviar Cuestionario</a></li>
                            <li class="active"><a href="index.html">Generar Reporte</a></li>
                            <li class="active"><a href="index.html">Cerrar Sesión</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!--/#header-->
        <section>
            <div class="container">
                <div class="container center" id="showCreateInstallation">
                    <form method = "POST">
                        <div class="form-group">
                            <input type="name" class="form-control" id="Name" placeholder="Ingresa el nombre del cuestionario">
                        </div>
                        <div class="form-group">
                            <select name="OS" class="form-control">
                                <option value="0">Escoja la Instalación</option>
                                <?php
                                    include("abrir_conexion.php");
                                    $resultado = mysqli_query($conexion,"SELECT * FROM instalacion");
                                    while($row = mysqli_fetch_array($resultado)){
                                        echo "<option value='".$row['id']."'>";
                                        echo $row['nombre'];
                                        echo "</option>";
                                    }
                                    include("cerrar_conexion.php");
                                ?>
                            </select>
                        </div>
                        <div class="form-group row">
                            <div class="col-xs-8 col-sm-10 col-md-11">
                                <select name="OS" class="form-control">
                                <option value="1">Escoja la Pregunta</option>
                                <option value="2">Pregunta 1</option>
                                <option value="3">Pregunta 2</option>
                                <option value="4">Pregunta 3</option>
                                <option value="5">Pregunta 4</option>
                            </select>
                            </div>
                            <div class="col-xs-4 col-sm-2 col-md-1">
                                <button type="submit" class="btn btn-success" id="id">Añadir</button>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-info">Crear Instalación</button>
                    </form>
                </div>
                <!--Modify Instalation-->
                <div class="container center" id="showModifyInstallation" hidden>
                    <form action="">
                        <div class="form-group">
                            <select name="OS" class="form-control">
                            <option value="1">Escoja la evaluacion que desea modificar</option> 
                            <option value="2">Evaluacion 1</option> 
                            <option value="3">Evaluacion 2</option> 
                            <option value="4">Evaluacion 3</option> 
                            <option value="5">Evaluacion 4</option>
                        </select>
                        </div>
                        <div class="form-group">
                            <input type="name" class="form-control" id="Name" placeholder="Ingresa el nuevo nombre de la evaluacion">
                        </div>
                        <div class="form-group">
                            <select name="OS" class="form-control">
                            <option value="1">Escoja la Instalacion</option> 
                        </select>
                            <div class="col-left">
                                <div class="col-left">
                                    <div class="form-group row">
                                        <div class="col-xs-8 col-sm-10 col-md-10">
                                            <h1>Pregunta 1</h1>
                                        </div>
                                        <div class="col-xs-4 col-sm-2 col-md-2">
                                            <input type="checkbox" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-xs-8 col-sm-10 col-md-10">
                                            <h1>Pregunta 2</h1>
                                        </div>
                                        <div class="col-xs-4 col-sm-4 col-md-2">
                                            <input type="checkbox" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-xs-8 col-sm-10 col-md-10">
                                            <h1>Pregunta 3</h1>
                                        </div>
                                        <div class="col-xs-4 col-sm-2 col-md-2">
                                            <input type="checkbox" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-info">Modificar Evaluacion</button>
                    </form>
                </div>
                <!--Delete Instalation-->
                <div class="container center" id="showDeleteInstallation" hidden>
                    <form>
                        <div class="form-group">
                            <select name="OS" class="form-control">
                                <option value="1">Escoja la evaluación que desea eliminar</option> 
                                <option value="2">Evaluación 1</option> 
                                <option value="3">Evaluación 2</option> 
                                <option value="4">Evaluación 3</option> 
                                <option value="5">Evaluación 4</option>
                            </select>
                        </div>
                    </form>
                    <button type="submit" class="btn btn-info">Eliminar Evaluación</button>
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