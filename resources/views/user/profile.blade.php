<?php 
    $title='LOANS';
 ?>
@extends('layouts.user')

@section('content')
   
    
    <div style="min-height: 500px;" class="container ">

    

        @if(Auth::user()->payment_status ==='unpaid')
        <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
        <div class="row" style="margin-bottom:40px;">
          <div class="col-md-8 pt-5 mx-auto">
            <p>
                <div>
                    <h1>Proceed to Pay Registration fee</h1>
                </div>
            </p>
            <input type="hidden" name="email" value="{{Auth::user()->email}}"> {{-- required --}}
            <input type="hidden" name="orderID" value="345">
            <input type="hidden" name="amount" value="500000"> {{-- required in kobo --}}
            <input type="hidden" name="quantity" value="1">
            <input type="hidden" name="currency" value="NGN">
            <input type="hidden" name="callback_url" value="{{ config('app.url') }}userPaySuccess">
            <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" >
            {{-- For other necessary things you want to add to your payload. it is optional though --}}
            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
            {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}

             <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}


            <p>
              <button class="btn btn-success btn-lg" type="submit" value="Pay Now!">
              <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
              </button>
            </p>
          </div>
        </div>
        </form>

        @else
        <h3 class="text-success text-center">Your account is active</h3>


        @if(Auth::user()->status ==='unverified')

          <h1 class="text-center">Update Profile</h1>

          <div class="col-md-10 mx-auto p-2">

                  <div class="nav-wrapper">
            <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="fa fa-user mr-2" aria-hidden="true"></i>Personal Info</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="ni ni-bell-55 mr-2"></i>Official Data</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false"><i class="ni ni-calendar-grid-58 mr-2"></i>Document Upload</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-4-tab" data-toggle="tab" href="#tabs-icons-text-4" role="tab" aria-controls="tabs-icons-text-4" aria-selected="false"><i class="ni ni-calendar-grid-58 mr-2"></i>Gurantor Data</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-5-tab" data-toggle="tab" href="#tabs-icons-text-5" role="tab" aria-controls="tabs-icons-text-5" aria-selected="false"><i class="ni ni-calendar-grid-58 mr-2"></i>Next of Kin</a>
                </li>
            </ul>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active  {{Session::get('forpinfo')}} " id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                    
                    @if($upstatus)
              
                   
                    <div class="alert alert-success" role="alert">
                        <strong>Success!</strong> Personal Info is up to date.
                     </div> 

                     @endif   
                    <form enctype="multipart/form-data" role="form" method="POST" action="{{ route('user.regPinfo') }}" >
                            @csrf
                     
                            
                           <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                            <div class="form-group{{ $errors->has('user_name') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('user_name') ? ' is-invalid' : '' }}" placeholder="{{ __('Full Name') }}" type="text" name="user_name" value="{{ Auth::user()->name }}" readonly>
                                </div>
                                @if ($errors->has('user_name'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('user_name') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('user_email') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('user_email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" type="email" name="user_email" value="{{Auth::user()->email}}" readonly>
                                </div>
                                @if ($errors->has('user_email'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('user_email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('user_phone') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('user_phone') ? ' is-invalid' : '' }}" placeholder="{{ __('Phone Number') }}" type="text" name="user_phone" value="" required autofocus>
                                </div>
                                @if ($errors->has('user_phone'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('user_phone') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                            
                            <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="gender1" name="user_gender" value="male" class="custom-control-input">
                            <label class="custom-control-label" for="gender1">Male</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="gender2" name="user_gender" value="female" class="custom-control-input">
                            <label class="custom-control-label" for="gender2">Female</label>
                            </div>
                            </div>




                            <div class="form-group">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                    </div>
                                    <input name="user_dob" class="form-control datepicker" placeholder="Date of Birth" type="text" value="">
                                </div>
                            </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                            </div>
                                            <select name="user_state" id="state" class="form-control">
                            <option value="" selected="selected" >- State of Origin -</option>
                            <option value='Abia'>Abia</option>
                            <option value='Adamawa'>Adamawa</option>
                            <option value='AkwaIbom'>AkwaIbom</option>
                            <option value='Anambra'>Anambra</option>
                            <option value='Bauchi'>Bauchi</option>
                            <option value='Bayelsa'>Bayelsa</option>
                            <option value='Benue'>Benue</option>
                            <option value='Borno'>Borno</option>
                            <option value='Cross River'>Cross River</option>
                            <option value='Delta'>Delta</option>
                            <option value='Ebonyi'>Ebonyi</option>
                            <option value='Edo'>Edo</option>
                            <option value='Ekiti'>Ekiti</option>
                            <option value='Enugu'>Enugu</option>
                            <option value='Gombe'>Gombe</option>
                            <option value='Imo'>Imo</option>
                            <option value='Jigawa'>Jigawa</option>
                            <option value='Kaduna'>Kaduna</option>
                            <option value='Kano'>Kano</option>
                            <option value='Katsina'>Katsina</option>
                            <option value='Kebbi'>Kebbi</option>
                            <option value='Kogi'>Kogi</option>
                            <option value='Kwara'>Kwara</option>
                            <option value='Lagos'>Lagos</option>
                            <option value='Nasarawa'>Nasarawa</option>
                            <option value='Niger'>Niger</option>
                            <option value='Ogun'>Ogun</option>
                            <option value='Ondo'>Ondo</option>
                            <option value='Osun'>Osun</option>
                            <option value='Oyo'>Oyo</option>
                            <option value='Plateau'>Plateau</option>
                            <option value='Rivers'>Rivers</option>
                            <option value='Sokoto'>Sokoto</option>
                            <option value='Taraba'>Taraba</option>
                            <option value='Yobe'>Yobe</option>
                            <option value='Zamfara'>Zamafara</option>
                          </select>
                                        </div>
                                       
                                </div>

                            <div class="form-group">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>

                                                      
                                      
                                      <select style="" name="user_lga" id="lga" class="form-control" required>
                                        <option>--Select Local Government Area--<option>
                                      </select>
                                  
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('user_address') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('user_address') ? ' is-invalid' : '' }}" placeholder="Home Address" type="text" name="user_address" value="" required autofocus>
                                </div>
                                @if ($errors->has('user_address'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('user_address') }}</strong>
                                    </span>
                                @endif
                            </div>


                            <div style="width: 150px; height: 150px;"  class="card-profile-imag mx-auto p-2">
                                <a href="#">
                                    <img src="{{ asset('argon') }}/img/theme/team-4-800x80.jpg ??:: {{ asset('argon') }}/img/theme/bootstrap.jpg" class="img-thumbnail shadow">
                                </a>
                            </div>

                            <div  class="form-group col-md-5 mx-auto">
                                <div  class="custom-file">
                                    <input  type="file" name="user_sign" class="custom-file-input" id="customFileLang" lang="en">
                                    <label class="custom-file-label" for="customFileLang">Upload Signature </label>
                                </div>
                           </div>

                            
                            <div class="text-center">
                                <a  class="btn btn-success mt-4">{{ __('updated successfully') }}</a>
                            </div>



                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mt-4">{{ __('submit') }}</button>
                            </div>

                            
                           

                            

                            
                        </form>

                    
                    </div>
                    <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                    @if($offstatus)
              
                   
              <div class="alert alert-success" role="alert">
                  <strong>Success!</strong> Official Data is up to date.
               </div> 

               @endif 
                    <form enctype="multipart/form-data" role="form" method="POST" action="{{ route('user.regOffData') }}">
                            @csrf
                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                            <div class="form-group{{ $errors->has('MDA') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                    </div>
<style>
    .select2-dropdow{
        width: 88%;
    }
</style>
<select name="MDA" id="e9" class="form-control select2">
<option value=""> --Select Ministry Division or Agency-- </option>
<option value="Agriculture">Agriculture</option>
<option value="Aviation">Aviation</option>
<option value="Defence">Defence</option>
<option value="Education">Education</option>
<option value="Energy">Energy</option>
<option value="Environment">Environment</option>
<option value="Federal Capital Territory">Federal Capital Territory</option>
<option value="Finance">Finance
<option value="Foreign Affairs">Foreign Affairs</option>
<option value="Health">Health</option>
<option value="Information and Culture">Information and Culture</option>
<option value="Interior">Interior</option>
<option value="Justice">Justice</option>
<option value="Labour and Productivity">Labour and Productivity</option>
<option value="Lands & Urban Development">Lands & Urban Development</option>
<option value="Mines and Steel Development">Mines and Steel Development</option>
<option value="Niger Delta">Niger Delta</option>
<option value="Petroleum Resources">Petroleum Resources</option>
<option value="Power, Works and Housing">Power, Works and Housing</option>
<option value="Science & Technology">Science & Technology</option>
<option value="Trade and Investment">Trade and Investment</option>
<option value="Transportation">Transportation</option>
<option value="Tourism, Culture & National Orientation">Tourism, Culture & National Orientation</option>
<option value="Water Resources">Water Resources</option>
<option value="Women Affairs">Women Affairs</option>
<option value="Works">Works</option>
<option value="Youth Development">Youth Development</option>

</select>


                                    
                                </div>


                               
                            </div>

                            
                           



                            <div class="form-group{{ $errors->has('division') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('division') ? ' is-invalid' : '' }}" placeholder="Section or Division" type="text" name="division" required>
                                </div>
                                @if ($errors->has('division'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('division') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('rank') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('rank') ? ' is-invalid' : '' }}" placeholder="Rank" type="text" name="rank" required>
                                </div>
                                @if ($errors->has('rank'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('rank') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('service_no') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('service_no') ? ' is-invalid' : '' }}" placeholder="Service Number" type="text" name="service_no" required>
                                </div>
                                @if ($errors->has('service_no'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('service_no') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                    </div>
                                    <input class="form-control datepicker" placeholder="Date of First Appointment" name="date_first_app" type="text" value="">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                    </div>
                                    <input class="form-control datepicker" placeholder="Date of Present Appointment" name="date_present_app" type="text" value="">
                                </div>
                            </div>


                            <div class="row">
                            
                                <div class="col-md-6">
                                
                                <div class="form-group">
                                    
                                    <select name="grade_level" class="form-control form-control-alternative" id="exampleFormControlSelect1">
                                    <option value="">--Select Grade Level--</option>
                                    <option value="6">Level 6</option>
                                    <option value="7">Level 7</option>
                                    <option value="8">Level 8</option>
                                    <option value="9">Level 9</option>
                                    <option value="10">Level 10</option>
                                    <option value="11">Level 11</option>
                                    <option value="12">Level 12</option>
                                    <option value="13">Level 13</option>
                                    <option value="14">Level 14</option>
                                    <option value="15">Level 15</option>
                                    <option value="16">Level 16</option>
                                    <option value="17">Level 17</option>
                                    <option value="18">Permanent Secetary</option>
                                    </select>
                                </div>
                                
                                </div>


                                <div class="col-md-6">
                                
                                <div class="form-group">
                                    
                                    <select name="step" class="form-control form-control-alternative" id="exampleFormControlSelect1">
                                    <option value="">--Select Step--</option>
                                    <option value="1">Step 1</option>
                                    <option value="2">Step 2</option>
                                    <option value="3">Step 3</option>
                                    <option value="4">Step 4</option>
                                    <option value="5">Step 5</option>
                                    <option value="6">Step 3</option>
                                    <option value="7">Step 4</option>
                                   
                                    </select>
                                </div>
                                
                                </div>
                            
                            </div>

                            

                            <div class="row">
                                <div class="col-md-6">
                                <div class="custom-control custom-checkbox mt-2 mb-1">
                                    <input name="pensionable" type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Confirmed in a pensionable appointment?</label>
                                </div>
                                    </div>

                                <div class="col-md-6">
                                <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" name="gazette" class="custom-file-input form-control-alternative" id="customFileLang" lang="en">
                                    <label class="custom-file-label" for="customFileLang">Gazette or Particulars</label>
                                </div>
                                </div>

                                </div>
                            </div>

                            <p>
                                Officers who have served less than 10 years should produce a surety acceptable to the Board(available on request)
                            </p>

                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                    <hr>
                                    </div>
                                    <div class="col text-center">
                                    <h3>Pension Details</h3>
                                    </div>

                                    <div class="col">
                                    <hr>
                                    </div>
                                </div>
                           </div>

                           <div class="row">
                            <div class="col-md-6">
                            
                            <div class="form-group">
                                    
                                    <select name="pen_administrator" class="form-control form-control-alternative" id="exampleFormControlSelect1">
                                    <option value="">--Select Pension Administrator--</option>
                                    <option value="AIICO Pension Managers Limited">AIICO Pension Managers Limited</option>
                                    <option value="APT Pension Fund Managers Limited">APT Pension Fund Managers Limited</option>
                                    <option value="ARM Pension Managers Limited">ARM Pension Managers Limited</option>
                                    <option value="AXA Mansard Pension Limited">AXA Mansard Pension Limited</option>
                                    <option value="CrusaderSterling Pensions Limited">CrusaderSterling Pensions Limited</option>
                                    <option value="FCMB Pensions Limited">FCMB Pensions Limited</option>
                                    <option value="Fidelity Pension Managers">Fidelity Pension Managers</option>
                                    <option value="First Guarantee Pension Limited">First Guarantee Pension Limited</option>
                                    <option value="IEI-Anchor Pension Managers Limited">IEI-Anchor Pension Managers Limited</option>
                                    <option value="Investment One Pension Managers Limited">Investment One Pension Managers Limited</option>
                                    <option value="Leadway Pensure PFA Limited">Leadway Pensure PFA Limited</option>
                                    <option value="Nigerian University Pension Management Company (NUPEMCO)">Nigerian University Pension Management Company (NUPEMCO)</option>
                                    <option value="NLPC Pension Fund Administrators Limited">NLPC Pension Fund Administrators Limited</option>
                                    <option value="NPF Pensions Limited">NPF Pensions Limited</option>
                                    <option value="OAK Pensions Limited">OAK Pensions Limited</option>
                                    <option value="Pensions Alliance Limited">Pensions Alliance Limited</option>
                                    <option value="Premium Pension Limited">Premium Pension Limited</option>
                                    <option value="Radix Pension Managers Limited">Radix Pension Managers Limited</option>
                                    <option value="Sigma Pensions Limited">Sigma Pensions Limited</option>
                                    <option value="Stanbic IBTC Pension Managers Limited">Stanbic IBTC Pension Managers Limited</option>
                                    <option value="Trustfund Pensions Limited">Trustfund Pensions Limited</option>
                                    <option value="Veritas Glanvills Pensions Limited">Veritas Glanvills Pensions Limited</option>

                                    </select>
                                </div>


                            </div>

                            <div class="col-md-6">
                            <div class="form-group{{ $errors->has('pension_id') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('pension_id') ? ' is-invalid' : '' }}" placeholder="Pension ID" type="text" name="pen_id" required>
                                </div>
                                @if ($errors->has('pension_id'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('pension_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </div>
                           
                           </div>  
                             

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mt-4">{{ __('submit') }}</button>
                            </div>
                        </form>


                    </div>
                        <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
                        

                            <form role="form" method="POST" action="{{ route('register') }}">
                            @csrf
                           <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" name="id_upload" class="custom-file-input" id="customFileLang" lang="en">
                                    <label class="custom-file-label" for="customFileLang">Upload ID card</label>
                                </div>
                           </div>

                           <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" name="doc1_upload" class="custom-file-input" id="customFileLang" lang="en">
                                    <label class="custom-file-label" for="customFileLang">Upload Document 1</label>
                                </div>
                           </div>

                           <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" name="doc2_upload" class="custom-file-input form-control-alternative" id="customFileLang" lang="en">
                                    <label class="custom-file-label" for="customFileLang">Upload Document 2</label>
                                </div>
                           </div>

                                  


                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mt-4">{{ __('submit') }}</button>
                            </div>
                            </form>



                        </div>

                    <div class="tab-pane fade show" id="tabs-icons-text-4" role="tabpanel" aria-labelledby="tabs-icons-text-4-tab">
                        <form role="form" method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                    <hr>
                                    </div>
                                    <div class="col text-center">
                                    <h3>First Guarantor</h3>
                                    </div>

                                    <div class="col">
                                    <hr>
                                    </div>
                                </div>
                           </div>
                            
                            <div class="form-group{{ $errors->has('guarantor_name') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('guarantor_name') ? ' is-invalid' : '' }}" placeholder="{{ __('Guarantor Name') }}" type="text" name="guarantor_name" value="" required autofocus>
                                </div>
                                @if ($errors->has('guarantor_name'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('guarantor_name') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                    </div>
                                <style>
                                    .select2-dropdow{
                                        width: 88%;
                                    }
                                </style>
                                <select id="e10" class="form-control select2">
                                <option value=""> --Select Ministry Division or Agency-- </option>
                                <option value="Agriculture">Agriculture</option>
                                <option value="Aviation">Aviation</option>
                                <option value="Defence">Defence</option>
                                <option value="Education">Education</option>
                                <option value="Energy">Energy</option>
                                <option value="Environment">Environment</option>
                                <option value="Federal Capital Territory">Federal Capital Territory</option>
                                <option value="Finance">Finance
                                <option value="Foreign Affairs">Foreign Affairs</option>
                                <option value="Health">Health</option>
                                <option value="Information and Culture">Information and Culture</option>
                                <option value="Interior">Interior</option>
                                <option value="Justice">Justice</option>
                                <option value="Labour and Productivity">Labour and Productivity</option>
                                <option value="Lands & Urban Development">Lands & Urban Development</option>
                                <option value="Mines and Steel Development">Mines and Steel Development</option>
                                <option value="Niger Delta">Niger Delta</option>
                                <option value="Petroleum Resources">Petroleum Resources</option>
                                <option value="Power, Works and Housing">Power, Works and Housing</option>
                                <option value="Science & Technology">Science & Technology</option>
                                <option value="Trade and Investment">Trade and Investment</option>
                                <option value="Transportation">Transportation</option>
                                <option value="Tourism, Culture & National Orientation">Tourism, Culture & National Orientation</option>
                                <option value="Water Resources">Water Resources</option>
                                <option value="Women Affairs">Women Affairs</option>
                                <option value="Works">Works</option>
                                <option value="Youth Development">Youth Development</option>

                                </select>


                                    
                                </div>


                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>


                            <div class="row">
                            
                                <div class="col-md-6">
                                
                                <div class="form-group">
                                    
                                    <select name="grade_level" class="form-control form-control-alternative" id="exampleFormControlSelect1">
                                    <option value="">--Select Grade Level--</option>
                                    <option value="6">Level 6</option>
                                    <option value="7">Level 7</option>
                                    <option value="8">Level 8</option>
                                    <option value="9">Level 9</option>
                                    <option value="10">Level 10</option>
                                    <option value="11">Level 11</option>
                                    <option value="12">Level 12</option>
                                    <option value="13">Level 13</option>
                                    <option value="14">Level 14</option>
                                    <option value="15">Level 15</option>
                                    <option value="16">Level 16</option>
                                    <option value="17">Level 17</option>
                                    <option value="18">Permanent Secetary</option>
                                    </select>
                                </div>
                                
                                </div>


                                <div class="col-md-6">
                                
                                <div class="form-group">
                                    
                                <div class="form-group{{ $errors->has('service_no') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('service_no') ? ' is-invalid' : '' }}" placeholder="{{ __('Service Number') }}" type="text" name="guarantor_name" value="" required autofocus>
                                </div>
                                @if ($errors->has('service_no'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('service_no') }}</strong>
                                    </span>
                                @endif
                                </div>


                                </div>
                                
                                </div>
                            
                            </div>

                            <div class="row">
                            
                            <div class="col-md-6">
                                
                            <div class="form-group">
                                    
                                    <div class="form-group{{ $errors->has('guarantor_phone') ? ' has-danger' : '' }}">
                                            <div class="input-group input-group-alternative mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                                </div>
                                                <input class="form-control{{ $errors->has('guarantor_phone') ? ' is-invalid' : '' }}" placeholder="{{ __('Guarantor Phone') }}" type="text" name="guarantor_name" value="" required autofocus>
                                            </div>
                                            @if ($errors->has('guarantor_phone'))
                                                <span class="invalid-feedback" style="display: block;" role="alert">
                                                    <strong>{{ $errors->first('guarantor_phone') }}</strong>
                                                </span>
                                            @endif
                                            </div>


                                            </div>
                                
                            </div>


                                <div class="col-md-6">
                                
                                <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" name="doc2_upload" class="custom-file-input form-control-alternative" id="customFileLang" lang="en">
                                    <label class="custom-file-label" for="customFileLang">Upload Signature</label>
                                </div>
                           </div>
                                        
                                </div>
                            
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" type="email" name="email" value="{{ old('email') }}" required>
                                </div>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                    <hr>
                                    </div>
                                    <div class="col text-center">
                                    <h3>Second Guarantor</h3>
                                    </div>

                                    <div class="col">
                                    <hr>
                                    </div>
                                </div>
                           </div>
                            
                            <div class="form-group{{ $errors->has('guarantor_name2') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('guarantor_name2') ? ' is-invalid' : '' }}" placeholder="{{ __('Second Guarantor Name') }}" type="text" name="guarantor_name2" value="" required autofocus>
                                </div>
                                @if ($errors->has('guarantor_name2'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('guarantor_name2') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('guarantor_min2') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                    </div>
                                <style>
                                    .select2-dropdow{
                                        width: 88%;
                                    }
                                </style>
                                <select id="e11" class="form-control select2">
                                <option value=""> --Select Ministry Division or Agency-- </option>
                                <option value="Agriculture">Agriculture</option>
                                <option value="Aviation">Aviation</option>
                                <option value="Defence">Defence</option>
                                <option value="Education">Education</option>
                                <option value="Energy">Energy</option>
                                <option value="Environment">Environment</option>
                                <option value="Federal Capital Territory">Federal Capital Territory</option>
                                <option value="Finance">Finance
                                <option value="Foreign Affairs">Foreign Affairs</option>
                                <option value="Health">Health</option>
                                <option value="Information and Culture">Information and Culture</option>
                                <option value="Interior">Interior</option>
                                <option value="Justice">Justice</option>
                                <option value="Labour and Productivity">Labour and Productivity</option>
                                <option value="Lands & Urban Development">Lands & Urban Development</option>
                                <option value="Mines and Steel Development">Mines and Steel Development</option>
                                <option value="Niger Delta">Niger Delta</option>
                                <option value="Petroleum Resources">Petroleum Resources</option>
                                <option value="Power, Works and Housing">Power, Works and Housing</option>
                                <option value="Science & Technology">Science & Technology</option>
                                <option value="Trade and Investment">Trade and Investment</option>
                                <option value="Transportation">Transportation</option>
                                <option value="Tourism, Culture & National Orientation">Tourism, Culture & National Orientation</option>
                                <option value="Water Resources">Water Resources</option>
                                <option value="Women Affairs">Women Affairs</option>
                                <option value="Works">Works</option>
                                <option value="Youth Development">Youth Development</option>

                                </select>


                                    
                                </div>


                                @if ($errors->has('guarantor_min2'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('guarantor_min2') }}</strong>
                                    </span>
                                @endif
                            </div>


                            <div class="row">
                            
                                <div class="col-md-6">
                                
                                <div class="form-group">
                                    
                                    <select name="gurantor2_gl" class="form-control form-control-alternative" id="exampleFormControlSelect1">
                                    <option value="">--Select Grade Level--</option>
                                    <option value="6">Level 6</option>
                                    <option value="7">Level 7</option>
                                    <option value="8">Level 8</option>
                                    <option value="9">Level 9</option>
                                    <option value="10">Level 10</option>
                                    <option value="11">Level 11</option>
                                    <option value="12">Level 12</option>
                                    <option value="13">Level 13</option>
                                    <option value="14">Level 14</option>
                                    <option value="15">Level 15</option>
                                    <option value="16">Level 16</option>
                                    <option value="17">Level 17</option>
                                    <option value="18">Permanent Secetary</option>
                                    </select>
                                </div>
                                
                                </div>


                                <div class="col-md-6">
                                
                                <div class="form-group">
                                    
                                <div class="form-group{{ $errors->has('guarantor2_sno') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('guarantor2_sno') ? ' is-invalid' : '' }}" placeholder="{{ __('Guarantor2 Service Number') }}" type="text" name="guarantor2_name" value="" required autofocus>
                                </div>
                                @if ($errors->has('guarantor2_sno'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('guarantor2_sno') }}</strong>
                                    </span>
                                @endif
                                </div>


                                </div>
                                
                                </div>
                            
                            </div>

                            <div class="row">
                            
                            <div class="col-md-6">
                                
                            <div class="form-group">
                                    
                                    <div class="form-group{{ $errors->has('guarantor2_phone') ? ' has-danger' : '' }}">
                                            <div class="input-group input-group-alternative mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                                </div>
                                                <input class="form-control{{ $errors->has('guarantor2_phone') ? ' is-invalid' : '' }}" placeholder="{{ __('Guarantor Phone') }}" type="text" name="guarantor_name" value="" required autofocus>
                                            </div>
                                            @if ($errors->has('guarantor2_phone'))
                                                <span class="invalid-feedback" style="display: block;" role="alert">
                                                    <strong>{{ $errors->first('guarantor2_phone') }}</strong>
                                                </span>
                                            @endif
                                            </div>


                                            </div>
                                
                            </div>


                                <div class="col-md-6">
                                
                                <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" name="guaranto2_sign" class="custom-file-input form-control-alternative" id="customFileLang" lang="en">
                                    <label class="custom-file-label" for="customFileLang">Upload Signature</label>
                                </div>
                           </div>
                                        
                                </div>
                            
                            </div>
                            
                            
                            
                                    
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mt-4">{{ __('submit') }}</button>
                            </div>
                        </form>
                    </div>

                    <div class="tab-pane fade show" id="tabs-icons-text-5" role="tabpanel" aria-labelledby="tabs-icons-text-5-tab">

                    <form role="form" method="POST" action="{{ route('register') }}">
                            @csrf

                            <div style="width: 150px; height: 150px;"  class="card-profile-imag mx-auto p-2">
                                <a href="#">
                                    <img src="{{ asset('argon') }}/img/theme/team-4-800x800.jpg" class="img-thumbnail rounded-circle">
                                </a>
                            </div>

                            <div  class="form-group col-md-5 mx-auto">
                                <div  class="custom-file">
                                    <input  type="file" name="nok_passport" class="custom-file-input" id="customFileLang" lang="en">
                                    <label class="custom-file-label" for="customFileLang">Next of kin passport </label>
                                </div>
                           </div>
                            
                            <div class="form-group{{ $errors->has('nok_name') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('nok_name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name of Next of Kin') }}" type="text" name="nok_name" value="" required autofocus>
                                </div>
                                @if ($errors->has('nok_name'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('nok_name') }}</strong>
                                    </span>
                                @endif
                            </div>


                            <div class="form-group{{ $errors->has('nok_relationship') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    
                                    <input class="form-control{{ $errors->has('nok_relationship') ? ' is-invalid' : '' }}" placeholder="Relationship" type="text" name="nok_relationship" required>
                                </div>
                                @if ($errors->has('nok_relationship'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('nok_relationship') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('nok_office_address') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    
                                    <input class="form-control{{ $errors->has('nok_office_address') ? ' is-invalid' : '' }}" placeholder="Office Address" type="text" name="nok_office_address" value="" required>
                                </div>
                                @if ($errors->has('nok_office_address'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('nok_office_address') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('nok_res_address') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('nok_res_address') ? ' is-invalid' : '' }}" placeholder="{{ __('Residential Address') }}" type="text" name="nok_res_address" value="" required autofocus>
                                </div>
                                @if ($errors->has('nok_res_address'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('nok_res_address') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('nok_occupation') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('nok_occupation') ? ' is-invalid' : '' }}" placeholder="{{ __('Next of Kin Occupation') }}" type="text" name="nok_occupation" value="" required autofocus>
                                </div>
                                @if ($errors->has('nok_occupation'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('nok_occupation') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('nok_phone') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('nok_phone') ? ' is-invalid' : '' }}" placeholder="{{ __('Phone') }}" type="text" name="nok_phone" value="" required autofocus>
                                </div>
                                @if ($errors->has('nok_phone'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('nok_phone') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="row my-4">
                                <div class="col-12">
                                    <div class="custom-control custom-control-alternative custom-checkbox">
                                        <input class="custom-control-input" id="customCheckRegister" type="checkbox">
                                        <label class="custom-control-label" for="customCheckRegister">
                                            <span class="text-muted">I <b>{{Auth::user()->name}}</b> hereby note, acknolwledge and I fully understand the conditions under which the loan will be granted to the applicant as embodied in the regularities of the board. this day <b>{{now()}}</b> <br><a href="#!">{{ __('Privacy Policy') }}</a></span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            

                            
                            
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mt-4">{{ __('submit') }}</button>
                            </div>
                        </form>

                    </div>


                </div>
            </div>
        </div>

          </div>

          @else

          <h1>Profile updated successfully</h1>

        @endif

        @endif
        
      

        
    </div>
    @include('layouts.footers.auth')
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush