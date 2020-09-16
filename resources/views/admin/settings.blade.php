

<?php 
	$title='STAFF';
 ?>
@extends('layouts.admin')

@section('content')
    
    
    <div style="min-height: 500px;" class="container p-2">  
    <h1>settings </h1>
   <div class="container">
    
   <div class="row">
  <div class="col-2">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active mb-2" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Loan Schedule</a>
      <a class="nav-link mb-2" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
      <a class="nav-link mb-2" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
      <a class="nav-link mb-2" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
    </div>
  </div>
  <div class="col-10">
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

      <div class="col-md-10">
                    
                    <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                               
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
                                    <th scope="col">Grade Level</th>
                                    <th scope="col">Approved Ceiling</th>
                                    <th scope="col">Interest Rate</th>
                                    <th scope="col">Details</th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach($loan_schedule as $data)

                            <tr>
                                    <th scope="row">
                                       {{$loop->iteration}}
                                    </th>
                                    <td>
                                        Level {{$data->grade_level}}
                                    </td>
                                    
                                    <td>
                                        {{$data->approved_ceiling}}
                                    </td>
                                    <td>
                                        {{$data->interest_rate}} %
                                    </td>
                                    <td>
                                    <button data-whatever="{{$data->id}}" type="button" id="{{$data->id}}" class="btn btn-primary btn-sm shadow" data-toggle="modal" data-target="#exampleModal">
                                   view more
                                    </button>
                                       
                                    </td>
                                </tr>

                            @endforeach
 
                            </tbody>
                        </table>

                                 

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Monthly Repayment Schedule</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <?php
            $repayment = DB::table('loan_repayment_schedules')->where('id', '1')->first();


        ?>
<table class="table">
    

    <tbody>

    
        <tr>
            <td>
                5 Years
            </td>
            <td>
                {{$repayment->monthly_repayment5}}
            </td>
            

        </tr>

        <tr>
            <td>
                10 Years
            </td>
            <td>
                {{$repayment->monthly_repayment10}}
            </td>
            

        </tr>

        <tr>
            <td>
                15 Years
            </td>
            <td>
                {{$repayment->monthly_repayment15}}
            </td>
            

        </tr>

        <tr>
            <td>
                20 Years
            </td>
            <td>
                {{$repayment->monthly_repayment20}}
            </td>
            

        </tr>

        <tr>
            <td>
                25 Years
            </td>
            <td>
                {{$repayment->monthly_repayment25}}
            </td>
            

        </tr>
    


    </tbody>
</table>
       
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Update Changes</button>
      </div>
    </div>
  </div>
</div>
                    </div>
                </div>


      </div>
            
      </div>
      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
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