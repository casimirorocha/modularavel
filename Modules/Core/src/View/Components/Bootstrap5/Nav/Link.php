<?php

namespace Modules\Core\View\Components\Bootstrap5\Nav;

use Illuminate\View\Component;
use Illuminate\View\View;

class Link extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $label = 'Nav link'
    ) {}

    /**
     * Get the view/contents that represent the component.
     */
    public function render(): View|string
    {
        return view('core::components.bootstrap5.nav.link');
    }
}
