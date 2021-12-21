@if ($message = Session::get('success'))
    <div class="alert alert-success" role="alert">
        <div class="alert-body">
            {{ $message }}
        </div>
    </div>
@endif

@if ($message = Session::get('error'))
    <div class="alert alert-danger" role="alert">
        <div class="alert-body">
            {{ $message }}
        </div>
    </div>
@endif
