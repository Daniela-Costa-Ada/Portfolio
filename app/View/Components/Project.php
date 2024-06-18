<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Project as ProjectModel;

class Project extends Component
{
    public $projectId;
    public $projects;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->projects = ProjectModel::all();
    }
    

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.project', [
            'projects' => $this->projects,
        ]);
    }
    
}
