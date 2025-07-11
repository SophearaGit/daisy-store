<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerDashboardController extends Controller
{
    public function index()
    {
        $data = [
            'pageTitle' => 'DS | Customer Dashboard',
        ];
        return view('dashboard', $data);
    }
}
