<?php
namespace Webinar;

require_once __DIR__ . '/vendor/autoload.php';

$main = new Main;


$mustache = new \Mustache_Engine(
    [
        'loader' => new \Mustache_Loader_FilesystemLoader(dirname(__FILE__) . '/views')
    ]
);
$tpl = $mustache->loadTemplate('index');
echo $tpl->render(['cmsList' => $main->cmsList()]);
