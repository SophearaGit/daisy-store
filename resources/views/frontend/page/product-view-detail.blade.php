@extends('frontend.layout.page-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Page Title Here')
@section('content')
    <div class="container mt-5 p-5 rounded shadow-lg">
        <div class="row">
            <div class="col-md-6 justify-content-center ">
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/frontend/assets/img/Skin-care/skin1004 30ml.webp" class="d-block w-100"
                                alt="skin100430ml">
                        </div>
                        <div class="carousel-item">
                            <img src="/frontend/assets/img/Skin-care/skin1004 50ml.webp " class="d-block w-100"
                                alt="skin100450ml">
                        </div>
                        <div class="carousel-item">
                            <img src="/frontend/assets/img/Skin-care/skin1004 100ml.webp" class="d-block w-100"
                                alt="skin1004100ml">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-md-6">
                <h2> SKIN 1004 Tone Brightening Capsule Ampoule</h2>
                <small>Gentle Dark spot Correcting Ampoule</small>
                <hr>
                <b>What It Is:</b>
                <p>An ideal daily-use ampoule with 4% Niacinamide, 2% Tranexamic Acid, and encapsulatMadewhite™ for gentle
                    and effective dark spot correction.</p>
                <b>Product Benefits:</b>
                <p>Calming, Spot Correcting, Dullness</p>
                <b>Skin Type:</b>
                <p>Normal, Sensitive, Combination</p>
                <b>Key Ingredients: </b><br>
                <p>Centella Asiatica Extract, Niacinamide, Tranexamic Acid, 3-O-Ethyl Ascorbic AciMadecassoside</p>
                <hr>
                <b>Capacity:</b> <br>

                <button type="button" class="btn btn-primary">30ml</button>
                <button type="button" class="btn btn-secondary">50ml</button>
                <button type="button" class="btn btn-success">100ml</button>


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
