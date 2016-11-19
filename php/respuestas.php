<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Respuestas | CTEC Evaluation System</title>
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
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                      </button>
                        <a class="navbar-brand" >
                            <h1><img src="../images/logo1.png" alt="logo"></h1>
                        </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="../php/instalaciones.php">Instalaciones</a></li>
                            <li class="active"><a href="../php/cuestionarios.php">Cuestionarios</a></li>
                            <li class="active"><a href="../php/preguntas.php">Preguntas</a></li>
                            <li class="active"><a href="../php/respuestas.php">Respuestas</a></li>
                            <li class="active"><a href="#">Enviar Cuestionario</a></li>
                            <li class="active"><a href="#">Generar Reporte</a></li>
                            <li class="active"><a href="../php/login.php">Cerrar Sesión</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!--/#header-->
        <section>
            <div class="container">
                <div class="center-horizontally">
                    <div class="button">
                        <button type="button" name="button" id="createInstallation" class="btn btn-primary">Crear Opción</button>
                    </div>
                    <div class="button">
                        <button type="button" name="button" id="modifyInstallation" class="btn btn-success">Modificar Opción</button>
                    </div>
                    <div class="button">
                        <button type="button" name="button" id="deleteInstallation" class="btn btn-danger">Eliminar Opción</button>
                    </div>
                </div>
                <div class="container center" id="showCreateInstallation">
                    <form>
                        <div class="form-group">
                            <select name="OS" class="form-control">
                          <option value="1">Escoja la Instalación</option>
                          <option value="2">Instalación 1</option>
                          <option value="3">Instalación 2</option>
                          <option value="4">Instalación 3</option>
                          <option value="5">Instalación 4</option>
                      </select>
                        </div>
                        <div class="form-group">
                            <select name="OS" class="form-control">
                          <option value="1">Escoja la pregunta a la que desea agregarle opciones</option>
                          <option value="2">Pregunta 1</option>
                          <option value="3">Pregunta 2</option>
                          <option value="4">Pregunta 3</option>
                          <option value="5">Pregunta 4</option>
                      </select>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-1">
                                    <input type="radio" class="form-control">
                                </div>
                                <div class="col-md-11">
                                    <input type="text" class="form-control" placeholder="Ingresa la opción">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-info">Crear Respuesta</button>
                    </form>
                </div>
                <!--Modify Instalation-->
                <div class="container center" id="showModifyInstallation" hidden>
                    <form>
                        <div class="form-group">
                            <select name="OS" class="form-control">
                            <option value="1">Escoja la Instalación</option>
                            <option value="2">Instalación 1</option>
                            <option value="3">Instalación 2</option>
                            <option value="4">Instalación 3</option>
                            <option value="5">Instalación 4</option>
                        </select>
                        </div>
                        <div class="form-group">
                            <select name="OS" class="form-control">
                            <option value="1">Escoja la pregunta</option>
                            <option value="2">Pregunta 1</option>
                            <option value="3">Pregunta 2</option>
                            <option value="4">Pregunta 3</option>
                            <option value="5">Pregunta 4</option>
                        </select>
                        </div>
                        <div class="form-group">
                            <select name="OS" class="form-control">
                            <option value="1">Escoja la respuesta que desea modificar</option>
                            <option value="2">Respuesta 1</option>
                            <option value="3">Respuesta 2</option>
                            <option value="4">Respuesta 3</option>
                            <option value="5">Respuesta 4</option>
                        </select>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-1">
                                    <input type="radio" class="form-control">
                                </div>
                                <div class="col-md-11">
                                    <input type="text" class="form-control" placeholder="Ingresa la nueva opción">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-info">Modificar Respuesta</button>
                    </form>
                </div>
                <!--Delete Instalation-->
                <div class="container center" id="showDeleteInstallation" hidden>
                    <form>
                        <div class="form-group">
                            <select name="OS" class="form-control">
                         <option value="1">Escoja la Instalación</option>
                         <option value="2">Instalación 1</option>
                         <option value="3">Instalación 2</option>
                         <option value="4">Instalación 3</option>
                         <option value="5">Instalación 4</option>
                     </select>
                        </div>
                        <div class="form-group">
                            <select name="OS" class="form-control">
                         <option value="1">Escoja la pregunta</option>
                         <option value="2">Pregunta 1</option>
                         <option value="3">Pregunta 2</option>
                         <option value="4">Pregunta 3</option>
                         <option value="5">Pregunta 4</option>
                     </select>
                        </div>
                        <div class="form-group">
                            <select name="OS" class="form-control">
                         <option value="1">Escoja la respuesta que desea Eliminar</option>
                         <option value="2">Respuesta 1</option>
                         <option value="3">Respuesta 2</option>
                         <option value="4">Respuesta 3</option>
                         <option value="5">Respuesta 4</option>
                     </select>
                        </div>
                        <button type="submit" class="btn btn-info">Eliminar Respuesta</button>
                    </form>
                </div>
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
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/lightbox.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>