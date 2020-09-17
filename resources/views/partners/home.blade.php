<?php 
    $title='DASHBOARD';
 ?>

@extends('layouts.partners')

@section('content')
    @include('layouts.headers.partners_card')
    
    <div class="container">
        
    @if(Auth::user()->payment_status ==='unpaid')

        


    @else

        <h1>You have successfully paid your registration fee.</h1>
    @endif

        
    </div>
    @include('layouts.footers.auth')
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush