<?php 
    $title='LOANS';
 ?>
@extends('layouts.user')

@section('content')
   
    
    <div style="height: 500px;" class="container ">

        @if(Auth::user()->payment_status ==='unpaid')

        checked

        @else

        <h3 class="text-success text-center">Your account is active</h3>

        @endif
        
      

        
    </div>
    @include('layouts.footers.auth')
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush