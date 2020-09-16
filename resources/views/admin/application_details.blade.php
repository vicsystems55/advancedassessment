

<?php 
	$title='PARTNERS';
 ?>
@extends('layouts.admin')

@section('content')
   
    
<div style="min-height: 500px;" class="container">
       
    <h1>Loan Application Details</h1>

       
   </div>
    @include('layouts.footers.auth')
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush