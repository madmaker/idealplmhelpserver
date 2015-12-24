<?php
class dir2bat {
    private $uCore,$txt;
    private function check_data() {
        if(!isset($_POST['txt'])) die('Ошибка. Не передан текст dir');
        $this->txt=$_POST['txt'];
    }
    private function dir2bat() {
        $droped_folders_num=0;
        $txt_ar=explode("\n",$this->txt);
        echo '<h3>Ваш .bat</h3>';
        echo '<textarea class="form-control">';
        for($i=0;$i<count($txt_ar);$i++) {
            $txt_ar[$i]=trim($txt_ar[$i]);
            if(strpos($txt_ar[$i],'<DIR>')) {
                $txt_ar[$i]='';
                $droped_folders_num++;
            }
            if(!strlen($txt_ar[$i])) continue;
            $txt_ar[$i]=eregi_replace('/^\d{2}\.\d{2}\.\d{4}\s*\d{2}:\d{2}\s*[\wа-я]+\s*/i','',$txt_ar[$i]);
            echo 'fsutil file createnew '.
            $txt_ar[$i].
                ' 1'.
                "\n";
        }
        echo '</textarea>';
        echo '<p>строк: '.count($txt_ar).'</p>';
        echo '<p>Папок выкинул: '.$droped_folders_num.'</p>';
    }
    function __construct (&$uCore) {
        $this->uCore=&$uCore;
        $this->check_data();

        $this->dir2bat();
    }
}
$dir2bat=new dir2bat($this);