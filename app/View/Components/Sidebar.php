<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Sidebar extends Component
{
    public $title;
    public $info;
    public $name;

    /**
     * Create a new component instance.
     *
     * @param $title
     * @param $info
     */
    public function __construct($title, $info)
    {
        $this->title = $title;
        $this->info = $info;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.sidebar');
    }

    /**
     * Creates list of items
     */
    public function list(){
        return [
            'Hello',
            'Holla',
            'Hey',
            'Alo'
        ];
    }
}
