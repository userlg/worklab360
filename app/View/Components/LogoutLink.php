<?php

namespace App\View\Components;

use Illuminate\View\Component;

class LogoutLink extends Component
{
    public string $formId;

    public function __construct($formId = 'logout-form')
    {
        $this->formId = $formId;
    }

    public function render()
    {
        return view('components.logout-link');
    }
}
