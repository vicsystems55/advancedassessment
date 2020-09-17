@extends('layouts.welcome', ['class' => ''])

@section('content')

    <div style="background-image: url('{{ asset('argon') }}/img/cover_pix.jpg'); background-size:cover; background-repeat: no-repeat;" class="header py-7 py-lg-8">
        <div class="container">
            <div class="header-body text-center mt-7 mb-7">
                <div class="row justify-content-center">
                    <div class="bg-primary col-lg-5 col-md-6">
                        <h1 class="text-white font-weight-bold display-3">
                            Welcome to Advanced Assessment Systems
                            <div class="p-2 ">
                          
                                <a href="{{ route('login')}}" class="btn btn-lg btn-success shadow btn-block">Student Login</a>
                           
                           </div>
                           <div class="p-2 ">
                          
                                <a href="{{ route('school_login')}}" class="btn btn-lg btn-warning shadow btn-block">School Admin Login</a>
                           
                           </div>

                           <div class="p-2 ">
                          
                                <a href="{{ route('admin_login')}}" class="btn btn-lg btn-dark shadow btn-block">Super Admin Login</a>
                           
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
