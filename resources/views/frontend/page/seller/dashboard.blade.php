{{-- <h1>Seller Dashboard</h1>

<!-- Authentication -->
<form method="POST" action="{{ route('logout') }}">
    @csrf

    <x-dropdown-link :href="route('logout')"
        onclick="event.preventDefault();
                                                this.closest('form').submit();">
        {{ __('Log Out') }}
    </x-dropdown-link>
</form> --}}

@extends('frontend.layout.admin-page-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Seller Dashboard')
@section('content')
    <section class="content-main">
        <div class="content-header">
            <div>
                <h2 class="content-title card-title">Dashboard</h2>
                <p>Whole data about your business here</p>
            </div>
            <div><a class="btn btn-primary" href="#"><i class="text-muted material-icons md-post_add"></i>Create
                    report</a></div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="card card-body mb-4">
                    <article class="icontext"><span class="icon icon-sm rounded-circle bg-primary-light"><i
                                class="text-primary material-icons md-monetization_on"></i></span>
                        <div class="text">
                            <h6 class="mb-1 card-title">Revenue</h6><span>$13,456.5</span><span class="text-sm">Shipping
                                fees are not included</span>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card card-body mb-4">
                    <article class="icontext"><span class="icon icon-sm rounded-circle bg-success-light"><i
                                class="text-success material-icons md-local_shipping"></i></span>
                        <div class="text">
                            <h6 class="mb-1 card-title">Orders</h6><span>53.668</span><span class="text-sm">Excluding orders
                                in transit</span>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card card-body mb-4">
                    <article class="icontext"><span class="icon icon-sm rounded-circle bg-warning-light"><i
                                class="text-warning material-icons md-qr_code"></i></span>
                        <div class="text">
                            <h6 class="mb-1 card-title">Products</h6><span>9.856</span><span class="text-sm">In 19
                                Categories</span>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card card-body mb-4">
                    <article class="icontext"><span class="icon icon-sm rounded-circle bg-info-light"><i
                                class="text-info material-icons md-shopping_basket"></i></span>
                        <div class="text">
                            <h6 class="mb-1 card-title">Monthly Earning</h6><span>$6,982</span><span class="text-sm">Based
                                in your local time.</span>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
@endsection
