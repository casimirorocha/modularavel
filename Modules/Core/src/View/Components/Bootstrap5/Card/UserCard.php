<?php

namespace Modules\Core\View\Components\Bootstrap5\Card;

use App\Models\User;
use Illuminate\View\Component;
use Illuminate\View\View;

class UserCard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $user)
    {
        //
    }

    /**
     * Get the view/contents that represent the component.
     */
    public function render(): View|string
    {
        return view('core::components.bootstrap5.user-card');
    }
}
