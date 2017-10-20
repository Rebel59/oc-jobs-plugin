<?php namespace Rebel59\Jobs\Components;

use Cms\Classes\ComponentBase;
use Rebel59\Jobs\Models\Job;

class Jobs extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'rebel59.jobs::lang.components.jobList.name',
            'description' => 'rebel59.jobs::lang.components.jobList.description'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun(){
        $this->_prepareVars();
        $this->_loadAssets();
    }

    protected function _prepareVars(){
        $this->jobs = $this->page['jobs'] = $this->_loadJobs();
    }

    protected function _loadAssets(){
        $this->addCss('assets/css/jobs.joblist.css');
    }

    protected function _loadJobs()
    {
        $jobs = Job::isPublished()->get();

        return $jobs;
    }
}
