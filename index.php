<?php

define('__APP_ROOT__', __DIR__);

require_once __APP_ROOT__ . '/vendor/autoload.php';

use Fagoc\Core\App;

App::start();

?>
<!DOCTYPE html>
<html>
    <?php
    include __APP_ROOT__ . '/src/view/head.php';
    ?>
    <body>
        <?php
        include __APP_ROOT__ . '/src/view/nav.php';
        ?>
        <div class="container">
            <?php
                App::run();
            ?>
        </div>
    </body>
</html>
