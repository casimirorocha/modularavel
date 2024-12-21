<?php

namespace Modules\Core\View\Components\Bootstrap5;

use Illuminate\View\Component;
use Illuminate\View\View;

class Btn extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $type = 'submit',
        public ?string $label = 'Submit',
        public ?string $color = 'primary',
        public ?string $size = 'lg',
        public ?string $icon = null,
        public ?string $iconRight = null,
        public ?bool $fullWidth = false,
    ) {}

    /**
     * Get the view/contents that represent the component.
     */
    public function render(): View|string
    {
        return view('core::components.bootstrap5.btn');
    }
}
