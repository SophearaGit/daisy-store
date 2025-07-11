<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $data = [
            'pageTitle' => 'DS | Home',
        ];
        return view('frontend.page.index', $data);
    }
    // aboutUs
    public function aboutUs()
    {
        $data = [
            'pageTitle' => 'DS | About Us',
        ];
        return view('frontend.page.about-us', $data);
    }
    // productDetail
    public function productDetail()
    {
        $data = [
            'pageTitle' => 'DS | Product Detail',
        ];
        return view('frontend.page.product-view-detail', $data);
    }
}
