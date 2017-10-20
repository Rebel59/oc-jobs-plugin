<?php namespace Rebel59\Jobs\Models;

use Model;
use Carbon\Carbon;

/**
 * Job Model
 */
class Job extends Model
{
    use \October\Rain\Database\Traits\Sortable;
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'rebel59_jobs_jobs';

    public $rules = [
        'title' => 'required',
        'function' => 'required',
        'description' => 'required',
        'button_text' => 'required',
        'button_url' => 'required'
    ];

    public function scopeIsPublished($query)
    {
        return $query
            ->whereNotNull('published')
            ->where('published', true)
            ->whereNotNull('published_at')
            ->where('published_at', '<', Carbon::now())
            ;
    }

}