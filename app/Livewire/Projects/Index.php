<?php

namespace App\Livewire\Projects;

use App\Models\Project;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        // O método render retorna a view, e passamos os projetos aqui
        return view('livewire.projects.index', [
            'projects' => $this->projects() // Chamando a função que retorna os projetos
        ]);
    }

    #[Computed()]
    public function projects()
    {
        // A função apenas retorna os dados, não uma view
        return Project::query()->inRandomOrder()->get();
    }
}
