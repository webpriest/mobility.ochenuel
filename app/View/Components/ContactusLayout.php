<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ContactusLayout extends Component
{
    public $title;
    
    /**
     * Set page title
     *
     * @param  mixed $title
     * @return void
     */
    public function __construct($title = null)
    {
        $this->title = $title;
    }

    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('layouts.contactus');
    }
}
