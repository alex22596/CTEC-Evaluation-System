<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Triangle</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/lightbox.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="js/functionality.js">

    </script>
    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
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
                        <a class="navbar-brand" href="index.html">
                            <h1><img src="images/logo1.png" alt="logo"></h1>
                        </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="instalaciones.html">Instalaciones</a></li>
                            <li class="active"><a href="cuestionarios.html">Cuestionarios</a></li>
                            <li class="active"><a href="preguntas.html">Preguntas</a></li>
                            <li class="active"><a href="respuestas.html">Respuestas</a></li>
                            <li class="active"><a href="#">Enviar Cuestionario</a></li>
                            <li class="active"><a href="#">Generar Reporte</a></li>
                            <li class="active"><a href="login.html">Cerrar Sesión</a></li>
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
                        <button type="button" name="button" id="createInstallation" class="btn btn-primary">Crear Pregunta</button>
                    </div>
                    <div class="button">
                        <button type="button" name="button" id="modifyInstallation" class="btn btn-success">Modificar Pregunta</button>
                    </div>
                    <div class="button">
                        <button type="button" name="button" id="deleteInstallation" class="btn btn-danger">Eliminar Pregunta</button>
                    </div>
                </div>
                <div class="container center" id="showCreateInstallation">
                    <form>
                        <div class="form-group">
                            <input type="name" class="form-control" id="Name" placeholder="Ingresa el Contenido de la Pregunta">
                        </div>
                        <div class="form-group">
                            <select name="OS" class="form-control">
                         <option value="1">Escoja el tipo de pregunta</option>
                         <option value="2">Selección Única</option>
                         <option value="3">Selección Múltiple</option>
                         <option value="4">Caja de Comentario</option>
                         <option value="5">Escala</option>
                     </select>
                        </div>
                        <button type="submit" class="btn btn-info">Crear Pregunta</button>
                    </form>
                </div>
                <!--Modify Questions-->
                <div class="container center" id="showModifyInstallation" hidden>
                    <form>
                        <div class="form-group">
                            <select name="OS" class="form-control">
                           <option value="1">Escoja la pregunta que desea modificar</option>
                           <option value="2">Pregunta 1</option>
                           <option value="3">Pregunta 2</option>
                           <option value="4">Pregunta 3</option>
                           <option value="5">Pregunta 4</option>
                       </select>
                        </div>
                        <div class="form-group">
                            <input type="name" class="form-control" id="Name" placeholder="Modifica la pregunta">
                        </div>
                        <div class="form-group">
                            <select name="OS" class="form-control">
                           <option value="1">Escoja el tipo de pregunta</option>
                           <option value="2">Selección Única</option>
                           <option value="3">Selección Múltiple</option>
                           <option value="4">Caja de Comentario</option>
                           <option value="5">Escala</option>
                       </select>
                        </div>
                        <button type="submit" class="btn btn-info">Modificar Pregunta</button>
                    </form>
                </div>
                <!--Delete Instalation-->
                <div class="container center" id="showDeleteInstallation" hidden>
                    <form>
                        <div class="form-group">
                            <select name="OS" class="form-control">
                         <option value="1">Escoja la pregunta que desea eliminar</option>
                         <option value="2">Pregunta 1</option>
                         <option value="3">Pregunta 2</option>
                         <option value="4">Pregunta 3</option>
                         <option value="5">Pregunta 4</option>
                     </select>
                        </div>
                        <button type="submit" class="btn btn-info">Eliminar Pregunta</button>
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