@extends('frontend.layout.page-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Page Title Here')
@section('content')
    <!--home start-->
    <div id="home" class="container" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
        <div class="home">
            <div class="about text-center mt-5 py-4">
                <h1>WELCOME To <br />Daisy Store</h1>
            </div>
        </div>
    </div>

    <!-- Carousel srart -->
    <div class="container mt-5">
        <div class="carousel">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1">
                    </button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2">
                    </button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3">
                    </button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/frontend/assets/img/Carousel/Carousel 1.webp" class="d-block w-100" alt="carousel1" />
                    </div>
                    <div class="carousel-item">
                        <img src="/frontend/assets/img/Carousel/Carousel 2.webp" class="d-block w-100" alt="carousel2" />
                    </div>
                    <div class="carousel-item">
                        <img src="/frontend/assets/img/Carousel/Carousel 3.webp" class="d-block w-100" alt="carousel3" />
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <!-- Carousel end-->

    <!--store start-->
    <div class="container mt-5">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm shadow-lg rounded d-flex justify-content-center py-3"
                data-aos="flip-left">
                <div class="card" style="width: 18rem">
                    <img src="/frontend/assets/img/store/Store 1.webp" class="card-img-top" alt="store1"
                        style="height: 400px" />
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm shadow-lg rounded d-flex justify-content-center py-3"
                data-aos="flip-left">
                <div class="card" style="width: 18rem">
                    <img src="/frontend/assets/img/store/store 2.jpg" class="card-img-top" alt="store2"
                        style="height: 400px" />
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm shadow-lg rounded d-flex justify-content-center py-3"
                data-aos="flip-left">
                <div class="card" style="width: 18rem">
                    <img src="/frontend/assets/img/store/store 3.jpg" class="card-img-top" alt="store3"
                        style="height: 400px" />
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm shadow-lg rounded d-flex justify-content-center py-3"
                data-aos="flip-left">
                <div class="card" style="width: 18rem">
                    <img src="/frontend/assets/img/store/store 4.jpg" class="card-img-top" alt="store4"
                        style="height: 400px" />
                </div>
            </div>
        </div>
    </div>
    <!--store end-->

    <!--Skin care srart-->
    <section id="skin-care">
        <h1 class="display-5 text-center text-dark fw-bold py-5">Skin Care</h1>
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm shadow-lg rounded d-flex justify-content-center py-3"
                    data-aos="zoom-in">
                    <div class="card" style="width: 18rem">
                        <img src="/frontend/assets/img/Skin-care/Cetaphil Gentle Skin Cleanser .avif" class="card-img-top"
                            alt="Cetaphil" />
                        <div class="card-body text-center">
                            <h4 class="card-title">Cetaphil</h4>
                            <small>Gentle Skin Cleanser</small> <br />
                            <span class="text-success me-2">$15.00</span>
                        </div>
                        <div class="d-flex border-top border-bottom">
                            <small class="w-50 text-center border-end py-2">
                                <a href="{{ route('product_detail') }}" class="text-body text-decoration-none">
                                    <i class="fa-solid fa-eye"></i> View Details
                                </a>
                            </small>
                            <small class="w-50 text-center border-end py-2">
                                <a href="" class="text-body text-decoration-none add-to-cart">
                                    <i class="fa-solid fa-cart-shopping"></i> Add to card
                                </a>
                            </small>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm shadow-lg rounded d-flex justify-content-center py-3"
                    data-aos="zoom-in">
                    <div class="card" style="width: 18rem">
                        <img src="/frontend/assets/img/Skin-care/Anua Heartleaf 77 Soothing Toner.jpg"
                            class="card-img-top" alt="Anua" />
                        <div class="card-body text-center">
                            <h4 class="card-title">Anua</h4>
                            <small>Heartleaf 77 Soothing Toner</small> <br />
                            <span class="text-success me-2">$19.00</span>
                        </div>
                        <div class="d-flex border-top border-bottom">
                            <small class="w-50 text-center border-end py-2">
                                <a href="{{ route('product_detail') }}" class="text-body text-decoration-none">
                                    <i class="fa-solid fa-eye"></i> View Details
                                </a>
                            </small>
                            <small class="w-50 text-center border-end py-2">
                                <a href="" class="text-body text-decoration-none add-to-cart">
                                    <i class="fa-solid fa-cart-shopping"></i> Add to card
                                </a>
                            </small>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm shadow-lg rounded d-flex justify-content-center py-3"
                    data-aos="zoom-in">
                    <div class="card" style="width: 18rem">
                        <img src="/frontend/assets/img/Skin-care/skin1004-ampoule-serum-brightening-capsule.webp"
                            class="card-img-top" alt="Skin1004" />
                        <div class="card-body text-center">
                            <h4 class="card-title">Skin1004</h4>
                            <small>Ampoule serum brightening capsule</small>
                            <span class="text-success me-2">$15.00</span>
                        </div>
                        <div class="d-flex border-top border-bottom">
                            <small class="w-50 text-center border-end py-2">
                                <a href="{{ route('product_detail') }}" class="text-body text-decoration-none">
                                    <i class="fa-solid fa-eye"></i> View Details
                                </a>
                            </small>
                            <small class="w-50 text-center border-end py-2">
                                <a href="" class="text-body text-decoration-none add-to-cart">
                                    <i class="fa-solid fa-cart-shopping"></i> Add to card
                                </a>
                            </small>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm shadow-lg rounded d-flex justify-content-center py-3"
                    data-aos="zoom-in">
                    <div class="card" style="width: 18rem">
                        <img src="/frontend/assets/img/Skin-care/Tocobo Bio Watery Sun Cream.webp" class="card-img-top"
                            alt="Tocobo" />
                        <div class="card-body text-center">
                            <h4 class="card-title">Tocobo</h4>
                            <small>Bio Watery Sun Cream</small> <br />
                            <span class="text-success me-2">$19.00</span>
                        </div>
                        <div class="d-flex border-top border-bottom">
                            <small class="w-50 text-center border-end py-2">
                                <a href="{{ route('product_detail') }}" class="text-body text-decoration-none">
                                    <i class="fa-solid fa-eye"></i> View Details
                                </a>
                            </small>
                            <small class="w-50 text-center border-end py-2">
                                <a href="" class="text-body text-decoration-none add-to-cart">
                                    <i class="fa-solid fa-cart-shopping"></i> Add to card
                                </a>
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm shadow-lg rounded d-flex justify-content-center py-3"
                    data-aos="zoom-in">
                    <div class="card" style="width: 18rem">
                        <img src="/frontend/assets/img/Skin-care/COSRX.webp" class="card-img-top" alt="Cosrx" />
                        <div class="card-body text-center">
                            <h4 class="card-title">COSRX</h4>
                            <small>Cosrx Aloe Soothing Sun Cream</small>
                            <span class="text-success me-2">$12.00</span>
                        </div>
                        <div class="d-flex border-top border-bottom">
                            <small class="w-50 text-center border-end py-2">
                                <a href="{{ route('product_detail') }}" class="text-body text-decoration-none">
                                    <i class="fa-solid fa-eye"></i> View Details
                                </a>
                            </small>
                            <small class="w-50 text-center border-end py-2">
                                <a href="" class="text-body text-decoration-none add-to-cart">
                                    <i class="fa-solid fa-cart-shopping"></i> Add to card
                                </a>
                            </small>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm shadow-lg rounded d-flex justify-content-center py-3"
                    data-aos="zoom-in">
                    <div class="card" style="width: 18rem">
                        <img src="/frontend/assets/img/Skin-care/ISNTREE.webp" class="card-img-top" alt="Isntree" />
                        <div class="card-body text-center">
                            <h4 class="card-title">ISNTREE</h4>
                            <small>Isntree Hyaluronic Acid Watery Sun Gel </small> <br />
                            <span class="text-success me-2">$9.00</span>
                        </div>
                        <div class="d-flex border-top border-bottom">
                            <small class="w-50 text-center border-end py-2">
                                <a href="{{ route('product_detail') }}" class="text-body text-decoration-none">
                                    <i class="fa-solid fa-eye"></i> View Details
                                </a>
                            </small>
                            <small class="w-50 text-center border-end py-2">
                                <a href="" class="text-body text-decoration-none add-to-cart">
                                    <i class="fa-solid fa-cart-shopping"></i> Add to card
                                </a>
                            </small>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm shadow-lg rounded d-flex justify-content-center py-3"
                    data-aos="zoom-in">
                    <div class="card" style="width: 18rem">
                        <img src="/frontend/assets/img/Skin-care/Laneige Lip Sleeping Mask.webp" class="card-img-top"
                            alt="Laneige" />
                        <div class="card-body text-center">
                            <h4 class="card-title">LANEIGE</h4>
                            <small>Lip Sleeping Mask</small> <br />
                            <span class="text-success me-2">$12.00</span>
                        </div>
                        <div class="d-flex border-top border-bottom">
                            <small class="w-50 text-center border-end py-2">
                                <a href="{{ route('product_detail') }}" class="text-body text-decoration-none">
                                    <i class="fa-solid fa-eye"></i> View Details
                                </a>
                            </small>
                            <small class="w-50 text-center border-end py-2">
                                <a href="" class="text-body text-decoration-none add-to-cart">
                                    <i class="fa-solid fa-cart-shopping"></i> Add to card
                                </a>
                            </small>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm shadow-lg rounded d-flex justify-content-center py-3"
                    data-aos="zoom-in">
                    <div class="card" style="width: 18rem">
                        <img src="/frontend/assets/img/Skin-care/cotton-candy-shea-sugar-scrub-Tree Hut Shea.webp"
                            class="card-img-top" alt="tree-hut" />
                        <div class="card-body text-center">
                            <h4 class="card-title">Tree Hut</h4>
                            <small>Cotton candy shea sugar scrub</small>
                            <span class="text-success me-2">$18.00</span>
                        </div>
                        <div class="d-flex border-top border-bottom">
                            <small class="w-50 text-center border-end py-2">
                                <a href="{{ route('product_detail') }}" class="text-body text-decoration-none">
                                    <i class="fa-solid fa-eye"></i> View Details
                                </a>
                            </small>
                            <small class="w-50 text-center border-end py-2">
                                <a href="" class="text-body text-decoration-none add-to-cart">
                                    <i class="fa-solid fa-cart-shopping"></i> Add to card
                                </a>
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Skin care end-->

    <!--make up start-->
    <section id="make-up">
        <h1 class="display-5 text-center text-dark fw-bold py-5">Make Up</h1>
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm shadow-lg rounded d-flex justify-content-center py-3"
                    data-aos="zoom-in">
                    <div class="card" style="width: 18rem">
                        <img src="/frontend/assets/img/Make-up/3CE Stylenanda Blur Water Tint .jpg" class="card-img-top"
                            alt="3ce" />
                        <div class="card-body text-center">
                            <h4 class="card-title">3CE</h4>
                            <small>Stylenanda Blur Water Tint</small> <br />
                            <span class="text-success me-2">$12.00</span>
                        </div>
                        <div class="d-flex border-top border-bottom">
                            <small class="w-50 text-center border-end py-2">
                                <a href="{{ route('product_detail') }}" class="text-body text-decoration-none">
                                    <i class="fa-solid fa-eye"></i> View Details
                                </a>
                            </small>
                            <small class="w-50 text-center border-end py-2">
                                <a href="" class="text-body text-decoration-none add-to-cart">
                                    <i class="fa-solid fa-cart-shopping"></i> Add to card
                                </a>
                            </small>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm shadow-lg rounded d-flex justify-content-center py-3"
                    data-aos="zoom-in">
                    <div class="card" style="width: 18rem">
                        <img src="/frontend/assets/img/Make-up/Eyeshadow Palette.jpg" class="card-img-top"
                            alt="3ce" />
                        <div class="card-body text-center">
                            <h4 class="card-title">3CE</h4>
                            <small>Eyeshadow Palette</small> <br />
                            <span class="text-success me-2">$46.00</span>
                        </div>
                        <div class="d-flex border-top border-bottom">
                            <small class="w-50 text-center border-end py-2">
                                <a href="{{ route('product_detail') }}" class="text-body text-decoration-none">
                                    <i class="fa-solid fa-eye"></i> View Details
                                </a>
                            </small>
                            <small class="w-50 text-center border-end py-2">
                                <a href="" class="text-body text-decoration-none add-to-cart">
                                    <i class="fa-solid fa-cart-shopping"></i> Add to card
                                </a>
                            </small>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm shadow-lg rounded d-flex justify-content-center py-3"
                    data-aos="zoom-in">
                    <div class="card" style="width: 18rem">
                        <img src="/frontend/assets/img/Make-up/MAYBELLINE Hypercurl Mascara Black.avif"
                            class="card-img-top" alt="MAYBELLINE" />
                        <div class="card-body text-center">
                            <h4 class="card-title">MAYBELLINE</h4>
                            <small>Hypercurl Mascara Black</small> <br />
                            <span class="text-success me-2">$15.00</span>
                        </div>
                        <div class="d-flex border-top border-bottom">
                            <small class="w-50 text-center border-end py-2">
                                <a href="{{ route('product_detail') }}" class="text-body text-decoration-none">
                                    <i class="fa-solid fa-eye"></i> View Details
                                </a>
                            </small>
                            <small class="w-50 text-center border-end py-2">
                                <a href="" class="text-body text-decoration-none add-to-cart">
                                    <i class="fa-solid fa-cart-shopping"></i> Add to card
                                </a>
                            </small>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm shadow-lg rounded d-flex justify-content-center py-3"
                    data-aos="zoom-in">
                    <div class="card" style="width: 18rem">
                        <img src="/frontend/assets/img/Make-up/TIRITR Mask Fit Red Cushion Foundation .avif"
                            class="card-img-top" alt="TIRITR" />
                        <div class="card-body text-center">
                            <h4 class="card-title">TIRITR</h4>
                            <small>Mask Fit Red Cushion Foundation</small>
                            <span class="text-success me-2">$32.00</span>
                        </div>
                        <div class="d-flex border-top border-bottom">
                            <small class="w-50 text-center border-end py-2">
                                <a href="{{ route('product_detail') }}" class="text-body text-decoration-none">
                                    <i class="fa-solid fa-eye"></i> View Details
                                </a>
                            </small>
                            <small class="w-50 text-center border-end py-2">
                                <a href="" class="text-body text-decoration-none add-to-cart">
                                    <i class="fa-solid fa-cart-shopping"></i> Add to card
                                </a>
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm shadow-lg rounded d-flex justify-content-center py-3"
                    data-aos="zoom-in">
                    <div class="card" style="width: 18rem">
                        <img src="/frontend/assets/img/Make-up/MAYBELLINE- Concealer.webp" class="card-img-top"
                            alt="Concealer" />
                        <div class="card-body text-center">
                            <h4 class="card-title">MAYBELLINE</h4>
                            <small>Concealer</small> <br />
                            <span class="text-success me-2">$9.00</span>
                        </div>
                        <div class="d-flex border-top border-bottom">
                            <small class="w-50 text-center border-end py-2">
                                <a href="{{ route('product_detail') }}" class="text-body text-decoration-none">
                                    <i class="fa-solid fa-eye"></i> View Details
                                </a>
                            </small>
                            <small class="w-50 text-center border-end py-2">
                                <a href="" class="text-body text-decoration-none add-to-cart">
                                    <i class="fa-solid fa-cart-shopping"></i> Add to card
                                </a>
                            </small>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm shadow-lg rounded d-flex justify-content-center py-3"
                    data-aos="zoom-in">
                    <div class="card" style="width: 18rem">
                        <img src="/frontend/assets/img/Make-up/Christian Dior- Addict Shine Lipstick.jpg"
                            class="card-img-top" alt="Dior" />
                        <div class="card-body text-center">
                            <h4 class="card-title">Christian Dior</h4>
                            <small>Addict Shine Lipstick</small> <br />
                            <span class="text-success me-2">$49.00</span>
                        </div>
                        <div class="d-flex border-top border-bottom">
                            <small class="w-50 text-center border-end py-2">
                                <a href="{{ route('product_detail') }}" class="text-body text-decoration-none">
                                    <i class="fa-solid fa-eye"></i> View Details
                                </a>
                            </small>
                            <small class="w-50 text-center border-end py-2">
                                <a href="" class="text-body text-decoration-none add-to-cart">
                                    <i class="fa-solid fa-cart-shopping"></i> Add to card
                                </a>
                            </small>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm shadow-lg rounded d-flex justify-content-center py-3"
                    data-aos="zoom-in">
                    <div class="card" style="width: 18rem">
                        <img src="/frontend/assets/img/Make-up/Eyebrow penceil.jpg" class="card-img-top"
                            alt="Romand" />
                        <div class="card-body text-center">
                            <h4 class="card-title">Rom&nd</h4>
                            <small>Eyebrow pencil</small> <br />
                            <span class="text-success me-2">$16.00</span>
                        </div>
                        <div class="d-flex border-top border-bottom">
                            <small class="w-50 text-center border-end py-2">
                                <a href="" class="text-body text-decoration-none">
                                    <i class="fa-solid fa-eye"></i> View Details
                                </a>
                            </small>
                            <small class="w-50 text-center border-end py-2">
                                <a href="{{ route('product_detail') }}"
                                    class="text-body text-decoration-none add-to-cart">
                                    <i class="fa-solid fa-cart-shopping"></i> Add to card
                                </a>
                            </small>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm shadow-lg rounded d-flex justify-content-center py-3"
                    data-aos="zoom-in">
                    <div class="card" style="width: 18rem">
                        <img src="/frontend/assets/img/Make-up/PERIPERA-Peripera Ink Black Cara Volume.webp"
                            class="card-img-top" alt="Peripera" />
                        <div class="card-body text-center">
                            <h4 class="card-title">PERIPERA</h4>
                            <small>Peripera Ink Black Cara Volume</small>
                            <span class="text-success me-2">$15.00</span>
                        </div>
                        <div class="d-flex border-top border-bottom">
                            <small class="w-50 text-center border-end py-2">
                                <a href="{{ route('product_detail') }}" class="text-body text-decoration-none">
                                    <i class="fa-solid fa-eye"></i> View Details
                                </a>
                            </small>
                            <small class="w-50 text-center border-end py-2">
                                <a href="" class="text-body text-decoration-none add-to-cart">
                                    <i class="fa-solid fa-cart-shopping"></i> Add to card
                                </a>
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--make up end-->

    <!--discount start-->
    <section id="discount">
        <h1 class="display-5 text-center text-dark fw-bold py-5">Discount</h1>
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm shadow-lg rounded d-flex justify-content-center py-3"
                    data-aos="zoom-in">
                    <div class="card" style="width: 18rem">
                        <img src="/frontend/assets/img/discount/bye bye blackhead.webp" class="card-img-top"
                            alt="some by me" />
                        <div class="card-body text-center">
                            <h4 class="card-title">SOME BY MI</h4>
                            <small>bye bye blackhead</small> <br />
                            <span class="text-success me-2">$10.00</span>
                            <span class="text-decoration-line-through me-2">$15.00</span>
                        </div>
                        <div class="d-flex border-top border-bottom">
                            <small class="w-50 text-center border-end py-2">
                                <a href="{{ route('product_detail') }}" class="text-body text-decoration-none">
                                    <i class="fa-solid fa-eye"></i> View Details
                                </a>
                            </small>
                            <small class="w-50 text-center border-end py-2">
                                <a href="" class="text-body text-decoration-none add-to-cart">
                                    <i class="fa-solid fa-cart-shopping"></i> Add to card
                                </a>
                            </small>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm shadow-lg rounded d-flex justify-content-center py-3"
                    data-aos="zoom-in">
                    <div class="card" style="width: 18rem">
                        <img src="/frontend/assets/img/discount/romand-blur-fudge-tint.webp" class="card-img-top"
                            alt="Romand" />
                        <div class="card-body text-center">
                            <h4 class="card-title">Romand</h4>
                            <small>Blur fudge tint</small> <br />
                            <span class="text-success me-2">$5.00</span>
                            <span class="text-decoration-line-through me-2">$7.00</span>
                        </div>
                        <div class="d-flex border-top border-bottom">
                            <small class="w-50 text-center border-end py-2">
                                <a href="{{ route('product_detail') }}" class="text-body text-decoration-none">
                                    <i class="fa-solid fa-eye"></i> View Details
                                </a>
                            </small>
                            <small class="w-50 text-center border-end py-2">
                                <a href="" class="text-body text-decoration-none add-to-cart">
                                    <i class="fa-solid fa-cart-shopping"></i> Add to card
                                </a>
                            </small>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm shadow-lg rounded d-flex justify-content-center py-3"
                    data-aos="zoom-in">
                    <div class="card" style="width: 18rem">
                        <img src="/frontend/assets/img/discount/SOME BY MI Super Matcha Pore Clean Clay Mask.jpg"
                            class="card-img-top" alt="some by me" />
                        <div class="card-body text-center">
                            <h4 class="card-title">SOME BY MI</h4>
                            <small>Super Matcha Pore Clean Clay Mask</small>
                            <span class="text-success me-2">$11.00</span>
                            <span class="text-decoration-line-through me-2">$15.00</span>
                        </div>
                        <div class="d-flex border-top border-bottom">
                            <small class="w-50 text-center border-end py-2">
                                <a href="{{ route('product_detail') }}" class="text-body text-decoration-none">
                                    <i class="fa-solid fa-eye"></i> View Details
                                </a>
                            </small>
                            <small class="w-50 text-center border-end py-2">
                                <a href="" class="text-body text-decoration-none add-to-cart">
                                    <i class="fa-solid fa-cart-shopping"></i> Add to card
                                </a>
                            </small>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm shadow-lg rounded d-flex justify-content-center py-3"
                    data-aos="zoom-in">
                    <div class="card" style="width: 18rem">
                        <img src="/frontend/assets/img/discount/CLIO KILL COVER MESH GLOW CUSHION .jpg"
                            class="card-img-top" alt="CLIO" />
                        <div class="card-body text-center">
                            <h4 class="card-title">CLIO</h4>
                            <small>Kill cover mash glow cushion</small> <br />
                            <span class="text-success me-2">$14.00</span>
                            <span class="text-decoration-line-through me-2">$16.00</span>
                        </div>
                        <div class="d-flex border-top border-bottom">
                            <small class="w-50 text-center border-end py-2">
                                <a href="{{ route('product_detail') }}" class="text-body text-decoration-none">
                                    <i class="fa-solid fa-eye"></i> View Details
                                </a>
                            </small>
                            <small class="w-50 text-center border-end py-2">
                                <a href="" class="text-body text-decoration-none add-to-cart">
                                    <i class="fa-solid fa-cart-shopping"></i> Add to card
                                </a>
                            </small>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--discount end-->

    <!--contact start-->
    <div class="container mt-5" id="contact" data-aos="flip-left">
        <div class="main">
            <div class="box rounded p-5" style="width: 600px">
                <h1 class="display-5 text-center text-dark fw-bold">Contact Us</h1>
                <p class="text-center py-2 text-white">
                    If you have any qusetion or you want to discuss about your skin's
                    problem please contact us.
                </p>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1"
                        placeholder="Enter your email" />
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Your message" rows="3">
        </textarea>
                </div>
                <div class="icon-link">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-telegram"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!--contact end-->

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
