<?php

namespace Modules\Core\View\Components\Bootstrap5\Nav;

use Illuminate\View\Component;
use Illuminate\View\View;

class Item extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view/contents that represent the component.
     */
    public function render(): View|string
    {
        return view('core::components.bootstrap5.nav.item');
    }
}
