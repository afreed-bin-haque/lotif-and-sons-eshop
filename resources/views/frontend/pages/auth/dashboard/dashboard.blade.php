@extends('frontend.layouts.auth-master')
@section('content')
<div class="main-div">

</div>
<script>
const wait = `<div class="card">
<div ="card-body">
<div class="m-5">
<p class="placeholder-glow">
  <span class="placeholder col-12 bg-success"></span>
   <span class="placeholder col-4 bg-success"></span>
</p>

<p class="placeholder-wave">
  <span class="placeholder w-75 col-12 bg-success"></span>
  <span class="placeholder col-12 bg-success"></span>
</p>
<p class="placeholder-glow">
  <span class="placeholder col-6 bg-success"></span>
   <span class="placeholder col-12 bg-success"></span>
</p>
<p class="placeholder-wave">
  <span class="placeholder col-12 bg-success"></span>
   <span class="placeholder w-75 col-12 bg-success"></span>
</p>
</div>
</div>
</div>`;
</script>
@if(session()->get('path') === 'Admin')
<script>
        $(document).ready(function () {
            $('.main-div').html(wait);
        });
        $(window).on('load', function () {
            function MainGrid() {
                $.ajax({
                    type: "GET",
                    url: "{{ route('fetch.main-div') }}",
                    success: function (response) {
                        $('.main-div').html('');
                        $('.main-div').html(response.html);
                    }
                });
            }
            window.setTimeout(MainGrid, 1500);
        });

</script>
@endif
@endsection
