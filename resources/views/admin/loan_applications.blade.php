

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
                       <table class="table align-items-center table-flush">
                           <thead class="thead-light">
                               <tr>
                                   <th scope="col">#</th>
                                   <th scope="col">Name</th>
                                   <th scope="col">Reg Code</th>
                                   <th scope="col">Amount Requested</th>
                                   <th scope="col">Status</th>
                                   <th scope="col">Completion</th>
                                   <th scope="col">Action</th>
                                   
                               </tr>
                           </thead>
                           <tbody>

                          

                           @foreach($applications as $application)

                           <tr>

                           
                                   <th scope="row">
                                      {{$loop->iteration}}
                                   </th>
                                   <td>
                                   {{$application->user->name}}
                                   </td>
                                   <td>
                                   {{$application->user->reg_code}}
                                   </td>
                                   <td>
                                       {{$application->amount_request}}
                                   </td>

                                   <td>
                                       {{$application->status}}
                                   </td>

                                   <td>
                                   <div class="d-flex align-items-center">
                        <span class="completion mr-2">20%</span>
                        <div>
                          <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"></div>
                          </div>
                        </div>
                      </div>
                                   </td>
                                   <td>
                                      <a href="{{ route('admin.application_details', $application->id)}}" class="btn btn-sm btn-primary shadow">view more</a>
                                   </td>
                               </tr>

                           @endforeach

                           </tbody>
                       </table>
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