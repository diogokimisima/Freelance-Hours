<?php

namespace App\Livewire\Project;

use App\Models\Project;
use Livewire\Component;

class Timer extends Component
{
    public Project  $project;

    public function render()
    {
        $diff = now()->diff($this->project->ends_at);
        
        return view('livewire.project.timer', [
            'days' =>  $diff->d,
            'hours' => $diff->h,
            'minutes' => $diff->i,
            'seconds' => $diff->s,
        ]);
    }

    public function timer() {
        
    }
}
