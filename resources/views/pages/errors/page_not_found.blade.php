@extends('layouts.app')
@section('content')

    <div class="misc-inner p-2 p-sm-3">
        <div class="w-100 text-center">
            <h2 class="mb-1">Page Not Found</h2>
            <p class="mb-2">Oops! The requested URL was not found on this server.</p>
            <a class="btn btn-primary mb-2 btn-sm-block waves-effect waves-float waves-light" href="{{ route('home') }}">Back to Dashboad</a>
        </div>
    </div>


@endsection