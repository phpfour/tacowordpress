<?php
namespace Taco;

class Loader
{
    public static function init()
    {
        add_action('init', '\Taco\Post\Loader::loadAll');
        add_action('init', '\Taco\Post\Loader::registerTaxonomies');
        add_action('init', '\Taco\Term\Loader::loadAll');
        add_action('shutdown', '\Taco\Frontend\Loader::addToHTML');
        return true;
    }
}
