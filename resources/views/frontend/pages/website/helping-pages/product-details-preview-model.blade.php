<div class="modal fade" id="product_details_view"  data-bs-backdrop="static" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
        <div class="modal-content modal_holder">
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 modal_header_container">
                            <h5 class="conten_lef">ORSaline-N</h5>
                            <button type="button" class="btn danger conten_right" data-bs-dismiss="modal">x</button>
                    </div>
                </div>
                <div class="row">
                        <div class="col-md-4 col-sm-12 text-center">
                            <img class="img-fluid d-flex mx-auto my-4 preview_product_img_detail img_border img_preview_details"
                                src="http://localhost/pharmacheck/public/assets/img/medicine/1762357035059258.webp" alt="ORSaline-N">
                        </div>
                        <div class="col-md-8 col-sm-12">
                            <div class="row">
                                range
                            </div>
                            <div class="row">
                                <div class="col text-center">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row pt-3">
                                                <div class="col-6">
                                                    <div class="input-group">
                                                        <span class="input-group-btn">
                                                            <button type="button" class="btn minus" data-type="minus">
                                                                -
                                                            </button>
                                                        </span>
                                                        <span class="input_holder">
                                                            <input type="text" class="form-control input-number text-center increment_field" id="store_bought"
                                                                name="store_bought" value="0" min="1">
                                                        </span>
                                                        <span class="input-group-btn">
                                                            <button type="button" class="btn plus" data-type="plus">
                                                                +
                                                            </button>
                                                        </span>

                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <button class="btn"> কার্টে যোগ করুন</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="col-12">
                        <div class="card shadow">
                            <div class="card-body product_helper_text">
                                <div class="row pb-5">
                                    <div class="col-12">
                                        <p class="conten_lef product_details_text">প্রোডাক্ট কিনুন ক্যাশ অন ডেলিভারি বা অনলাইন পেমেন্টে</p>
                                        <span class="conten_right">
                                            <p class="product_details_text">পেমেন্ট মেথডঃ</p>
                                            <ul class="product_details_text">
                                                <li><img src="{{ asset('assets/img/cod.png') }}" class="payment_method_icon" alt="COD"></li>
                                                <li><img src="{{ asset('assets/img/bkash.svg') }}" class="payment_method_icon" alt="Bkash"></li>
                                            </ul>
                                        </span>
                                    </div>
                                    <hr class="section_hr">
                                    <div class="row">
                                        <div class="col-8">
                                            done
                                        </div>
                                        <div class="col-4 verticalLine">
                                            some other content
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
