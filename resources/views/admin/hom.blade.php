

<?php 
	$title='PARTNERS';
 ?>
@extends('layouts.admin')

@section('content')
   
    
<div style="min-height: 500px;" class="container">
       


       <div class="container pt-3">
           
           <div class="row">
               
               <div class="col-md-12">
                   
                   <div class="card shadow">
                   <div class="card-header border-0">
                       <div class="row align-items-center">
                           <div class="col">
                               <h3 class="mb-0">All Applications</h3>
                           </div>
                           <div class="col text-right">
                               
                           </div>
                       </div>
                   </div>
                   <div class="table-responsive">

                   
                       <!-- Projects table -->
                      
                   </div>
               </div>

               </div>
           </div>


       </div>
     

       
   </div>
    @include('layouts.footers.auth')
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush