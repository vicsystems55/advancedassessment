<?php 
    $title='LOANS';
 ?>
@extends('layouts.user')

@section('content')
   
    
    <div style="height: 500px;" class="container ">

    <h1 class="text-success mt-9 text-center"> {{Auth::user()->name}}, Session Submitted Successfully</h1>
        <a class="btn btn-primary btn-sm" href="/user/">Proceed to Dashboard</a>

        @if(Auth::user()->payment_status ==='unpaid')
        

        @else

        <h3 class="text-success text-center mt-9">Your account is active</h3>

        @endif
        
      

        
    </div>
    @include('layouts.footers.auth')
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush