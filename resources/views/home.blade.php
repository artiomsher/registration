@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Profile') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container">
                        <h6>Email: {{ Auth::user()->email }}</h6>
                        <h6>Name: {{ Auth::user()->name }}</h6>
                        <h6>Last name: {{ Auth::user()->last_name }}</h6>
                        <h6>Phone: {{ Auth::user()->phone }}</h6>
                        <h6>Registration date: {{ Auth::user()->registered_at }}</h6>
                    </div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                       @csrf
                    </form>
                    <button type="submit" class="btn btn-danger" form="logout-form">Logout</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
