<?php

namespace Modules\Core\View\Components\Bootstrap5;

use Illuminate\View\Component;
use Illuminate\View\View;

class Icon extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public ?string $name = null, public ?string $brand = null)
    {
        //
    }

    /**
     * Get the view/contents that represent the component.
     */
    public function render(): View|string
    {
        return view('core::components.bootstrap5.icon');
    }
}
