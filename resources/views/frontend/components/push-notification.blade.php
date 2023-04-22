@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <h4 class="alert-heading">সফল হয়েছে</h4>
    <hr>
    <p>{{ session()->get('success') }}</p>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@if(session()->has('failed'))
<div class="alert alert-danger alert-dismissible fade show side_border" role="alert">
    <h4 class="alert-heading">ব্যর্থ হয়েছে</h4>
    <hr>
    <p>{{ session()->get('failed') }}</p>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
