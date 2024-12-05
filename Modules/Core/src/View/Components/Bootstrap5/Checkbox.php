<?php

namespace Modules\Core\View\Components\Bootstrap5;
use Illuminate\View\Component;
use Illuminate\View\View;

class Checkbox extends Component
{
    public function __construct(
        public ?string $name,
        public ?string $role,
        public ?string $type = 'checkbox',
        public ?string $label = 'My checkbox',
        public ?bool $value = false,
        public ?bool $checked = false) {}

    /**
     * Get the view/contents that represent the component.
     */
    public function render(): View|string
    {
        return view('core::components.bootstrap5.checkbox', [
            'id' => uuid_create(),
        ]);
    }
}
