@extends('layouts.app')

@section('content')
<div class="container-fluid" id="locations">
    <div class="side-nav">
        @foreach ($locations as $location)
            <div class="card">
                <a href="{{ url('/locations/' . $loop->index) }}">{{$location['name']}}</a>
            </div>
        @endforeach
    </div>
    <div class="container-fluid" id="location">
        @yield('location')
    </div>
</div>
@endsection
