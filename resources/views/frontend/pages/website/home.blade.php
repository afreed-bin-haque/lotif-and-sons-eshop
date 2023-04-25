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
        <div class="col-lg-12">
            <h4 class="section_title">ক্যাটাগরি</h4>
            <hr class="section_hr">

            <div class="row mb-5">
                <div class="col-md-6 col-xl-4">

                    <a href="#">
                        <div class="card category_hoolder">
                            <div class="card-body">
                                <div class="p-3">
                                    <h4 class="category_detail">শাক সবজি ও ফলমূল</h4>
                                </div>

                            </div>
                        </div>
                    </a>

                </div>
                <div class="col-md-6 col-xl-4">

                   <a href="#">
                        <div class="card category_hoolder">
                            <div class="card-body">
                                <div class="p-3">
                                    <h4 class="category_detail">মাছ ও মাংশ</h4>
                                </div>

                            </div>
                        </div>
                    </a>

                </div>
                <div class="col-md-6 col-xl-4">

                    <a href="#">
                        <div class="card category_hoolder">
                            <div class="card-body">
                                <div class="p-3">
                                    <h4 class="category_detail">মাছ ও মাংশ</h4>
                                </div>

                            </div>
                        </div>
                    </a>

                </div>
                <div class="col-md-6 col-xl-4">

                    <a href="#">
                        <div class="card category_hoolder">
                            <div class="card-body">
                                <div class="p-3">
                                    <h4 class="category_detail">মাছ ও মাংশ</h4>
                                </div>

                            </div>
                        </div>
                    </a>

                </div>
                <div class="col-md-6 col-xl-4">

                    <a href="#">
                        <div class="card category_hoolder">
                            <div class="card-body">
                                <div class="p-3">
                                    <h4 class="category_detail">মাছ ও মাংশ</h4>
                                </div>

                            </div>
                        </div>
                    </a>

                </div>
                <div class="col-md-6 col-xl-4">

                    <a href="#">
                        <div class="card category_hoolder">
                            <div class="card-body">
                                <div class="p-3">
                                    <h4 class="category_detail">মাছ ও মাংশ</h4>
                                </div>

                            </div>
                        </div>
                    </a>

                </div>

            </div>

        </div>

    </div>
</section>
@endsection
