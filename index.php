<? include 'inc/header.php'?>
<div class="container" style="margin-top: 100px;">
    <div class="jumbotron">
        <button class="btn btn-lg btn-primary center-block" onclick="jQuery('#uSlider_new_slider_dg').modal('show')">Внедрить PLM</button>
    </div>

    <div class="modal fade" id="uSlider_new_slider_dg" tabindex="-1" role="dialog" aria-labelledby="uSlider_new_slider_dgLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="uSlider_new_slider_dgLabel">Внедряю!</h4>
                </div>
                <div class="modal-body">
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                            <span class="sr-only">45% Complete</span>
                        </div>
                    </div>
                    <p>Внедряю PLM. Пожалуйста подождите<br>Если вы закроете это окно, то PLM не будет внедрен!</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Отменить внедрение</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <p><b>Твой IP:</b> <?=$_SERVER['REMOTE_ADDR']?></p>
    </div>
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
<script src="js/bootstrap/js/bootstrap.js"></script>


<? include 'inc/index/dialogs.php'?>


<script src="js/index.js"></script>
<? include 'inc/footer.php'?>