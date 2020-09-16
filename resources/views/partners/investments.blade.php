<?php 
    $title='PORTFOLIO';
 ?>
@extends('layouts.partners')

@section('content')
   
    
    <div style="min-height: 400px;" class="container-fluid p-2">
       
    @if(Auth::user()->payment_status ==='unpaid')

@include('partners.unpaid')


@else

<h1>You have successfully paid your registration fee.</h1>

    <h3>Signup For an Investment Package</h3>
    <?php

    $company_profile = "yes";

    $investpackage = ['1','3','4'];
    ?>
    @if($company_profile == 'yes')

        <div class="row">
            @foreach($investpackage as $package)

                    <div class="col-md-3 p-3 mx-auto">
                     
                    <div class="card shadow" style="width: 16rem;">

                        <div class="card-body">
                        <img style="width:120px; height:120px;" class="card-img-top mx-auto" src="{{ asset('argon') }}/img/theme/sketch.jpg" alt="Card image cap">
                        <h5 class="card-title">Investment Package 1</h5>
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">New users</h5>
                                        <span class="h2 font-weight-bold mb-0">2,356</span>
                                    </div>
                                    <div class="col-auto">
                                    <div class="icon icon-shape bg-success text-white rounded-circle shadow">
                                        <i class="ni ni-chart-pie-35"></i>
                                    </div>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-sm">
                                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                    <span class="text-nowrap">ROI</span>
                                </p>

                        </div>

                        
                        <div class="card-body mt--4">
                            
                            <p class="card-text">This package is available to profile</p>
                            <a href="{{ route('partners.invest_subscribe')}}" class="btn btn-success">Get Started</a>
                        </div>

                        

                    </div>
                    
                    </div> 
 
            @endforeach
        </div>

    @else

        <div class="container">

            <h3>Please Update Company profile</h3>

            <div class="container">
                <a class="btn btn-default shadow" href="{{ route('partners.profile')}}">Update Company Profile</a>
            </div>

        </div>

    @endif



@endif
       
    </div>
    @include('layouts.footers.auth')
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush