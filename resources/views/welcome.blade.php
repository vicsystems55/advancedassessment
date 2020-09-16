@extends('layouts.app', ['class' => ''])

@section('content')

    <div style="background-image: url('{{ asset('argon') }}/img/cover_pix.jpg'); background-size:cover; background-repeat: no-repeat;" class="header py-7 py-lg-8">
        <div class="container">
            <div class="header-body text-center mt-7 mb-7">
                <div class="row justify-content-center">
                    <div class="bg-primary col-lg-5 col-md-6">
                        <h1 class="text-white font-weight-900 display-1">
                            Welcome to Advanced Assessment Systems


                           <div class="p-2 ">
                           @auth()
                                <a href="{{ route('login')}}" class="btn btn-lg btn-success shadow btn-block">Login</a>
                            @endauth
                           </div>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container  pb-5"></div>
    </div>

    <div class="container  pb-5"></div>
@endsection
