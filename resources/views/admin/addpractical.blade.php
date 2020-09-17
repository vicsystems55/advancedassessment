

<?php 
$title='REPORT';
	
 ?>
@extends('layouts.admin')

@section('content')
    
    
    <div class="container col-md-9 p-2">

    

    <form method="post" action="{{ route('admin.regpractical')}}">
            
               @csrf  
                
                <!-- Address -->
                <h3 class="heading-small text-muted mb-4">Add Practical Unit</h3>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Practical Title</label>
                        <input name="title" id="input-address" class="form-control" placeholder="Example Hookes Law"  type="text">
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Description</label>
                        <input name="description" id="input-address" class="form-control" placeholder="Describe a theory about this practical" type="text">
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Subject Area</label>
                        <select class="form-control" name="subject_area" id="">
                            <option value="physics">Physics</option>
                            <option value="chemistry">Chemistry</option>
                            <option value="biology">Biology</option>
                            
                        </select>
                      </div>
                    </div>


                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city">Class</label>
                        <select class="form-control" name="class" id="">
                            <option value="ss1">ss1</option>
                            <option value="ss2">ss2</option>
                            <option value="ss3">ss3</option>
                            
                        </select>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Session</label>
                        <select class="form-control" name="session" id="">
                            <option value="2020/2021">2020/2021</option>
                            <option value="2020/2022">2020/2022</option>
                           
                            
                        </select>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Term</label>
                        <select class="form-control" name="term" id="">
                            <option value="ss1">First</option>
                            <option value="ss2">Second</option>
                            <option value="ss3">Third</option>
                            
                        </select>
                      </div>
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