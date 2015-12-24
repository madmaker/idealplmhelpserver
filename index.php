<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Справка IDEAL PLM</title>

    <!-- Bootstrap -->
    <link href="js/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<a target="_blank" href="https://github.com/madmaker/idealplmhelpserver"><img style="position: absolute; top: 0; left: 0; border: 0;z-index: 2000000" src="https://camo.githubusercontent.com/121cd7cbdc3e4855075ea8b558508b91ac463ac2/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f6c6566745f677265656e5f3030373230302e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_left_green_007200.png"></a>

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://10.10.14.16">IDEAL PLM</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a target="_blank" href="https://solutions.industrysoftware.automation.siemens.com/">GTAC</a></li>
                <li><a target="_blank" href="https://siemensplmlearningcenter.sabacloud.com/Saba/Web_spf/PRODTNT130/common/learningeventdetail/curra000000000002260">Learning Siemens</a></li>
                <li><a target="_blank" href="http://ideal-plm.ru/uKnowbase/records">База знаний</a></li>
                <li><a target="_blank" href="http://ideal-plm.ru/uSupport/requests">Техподдержка</a></li>
                <li><a target="_blank" href="https://10.10.14.134:9443/vsphere-client/">vSphere</a> </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container" style="margin-top: 100px;">

    <div class="row">
        <?include 'inc/index/row1.php'?>
    </div>

    <div class="row"><hr></div>

    <div class="row">
        <?include 'inc/index/row2.php'?>
    </div>



    <blockquote style="display: table" class="text-muted">
        <img src="images/Paris_Tuileries_Garden_Facepalm_statue.jpg" class="img-responsive" style="width:30%; float: right">
        <h4>Есть что добавить?</h4>
        <p><small>Пиши на n.lapshin@ideal-plm.ru</small></p>
        <h4>Можешь сделать лучше?!?!?!?!</h4>
        <p><small>Сверху есть кнопка на GitHub - дерзай!</small></p>
    </blockquote>

</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap/js/bootstrap.min.js"></script>


<? include 'inc/index/dialogs.php'?>


<script src="js/index.js"></script>
</body>
</html>