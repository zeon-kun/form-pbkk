<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class card extends Component
{
    /**
     * Create a new component instance.
     */
    /**
     * Create the component instance.
     */
    public string $username;
    public string $email;
    public string $brief;
    public string $image;
    public float $percentage;

    public function __construct(
        string $username,
        string $email,
        string $brief,
        string $image,
        float $percentage
    ) {
        $this->username = $username;
        $this->email = $email;
        $this->brief = $brief;
        $this->image = $image;
        $this->percentage = $percentage;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
