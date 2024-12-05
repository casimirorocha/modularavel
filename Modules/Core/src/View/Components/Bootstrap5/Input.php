<?php

namespace Modules\Core\View\Components\Bootstrap5;

use Illuminate\View\Component;
use Illuminate\View\View;

class Input extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $icon,
        public ?string $name,
        public ?string $label = 'My input',
        public ?string $type = 'text',
        public ?string $placeholder = '',
        public mixed $value = null,
        public ?bool $required = true,
        public ?bool $disabled = false,
        public ?bool $readonly = false,
        public ?bool $multiple = false,
    ) {}

    /**
     * Get the view/contents that represent the component.
     */
    public function render(): View|string
    {
        return view('core::components.bootstrap5.input', [
            'id' => $this->name,
        ]);
    }
}
