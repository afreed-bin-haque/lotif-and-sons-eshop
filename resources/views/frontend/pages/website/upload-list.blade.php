@extends('frontend.layouts.auth-master')
@section('content')
<section class="section register d-flex flex-column align-items-center justify-content-center py-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                <div class="card mb-3 upload_list">

                    <div class="card-body">

                        <div class="pt-4 pb-2">
                            <h5 class="card-title text-center pb-0 fs-4">আপনার বাজার লিস্ট আপলোড করুন </h5>
                            <p class="text-center small">আমরা আপনার বাজার আপনার বাসায় পৌঁছে দিব</p>
                        </div>
                        @include('frontend.components.push-notification')

                        <form class="row g-3 needs-validation" action="{{ route('submit.your_list') }}" method="POST" novalidate="" enctype="multipart/form-data">
                            @csrf
                            <div class="col-12">
                                <div class="image-holder">
                                    <img id="imgPreview" src="#" alt="আপনার বাজার লিস্ট" />
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="yourUsername" class="form-label">ফোন নাম্বার</label>
                                <div class="input-group has-validation">
                                    <input type="number" class="form-control" id="phone" name="phone" required=""
                                        value="{{ request()->old('phone') }}">
                                    <div class="invalid-feedback">আপনার ফোন নাম্বার দিন</div>
                                </div>
                                @error('phone')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label for="password" class="form-label">আপনার এড্রেস</label>
                                <textarea class="form-control" style="height: 100px"
                                id="address" name="address" required="">{{ request()->old('address') }}</textarea>
                                <div class="invalid-feedback">আপনার পাসওয়ার্ড দিন</div>
                                @error('address')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="yourUsername" class="form-label">জোন</label>
                                <div class="input-group has-validation">
                                    <select class="form-select" aria-label="আপনার জোন" id="zone" name="zone" required="">
                                        <option selected="" value="">আপনার জোন সিলেক্ট করুন</option>
                                        <option value="Sector-12">Sector -12</option>
                                        <option value="Tongi">Tongi</option>
                                        <option value="Sector-09">Sector-09</option>
                                        <option value="Sector-14">Sector-14</option>
                                    </select>
                                    <div class="invalid-feedback">আপনার জোন সিলেক্ট করুন</div>
                                </div>
                                @error('zone')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="yourUsername" class="form-label">লিস্ট আপলোড</label>
                                <div class="input-group has-validation">
                                    <input type="file" class="form-control" id="main_image" name="main_image" required="">
                                    <div class="invalid-feedback">আপনার বাজার লিস্ট আপলোড করুন</div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn w-100" type="submit">আপলোড করুন</button>
                            </div>
                        </form>

                    </div>
                </div>


            </div>
        </div>
    </div>

</section>
@endsection
