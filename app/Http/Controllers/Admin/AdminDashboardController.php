<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    // getAdminDashboard
    public function getAdminDashboard()
    {
        $data = [
            'pageTitle' => 'DS | Admin Dashboard',
        ];
        return view('backend.page.dashboard', $data);
    }
}
