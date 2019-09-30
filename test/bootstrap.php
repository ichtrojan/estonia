<?php
require __DIR__  . '/../src/SplClassLoader.php';

$oClassLoader = new \SplClassLoader('COG', __DIR__ . '/../src');
$oClassLoader->register();
