<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SellerDashboardController extends Controller
{
    public function index()
    {
        $data = [
            'pageTitle' => 'DS | Seller Dashboard',
        ];
        return view('frontend.page.seller.dashboard', $data);
    }
}
