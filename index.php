<?php 

    require_once ("app/Core.php");
    
    ob_start();

    $core = new Core();
    $core->start($_GET);

    $result = ob_get_contents();

    ob_end_clean();

    $template = file_get_contents("app/template/index.html");
    $template = str_replace("{{conteudo}}", $result, $template);
    
    echo $template;