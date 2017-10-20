<?php

return [
    'plugin' => [
      'name' => 'Jobs',
      'description' => 'Showcase vacancies and job openings'
    ],
    'models' => [
        'job' => [
            'title' => 'Title',
            'function' => 'Function',
            'description' => 'Description',
            'published' => 'Published',
            'published_at' => 'Published at',
            'cover' => 'Cover',
            'avatar' => 'Profile Image',
            'button_text' => 'Button Text',
            'button_url' => 'Button URL'
        ]
    ],
    'components' => [
        'jobList' => [
            'name' => 'Job List',
            'description' => 'Lists all jobs openings.'
        ]
    ],
    'forms' => [
        'new_job' => 'Create New Job',
        'back_to_overview' => 'Back to overview',
        'delete_selected' => 'Delete Selected',
        'delete_confirmation' => 'Are you sure you want to delete the selected Jobs?',
        'reorder' => 'Reorder Jobs',
    ]
];