<?php

require_once __DIR__ . '/vendor/autoload.php';

if (isset($_SERVER['PATH_INFO']) && $_SERVER['PATH_INFO'] !== "/") {

    $a = new app\controller\UrlParser();
    $data = $a->parse();

        extract($data);

}
require_once 'src/app/view/header.php';

require_once 'src/app/view/' . $view;

require_once 'src/app/view/footer.php';

?>

