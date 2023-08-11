<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Pagination extends Component
{
    protected $data;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.pagination', [
            'data' => $this->data,
        ]);
    }
}
