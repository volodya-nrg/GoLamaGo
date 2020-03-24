<?php

define('EMAIL_WORK', 'test@golamago.com');

$x = parse_url(strtolower($_SERVER['REQUEST_URI']));
$aPath = explode('/', $x['path']);
define('PAGE', $aPath[count($aPath)-1]);

$protocol = stripos($_SERVER['SERVER_PROTOCOL'],'https') === true ? 'https://' : 'http://';
$url = strtolower($protocol . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']);
$aUrl = parse_url($url);
$host = $aUrl['scheme'] . "://" . $aUrl['host'] . str_replace("/" . PAGE, "", $aUrl['path']);
define('HOST', $host);

define('APP_LINK', 'https://redirect.appmetrica.yandex.com/serve/test');
define('GGL_LINK', 'https://redirect.appmetrica.yandex.com/serve/test');
define('GGL_LINK_WORKER', 'https://play.google.com/store/apps/details?id=test');