<?php namespace Rebel59\Jobs\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Rebel59\Jobs\Models\Job;
use October\Rain\Support\Facades\Flash;

/**
 * Jobs Back-end Controller
 */
class Jobs extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
        'Backend.Behaviors.ReorderController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Rebel59.Jobs', 'jobs', 'jobs');
    }

    public function index_onDelete()
    {
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {
            foreach ($checkedIds as $jobId) {
                if ((!$job = Job::find($jobId))) {
                    continue;
                }
                $job->delete();
            }
            Flash::success('Successfully deleted those jobs.');
        }
        return $this->listRefresh();
    }
}
