@extends('layouts.app')

@section('content')
<head>
    <link rel="stylesheet" href="{{ asset('css/newsfeedStyle.css') }}">
</head>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                



                

                    <div class="card-deck">
                        <a href="{{ route('newsfeed') }}" class="btn btn-primary">Home</a>
                                <a href="{{ route('showProfile') }}" class="btn btn-primary">Profile</a>
                        {{-- <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Home</h5>
                                <p class="card-text">Browse to the home page.</p>
                                
                            </div>
                        </div> --}}

                        {{-- <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">User Profile</h5>
                                <p class="card-text">Browse to the user profile page.</p>
                                
                            </div>
                        </div> --}}
                    </div>    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
