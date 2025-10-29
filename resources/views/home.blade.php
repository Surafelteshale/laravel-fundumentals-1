@extends('layouts.master')

@section('title', 'Welcome to Jetour')

@section('content')
    <!-- Hero Section -->
    <div class="text-center py-5 bg-light rounded shadow-sm">
        <h1 class="display-4 fw-bold">Explore the Road with Jetour</h1>
        <p class="lead">Luxury, performance, and technology combined in every ride.</p>
        <a href="{{ url('/contact') }}" class="btn btn-primary btn-lg mt-3">Book a Test Drive</a>
    </div>

    <!-- Features Section -->
    <div class="row text-center mt-5">
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title">🌟 Premium Design</h5>
                    <p class="card-text">Experience sophisticated interiors and sleek exteriors built to impress.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title">⚙️ Advanced Technology</h5>
                    <p class="card-text">Smart navigation, driver assistance, and entertainment features at your fingertips.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title">🚗 Superior Performance</h5>
                    <p class="card-text">Powerful engines and smooth handling for a ride like no other.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        @foreach ($blogs as $blog)
        @if ($blog['status'] == 1)
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">

                    <h2>{{ $blog['title'] }}</h2>
                    <p>
                        {{ $blog['body'] }}
                    </p>
                </div>
            </div>
        </div>
        @else
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">

                    <h2>{{ $blog['title'] }}</h2>
                    <p>
                        {{ $blog['body'] }}
                    </p>
                    <div class="btn btn-sm btn-warning text-dark">Pending</div>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>

    @php
        $data = true;
        $i=1;
        echo 'hello world'
    @endphp

    {{-- @isset($data)
        <div class="alert alert-success">Success</div>
    @endisset --}}

    @switch($i)
        @case(1)
            <div class="alert alert-danger">Danger</div>
            @break
        @case(2)
            <div class="alert alert-success">Success</div>
        @default
            <div class="alert alert-warning">warning</div>
    @endswitch
@endsection
