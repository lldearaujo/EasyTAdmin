<?php 
if (isset($_GET['rele'])&&$_GET['rele']!=''){
    exec("sudo gpio -g mode 16 out"); // Iniciar o GPIO07 = pino 26
    if ($_GET['rele']=='on'){
        exec("sudo gpio -g write 16 1"); // Acender LED
    }else{
        exec("sudo gpio -g write 16 0"); // Apagar LED
    }
}
?>