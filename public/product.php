<?php

require_once __DIR__ . '/../protected/autoload.php';

$controller = new \Controllers\ProductController();
$controller->action('One', [$_GET['id']]);
