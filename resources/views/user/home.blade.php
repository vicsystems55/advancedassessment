<?php 
    $title='DASHBOARD';
 ?>
@extends('layouts.user')

@section('content')
    @include('layouts.headers.user_cards')



    
    
    <div style="height: 500px;" class="container">

   

        @if(Auth::user()->payment_status ==='unpaid')

        check

            @else

           


            @endif


        
      

       
    </div>
     @include('layouts.footers.auth')
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush