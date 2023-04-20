@extends('frontend.layouts.auth-master')
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
                                    <input type="number" class="form-control" id="phone" name="phone"
                                        required="" value="{{ request()->old('phone') }}">
                                    <div class="invalid-feedback">আপনার রেজিস্টার্ড ফোন নাম্বার দিন</div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="password" class="form-label">পাসওয়ার্ড</label>
                                <input type="password" class="form-control text-center" id="password" name="password"
                                    required="" value="{{ request()->old('password') }}">
                                <div class="invalid-feedback">আপনার পাসওয়ার্ড দিন</div>
                            </div>

                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="see_password" value="true"
                                        id="see_password">
                                    <label class="form-check-label" for="see_password">পাসওয়ার্ড দেখুন</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn w-100" type="submit">লগইন</button>
                            </div>
                            <div class="row text-center pt-3">
                                <div class="col-md-6 col-sm-12">
                                    <p class="small mb-0">পাসওয়ার্ড ভুলে গেছেন? <a href="{{ route('register.here') }}">এখানে ক্লিক করুন</a></p>
                                </div>
                                <div class="col-md-6 col-sm-12 custom_padding">
                                    <p class="small mb-0">অ্যাকাউন্ট নেই? <a href="{{ route('register.here') }}">এখানে ক্লিক করুন</a></p>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>


            </div>
        </div>
    </div>

</section>
@endsection
