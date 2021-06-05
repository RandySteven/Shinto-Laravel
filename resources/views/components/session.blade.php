@if (Session::has('success'))
    <div class="container bg-success">
        {{ Session::get('success') }}
    </div>
@endif
