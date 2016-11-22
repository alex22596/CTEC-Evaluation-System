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
                                <li class="active"><a href="#">Enviar Cuestionario</a></li>
                                <li class="active"><a href="../php/grafico.php">Generar Reporte</a></li>
                                <li class="active"><a href="../php/login.php">Cerrar Sesión</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
        <!--/#header-->
        <section>
            <div>
                 <script src="../js/Chart.js"></script>
                    <div id="canvas-holder">
                    <canvas id="chart-area" width="300" height="300"></canvas>
                    <canvas id="chart-area2" width="300" height="300"></canvas>
                    <canvas id="chart-area3" width="600" height="300"></canvas>
                    <canvas id="chart-area4" width="600" height="300"></canvas>
                    </div>
                    <script>
                    var pieData = [{value: 50,color:"#0b82e7",highlight: "#0c62ab",label: "Auditorio"},
                                    {
                                        value: 15,
                                        color: "#eb5d82",
                                        highlight: "#b74865",
                                        label: "Jacaranda"
                                    },
                                    {
                                        value: 15,
                                        color: "#5ae85a",
                                        highlight: "#42a642",
                                        label: "Bromelia"
                                    },
                                    {
                                        value: 20,
                                        color: "#e965db",
                                        highlight: "#a6429b",
                                        label: "Tecno-Aula1"
                                    }
                                ];

                    var ctx = document.getElementById("chart-area").getContext("2d");
                    var ctx2 = document.getElementById("chart-area2").getContext("2d");
                    var ctx3 = document.getElementById("chart-area3").getContext("2d");
                    var ctx4 = document.getElementById("chart-area4").getContext("2d");
                    window.myPie = new Chart(ctx).Pie(pieData);	
                </script>            
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
<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Ejemplos de gr&#225;ficos usando Chart.js</title>
<meta name ="author" content ="Norfi Carrodeguas">
</head>
<body>  	  

</body>
</html>
