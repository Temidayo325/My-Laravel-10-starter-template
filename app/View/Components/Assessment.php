<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Assessment extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $question = \App\Models\Assessment::select('parent_id', 'id', 'question', 'answer', 'identifier', 'answer_type', 'mark')->orderBy('id', 'asc')->limit(4)->get();
        $question->groupBy('parent_id');
        return view('components.assessment', [
            "questions" => $question
        ]);
    }
}
