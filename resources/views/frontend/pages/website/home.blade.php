@extends('frontend.layouts.web-master')
@section('content')
<section class="section dashboard">
    <div class="row">

        <!-- center columns -->
        <div class="col-lg-12">
            @include('frontend.components.push-notification')

            <div class="card" style="max-height:15rem;color:#0a7151">
                <img src="assets/img/card.jpg" class="card-img-top" style="max-height:15rem">
                <div class="card-img-overlay">
                    <h2 class="text-center p-5">ডাইনামিক ব্যানার</h2>
                </div>
            </div>

        </div><!-- End center columns -->

        <!-- Category -->
        @include('frontend.pages.website.helping-pages.category')
        <!-- Offer -->
        @include('frontend.pages.website.helping-pages.special-offer')

    </div>
</section>
@endsection
