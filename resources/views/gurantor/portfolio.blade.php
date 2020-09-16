<?php 
    $title='PORTFOLIO';
 ?>
@extends('layouts.partners')

@section('content')
   
    
    <div class="container-fluid p-2">
       
       <h1>Portfolio</h1>
      

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush