@extends('layout.admin');

@section('title', $data['title'])

@section('breadcrumb')

<li class="breadcrumb-item active" aria-current="page">{{ $data['title'] }}</li>
@endsection

@section('content')

<section class="section">
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2">
                <div class="pricing">
                    <div class="row align-items-center">
                        <div class="col-md-4 px-0">
                            <div class="card">
                                <div class="card-header text-center">
                                    <h4 class="card-title">Basic</h4>
                                    <p class="text-center">A standart features you can get</p>
                                </div>
                                <h1 class="price">$100</h1>
                                <ul>
                                    <li><i class="bi bi-check-circle"></i>Lorem ipsum dolor sit amet</li>
                                    <li><i class="bi bi-check-circle"></i>Lorem ipsum dolor sit </li>
                                    <li><i class="bi bi-check-circle"></i>Lorem ipsum dolor amet</li>
                                    <li><i class="bi bi-check-circle"></i>Lorem ipsum dolor sit amet</li>
                                    <li><i class="bi bi-check-circle"></i>Lorem ipsum sit amet</li>
                                    <li><i class="bi bi-check-circle"></i>Lorem dolor sit amet</li>
                                </ul>
                                <div class="card-footer">
                                    <button class="btn btn-primary btn-block">Order Now</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 px-0">
                            <div class="card card-highlighted">
                                <div class="card-header text-center">
                                    <h4 class="card-title">Enterpreneur</h4>
                                    <p></p>
                                </div>
                                <h1 class="price text-white">$150</h1>
                                <ul>
                                    <li><i class="bi bi-check-circle"></i>Lorem ipsum kolor sit amet</li>
                                    <li><i class="bi bi-check-circle"></i>Lorem ipsum dolor sit amet</li>
                                    <li><i class="bi bi-check-circle"></i>Lorem ipsum kolor sit amet</li>
                                    <li><i class="bi bi-check-circle"></i>Lorem ipsum dolor sit amet</li>
                                    <li><i class="bi bi-check-circle"></i>Lorem ipsum kolor sit amet</li>
                                    <li><i class="bi bi-check-circle"></i>Lorem ipsum dolor sit amet</li>
                                    <li><i class="bi bi-check-circle"></i>Lorem ipsum kolor sit amet</li>
                                    <li><i class="bi bi-check-circle"></i>Lorem ipsum dolor sit amet</li>
                                    <li><i class="bi bi-check-circle"></i>Lorem ipsum kolor sit amet</li>
                                </ul>
                                <div class="card-footer">
                                    <button class="btn btn-outline-white btn-block">Order Now</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 px-0">
                            <div class="card">
                                <div class="card-header text-center">
                                    <h4 class="card-title">Professional</h4>
                                    <p class="text-center">A higher features you will need</p>
                                </div>
                                <h1 class="price">$100</h1>
                                <ul>
                                    <li><i class="bi bi-check-circle"></i>Lorem ipsum dolor sit amet</li>
                                    <li><i class="bi bi-check-circle"></i>Lorem ipsum dolor sit </li>
                                    <li><i class="bi bi-check-circle"></i>Lorem ipsum dolor amet</li>
                                    <li><i class="bi bi-check-circle"></i>Lorem ipsum dolor sit amet</li>
                                    <li><i class="bi bi-check-circle"></i>Lorem ipsum sit amet</li>
                                    <li><i class="bi bi-check-circle"></i>Lorem dolor sit amet</li>
                                </ul>
                                <div class="card-footer">
                                    <button class="btn btn-primary btn-block">Order Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('customJs')
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
@endsection
