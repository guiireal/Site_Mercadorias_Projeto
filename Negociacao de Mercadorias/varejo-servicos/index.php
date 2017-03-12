<!DOCTYPE html>
<html lang="pt">
<?php include("backend/puxarDados.php")?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bem vindo !</title>

    <link rel="apple-touch-icon" href="img/horta.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/horta.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/horta.png">

    <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

    <link rel="stylesheet" type="text/css"  href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <script type="text/javascript" src="js/modernizr.custom.js"></script>

    <link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700,100,800,900,400,200,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>

    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body>
<div id="tf-home">
    <div class="overlay">
        <div id="sticky-anchor"></div>
        <nav id="tf-menu" class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="">Pagina Inicial</a></li>
                        <li><a href="#tf-service">Sobre</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div class="container">
            <div class="content">
                <h1>A maior plataforma de compras e vendas do mundo !</h1>
                <h3>Conecte-se com a nossa Plataforma</h3>
                <br>
                <a href="login.php" class="btn btn-primary my-btn">Login</a>
            </div>
        </div>
    </div>
</div>

<div id="tf-service">
    <div class="container">

        <div class="col-md-4">
            <div class="media">
                <div class="media-left media-middle">
                    <i class="fa fa-motorcycle"></i>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">Milhares de produtos !</h4>
                    <p>Aqui voce encontra produtos dos mais variados tipos !</p>
                </div>
            </div>

        </div>

        <div class="col-md-4">

            <div class="media">
                <div class="media-left media-middle">
                    <i class="fa fa-gears"></i>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">Plataforma 100% segura</h4>
                    <p>Nossos mecanismos de seguranca e gerenciamento sao altamente seguros !</p>
                </div>
            </div>

        </div>

        <div class="col-md-4">

            <div class="media">
                <div class="media-left media-middle">
                    <i class="fa fa-heartbeat"></i>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">Praticidade e bem-estar</h4>
                    <p>Faca suas compras no conforto de sua casa !</p>
                </div>
            </div>

        </div>

    </div>
</div>

<div id="tf-portfolio">
    <div class="container">
        <div class="section-title">
            <h3>Ultimas negociacoes</h3>
            <hr>
        </div>
        <!-- Aqui entra a tabela -->
        <table border="2" align="center">
            <tr border="10">
                <th bgcolor="#d3d3d3"><h3>&nbsp;&nbsp;Produto Negociado&nbsp;&nbsp;<h3/></th>
                <th bgcolor="#d3d3d3"><h3>&nbsp;&nbsp;Preco&nbsp;&nbsp;</h3></th>
                <th bgcolor="#d3d3d3"><h3>&nbsp;&nbsp;Tipo da Negociacao&nbsp;&nbsp;<h3/></th>
            </tr>
            <?php $resultado = listarDados()?>

            <?php while ($produto = $resultado->fetch_assoc()) : ?>
                <tr>
                    <td><?php echo $produto['nome_mercadoria']?></td>
                    <td><?php echo $produto['preco_mercadoria']?></td>
                    <td><?php echo $produto['tipo_negociacao']?></td>
                </tr>
            <?php endwhile ?>
        </table>
        <!-- Aqui termina a tabela -->

    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.1.11.1.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script type="text/javascript" src="js/bootstrap.js"></script>

<!-- Javascripts
================================================== -->
<script type="text/javascript" src="js/main.js"></script>

</body>
</html>