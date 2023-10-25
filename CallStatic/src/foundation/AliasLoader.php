<?php 
namespace TrueMe\Foundation;

use TrueMe\Foundation\Facade\StaticMe;

class AliasLoader 
{
    protected $aliases;

    public function load($alias)
    {
        if (!$alias || !isset($this->aliases[$alias])) return false;

        return class_alias($this->aliases[$alias], $alias);
    }

    public function prependToLoaderStack()
    {
        spl_autoload_register([$this, 'load'], true, true);
    }

    public function setAliases($values='')
    {
        $this->aliases = $values;

        return $this;
    }
}