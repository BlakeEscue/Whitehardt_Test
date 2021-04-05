@extends('layouts.app')

@section('content')
@include('partials.page-header')
<div class="container-fluid">
    <!-- Hero Section -->
    <div class="row no-gutters">
        <div class="hero-image col-12">
            <span role="img" aria-label="Two car collision with an ambulance present"> </span>
            <div class="contact">
                <h1 class="call-to-action d-block mx-auto mx-md-0">Lorem Ipsum <br>
                    Dolor Sit Amet </h1>
                <button type="button" class="btn btn-primary">CONTACT US</button>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->

    <!-- Strapline -->
    <div class="row no-gutters">
        <div class="strapline col-12 text-center">
            <h1>Smith & Smith Will Fight For You!</h1>
        </div>
    </div>
    <!-- End Strapline -->

    <!-- Lawyer Section -->
    <div class="row no-gutters">
        <div class="lawyers col-12 text-center">
            <h1> Personal Injury Lawyers </h1>
        </div>
    </div>
    <div class="row no-gutters">
        <div class="lawyers col-md-6 ">
            <h2 class=""> Slip & Fall Attorneys</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent a sollicitudin nibh, et
                pellentesque lorem. Nam sollicitudin, elit non porta fringilla, magna mi eleifend lacus, in sagittis
                mauris nunc ut nisi. Donec facilisis mollis est, id dapibus nisl blandit placerat. Suspendisse
                mollis tortor non felis suscipit dignissim. Morbi convallis leo est, vel interdum dolor placerat
                porttitor. Sed suscipit quis lorem quis elementum. Ut nulla ex, egestas ut tincidunt nec, cursus in
                mauris. </p>
            <button type="button" class="btn btn-primary d-block mx-auto mx-md-0">CONTACT US</button>
        </div>
        <div class="lawyers col-md-6 d-block mx-auto mx-md-0">
            <img src="/wp-content/themes/sage/dist/images/slip.jpg"
                alt="Caution wet floor sign over a floor covered with water" class="img-fluid">
        </div>
    </div>
    <!-- End Lawyer -->

    <!-- Hero Section 2 -->
    <div class="row no-gutters">
        <div class="hero-image2 col-12">
            <span role="img" aria-label="Fallen power line blocking road"> </span>
            <div class="contact">

                <h1 class="call-to-action d-block mx-auto mx-md-0">Amet Sit Dolor <br>Ipsum Lorem
                </h1>
                <button type="button" class="btn btn-primary">CONTACT US</button>
            </div>
        </div>
    </div>
    <!-- End Hero Section 2 -->


</div>

@endsection