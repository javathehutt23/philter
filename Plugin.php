<?php namespace Whitecliffe\Philter;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Whitecliffe\Philter\Components\RecentImages' => 'RecentImages',
            'Whitecliffe\Philter\Components\UserImages' => 'UserImages',
            'Whitecliffe\Philter\Components\AddImage' => 'AddImage',
            'Whitecliffe\Philter\Components\DeleteImage' => 'DeleteImage'
        ];
    }

    public function registerSettings()
    {
    }
}