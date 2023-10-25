<?php 
use TrueMe\Foundation\AliasLoader;

$alias = new AliasLoader;

$app['config'] = [
    'aliases' => require __DIR__.'/../config/alias.php',
];

$alias->setAliases($app['config']['aliases'])->prependToLoaderStack();

return $app;
