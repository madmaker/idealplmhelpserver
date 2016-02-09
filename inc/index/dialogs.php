<div class="modal fade" id="dir2bat_util_dg" tabindex="-1" role="dialog" aria-labelledby="dir2bat_util_dgLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="dir2bat_util_dgLabel">Конвертер вывода dir в bat</h4>
            </div>
            <div class="modal-body">
                <p class="text-info">Эта утилита позволяет вывод утилиты dir преобразовать в bat-файл, который создаст нужные пустые файлы</p>
                <h3>Формат загружаемых данных (лишние данные удаляйте сами):</h3>
                <code>
                    12.03.2014  07:24           176я640 000015__se__0fa13eg5bxlko.asm<br>
                    11.03.2014  15:05           176я640 000015__se__erl0f2o5bwc9u.asm<br>
                    11.03.2014  12:23           176я640 000015__se__hod0qjs5bw4rn.asm<br>
                    11.03.2014  12:23           609я280 000016__se__aqx0qjs5bw4rp.dft
                </code>
                <div class="form-group">
                    <label>Вставьте сюда вывод утилиты dir</label>
                    <p class="help-block">Лишние данные почистите сами. Только даты и список файлов. Папки утилита не понимает.</p>
                    <textarea class="form-control" id="dir2bat_util_textarea"></textarea>
                    <div id="dir2bat_util_output"></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary" onclick="index_page.util_dir2bat_exec()">Обработать</button>
            </div>
        </div>
    </div>
</div>