@extends('frontend.layouts.web-master')
@section('content')
<section class="section register d-flex flex-column align-items-center justify-content-center py-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                <div class="card mb-3">

                    <div class="card-body">

                        <div class="pt-4 pb-2">
                            <h5 class="card-title text-center pb-0 fs-4">আপনার ডেশবোর্ডে প্রবেশ করুন</h5>
                            <p class="text-center small">ডেশবোর্ডে প্রবেশ করতে আপনার রেজিস্টার্ড ফোন নাম্বার ও পাসওয়ার্ড দিন</p>
                        </div>

                        <form class="row g-3 needs-validation" novalidate="">

                            <div class="col-12">
                                <label for="yourUsername" class="form-label">ফোন নাম্বার</label>
                                <div class="input-group has-validation">
                                    <input type="number" name="username" class="form-control" id="yourUsername"
                                        required="">
                                    <div class="invalid-feedback">আপনার রেজিস্টার্ড ফোন নাম্বার দিন</div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="yourPassword" class="form-label">পাসওয়ার্ড</label>
                                <input type="password" name="password" class="form-control text-center" id="yourPassword"
                                    required="">
                                <div class="invalid-feedback">আপনার পাসওয়ার্ড দিন</div>
                            </div>

                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" value="true"
                                        id="rememberMe">
                                    <label class="form-check-label" for="rememberMe">পাসওয়ার্ড দেখুন</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn w-100" type="submit">রেজিস্টার করুন</button>
                            </div>
                        </form>

                    </div>
                </div>


            </div>
        </div>
    </div>

</section>
@endsection
