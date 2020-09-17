

<?php 
$title='REPORT';
	
 ?>
@extends('layouts.admin')

@section('content')
    
    
    <div class="container col-md-8 p-2">

    

    <form method="post" action="{{ route('admin.regschool')}}">
            
               @csrf  
                
                <!-- Address -->
                <h3 class="heading-small text-muted mb-4">Register an Institution</h3>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">School Name</label>
                        <input name="school_name" id="input-address" class="form-control" placeholder="GSS *******"  type="text">
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">School Address</label>
                        <input name="school_address" id="input-address" class="form-control" placeholder="School Location" type="text">
                      </div>
                    </div>


                  </div>
                  <div class="row">
                    <div class="col-lg-5">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city">Laboratory Supervisor</label>
                        <input name="lab_super" type="text" id="input-city" class="form-control" placeholder="Supervisor Name">
                      </div>
                    </div>
                    <div class="col-lg-5">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Contact Email</label>
                        <input name="contact_email" type="text" id="input-country" class="form-control" placeholder="Supervisor email" >
                      </div>
                    </div>
                    
                  </div>

                  <div class="form-group">
                        <button class="btn btn-primary">Submit</button>
                       
                      </div>
                </div>
               
              </form>
       
    



        
    </div>
    @include('layouts.footers.auth')
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush