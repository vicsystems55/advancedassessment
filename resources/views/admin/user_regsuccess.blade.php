

<?php 
	$title='PARTNERS';
 ?>
@extends('layouts.admin')

@section('content')
   
    
    <div style="min-height: 400px;" class="container p-2 ">

        <h1 class="display-4">{{$type}} Registered</h1>

        <h3>Email: <span class="font-weight-bold">{{$email}}</span> </h3>
        <h3>Password: <span class="font-weight-bold">{{$password}}</span> </h3>
        
        <div class="container">
            <a class="bt btn-primary shadow text-center" href="{{ route('admin')}}">Back to Dashboard</a>
        </div>

       
    </div>
    @include('layouts.footers.auth')
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush