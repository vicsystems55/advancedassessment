@extends('layouts.app', ['class' => 'bg-dark'])

@section('content')
    @include('layouts.headers.guest')

    <div style="min-height: 500px;" class="container">
    
        <div class="row">
            <div class="col-md-6 p-2">

            <div class="card mx-auto" style="width: 18rem;">
                <img src="{{ asset('argon') }}/img/usersreg.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <h2 class="card-text">
                        Register as User
                    </h2>
                    <p>
                        A registration fee of N 5000 is required to complete this registration.
                    </p>
                    <a href="{{ route('register')}}" class="btn btn-warning text-center mx-auto">Create Account</a>
                </div>
                </div>

            </div>

            <div class="col-md-6 p-2">

            <div class="card mx-auto" style="width: 18rem;">
                <img src="{{ asset('argon') }}/img/partnersreg.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <h2 class="card-text">
                    Register as Partner
                    </h2>
                    <p>
                        Please note registration fees are quoted based on category of Partnership being registered.
                    </p>
                    <a href="{{ route('registerPartners')}}" class="btn btn-warning text-center mx-auto">.Create Account</a>
                </div>
                </div>

            </div>

        </div>

    </div>
@endsection
