<?php namespace Rebel59\Jobs;

use Backend;
use System\Classes\PluginBase;
use Illuminate\Support\Facades\Event;

/**
 * Jobs Plugin Information File
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
            'name'        => 'rebel59.jobs::lang.plugin.name',
            'description' => 'rebel59.jobs::lang.plugin.description',
            'author'      => 'Rebel59',
            'icon'        => 'icon-user-plus'
        ];
    }

    public function registerComponents()
    {
        return [
            'Rebel59\Jobs\Components\Jobs' => 'jobList',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return [
            'rebel59.jobs.manage_jobs' => [
                'tab' => 'Jobs',
                'label' => 'Manage Jobs'
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
        return [
            'jobs' => [
                'label'       => 'Jobs',
                'url'         => Backend::url('rebel59/jobs/jobs'),
                'icon'        => 'icon-user-plus',
                'permissions' => ['rebel59.jobs.*'],
                'order'       => 500,
            ],
        ];
    }
}
