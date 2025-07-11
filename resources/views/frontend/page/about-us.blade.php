@extends('frontend.layout.page-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Page Title Here')
@push('stylesheets')
    <style>
        /* kleng about page */
        .main {
            display: flex;
            justify-content: center;
        }

        .card {
            width: 700px;
            padding: 50px;
            font-size: 20px;
            background-color: #f0bde5;
        }

        .icon-link a {
            color: #040406;
            font-size: 30px;
            transition: transform 0.3s ease-in-out;
        }

        .icon-link a:hover {
            color: #0e0ba1;
            transform: scale(1.1);
        }

        .title {
            color: blue;
        }
    </style>
@endpush
@section('content')
    <div class="container">
        <h1 class="text-center py-5 fw-bold ">About Us</h1>
        <div class="main" data-aos="flip-left">
            <div class="card shadow-lg">
                <p>Our Daisy Store have a lot of products of skincare and cosmetic that as required tocustomer need. We have
                    all product fit for all gender and generation .</p>
                <h2 class=" title py-3"><i class="fa-solid fa-location-dot"></i> Location</h2>
                <p>#6 Street 93, Sangkat Toul Sangke, Khan Russey Keo, Phnom Penh</p>
                <h2 class=" title py-3"> Follow Us</h2>
                <div class="icon-link">
                    <a href="#"><i class="fa-brands fa-facebook me-2"></i></a>
                    <a href="#"><i class="fa-brands fa-tiktok me-2"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!--delivery start-->
    <div class="delavery" data-aos="zoom-in">
        <div class="icon text-center">
            <i class="fa-solid fa-truck-fast"></i>
            <h2>Delivery</h2>
            <small>(25 Province/City)</small>
        </div>
        <div class="icon text-center">
            <i class="fa-solid fa-store"></i>
            <p>
                Open 8:00AM <br />
                Close 9:00PM
            </p>
        </div>
    </div>
    <!--delivery end-->
@endsection
