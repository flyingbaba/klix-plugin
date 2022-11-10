<?php namespace Max\Klix;

use Backend;
use System\Classes\PluginBase;

/**
 * Klix Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Klix',
            'description' => 'No description provided yet...',
            'author'      => 'Max',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Max\Klix\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'max.klix.some_permission' => [
                'tab' => 'Klix',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'klix' => [
                'label'       => 'Klix',
                'url'         => Backend::url('max/klix/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['max.klix.*'],
                'order'       => 500,
            ],
        ];
    }
}
