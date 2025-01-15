<?php

namespace Modules\Auth\Http\Controllers;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        return view('auth::dashboard', [
            'title' => __('Dashboard'),
        ]);
    }
}
