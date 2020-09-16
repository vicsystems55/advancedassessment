<?php 
    $title='LOANS';
 ?>
@extends('layouts.admin')

@section('content')
   
    
    <div style="min-height: 600px;" class="cont ">

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

        

        <div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url({{ asset('argon') }}/img/theme/banner.png); background-size: cover; background-position: bottom right;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">Partners Profile.</h1>
            <p class="text-white mt-0 mb-5">This is your profile page. You can see the progress you've made with your work and manage your projects or assigned tasks</p>
            <a href="{{ route('admin.partners')}}" class="btn btn-neutral">Back to Partners</a>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-4 order-xl-2">
          <div class="card card-profile">
            <img src="{{ asset('argon') }}/img/theme/profile-cover2.jpg" alt="Image placeholder" class="card-img-top">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    <img src="{{ asset('argon') }}/img/theme/team-4-800x800.jpg" class="rounded-circle">
                  </a>
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
              <div class="d-flex justify-content-between">
                <a href="#" class="btn btn-sm btn-info  mr-4 ">Connect</a>
                <a href="#" class="btn btn-sm btn-default float-right">Message</a>
              </div>
            </div>
            <div class="card-body pt-0">
              <div class="row">
                <div class="col">
                  <div class="card-profile-stats d-flex justify-content-center">
                    <div>
                      <span class="heading">22</span>
                      <span class="description">Request</span>
                    </div>
                    <div>
                      <span class="heading">10</span>
                      <span class="description">Photos</span>
                    </div>
                    <div>
                      <span class="heading">89</span>
                      <span class="description">Messages</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-center">
                <h5 class="h3">
                  Pure Web<span class="font-weight-light">, 27</span>
                </h5>
                <div class="h5 font-weight-300">
                  <i class="ni location_pin mr-2"></i>Wuse 2
                </div>
                <div class="h5 mt-4">
                  <i class="ni business_briefcase-24 mr-2"></i>Solution Manager - Creative Tim Officer
                </div>
                <div>
                  <i class="ni education_hat mr-2"></i>ICT- web
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-8 order-xl-1">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Edit profile </h3>
                </div>
                <div class="col-4 text-right">
                  <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                </div>
              </div>
            </div>
            <div class="card-body">

                <div class="accordion" id="accordionExample">

                <div class="card">
                  <div class="card-header" id="headingZero">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseZero" aria-expanded="false" aria-controls="collapseZero">
                        Investment subscription
                      </button>
                    </h5>
                  </div>
                  <div id="collapseZero" class="collapse" aria-labelledby="headingZero" data-parent="#accordionExample">
                    <div class="card-body">
                      <h3>There are no current Investment for this profile</h3>
                    </div>
                  </div>
                </div>


                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Company Profile
                      </button>
                    </h5>
                  </div>

                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">

                    <form role="form" method="POST" action="{{ route('partners.regCompanyProfile') }}">
            
            @csrf
           <div class="container ">
                <div class="row">
                <div class="col-3">
                <hr>
                </div>

                <div class="col text-center mt-3">
                    CEO/Managers/Directors
                </div>

                <div class="col-3">
                <hr>
                </div>
                </div>
           </div>

           <div class="row">
            <div class="col-md-6">
            <div class="form-group{{ $errors->has('owners_name') ? ' has-danger' : '' }}">
                <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input class="form-control{{ $errors->has('owners_name') ? ' is-invalid' : '' }}" placeholder="{{ __('Owners Name') }}" type="text" name="owners_name" value="" required >
                </div>
                @if ($errors->has('owners_name'))
                    <span class="invalid-feedback" style="display: block;" role="alert">
                        <strong>{{ $errors->first('owners_name') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('owners_phone') ? ' has-danger' : '' }}">
                <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input class="form-control{{ $errors->has('owners_phone') ? ' is-invalid' : '' }}" placeholder="{{ __('Owners Phone') }}" type="text" name="owners_phone" value="" required >
                </div>
                @if ($errors->has('owners_phone'))
                    <span class="invalid-feedback" style="display: block;" role="alert">
                        <strong>{{ $errors->first('owners_phone') }}</strong>
                    </span>
                @endif
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group{{ $errors->has('owners_name') ? ' has-danger' : '' }}">
                <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input class="form-control{{ $errors->has('owners_name') ? ' is-invalid' : '' }}" placeholder="{{ __('Co-owners Name (Optional)') }}" type="text" name="owners_name" value="" required >
                </div>
                @if ($errors->has('owners_name'))
                    <span class="invalid-feedback" style="display: block;" role="alert">
                        <strong>{{ $errors->first('owners_name') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('co-owners_phone') ? ' has-danger' : '' }}">
                <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input class="form-control{{ $errors->has('co-owners_phone') ? ' is-invalid' : '' }}" placeholder="{{ __('Co-owners Phone (Optional)') }}" type="text" name="owners_phone" value="" required >
                </div>
                @if ($errors->has('co-owners_phone'))
                    <span class="invalid-feedback" style="display: block;" role="alert">
                        <strong>{{ $errors->first('co-owners_phone') }}</strong>
                    </span>
                @endif
            </div>
            
            </div>
           </div>

            <div class="container">
                <div class="row">
                <div class="col-3">
                <hr>
                </div>

                <div class="col text-center mt-3">
                    Company Details
                </div>

                <div class="col-3">
                <hr>
                </div>
                </div>
           </div>


            <div class="form-group{{ $errors->has('business_name') ? ' has-danger' : '' }}">
                <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input class="form-control{{ $errors->has('business_name') ? ' is-invalid' : '' }}" placeholder="{{ __('Business Name') }}" type="text" name="business_name" value="{{ old('name') }}" required autofocus>
                </div>
                @if ($errors->has('business_name'))
                    <span class="invalid-feedback" style="display: block;" role="alert">
                        <strong>{{ $errors->first('business_name') }}</strong>
                    </span>
                @endif
            </div>

            

            <div class="form-group{{ $errors->has('company_address') ? ' has-danger' : '' }}">
                <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input class="form-control{{ $errors->has('company_address') ? ' is-invalid' : '' }}" placeholder="{{ __('Company Address') }}" type="text" name="name" value="" required>
                </div>
                @if ($errors->has('company_address'))
                    <span class="invalid-feedback" style="display: block;" role="alert">
                        <strong>{{ $errors->first('company_address') }}</strong>
                    </span>
                @endif
            </div>

            <div class="row">

                <div class="col-md-6">
                        <div class="form-group{{ $errors->has('cac_number') ? ' has-danger' : '' }}">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                            </div>
                            <input class="form-control{{ $errors->has('cac_number') ? ' is-invalid' : '' }}" placeholder="{{ __('CAC Number') }}" type="text" name="cac_number" required>
                        </div>
                        @if ($errors->has('cac_number'))
                            <span class="invalid-feedback" style="display: block;" role="alert">
                                <strong>{{ $errors->first('cac_number') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="col-md-6">
                
                <div class="form-group">
                    
                    <select name="business_type" class="form-control form-control-alternative" id="exampleFormControlSelect1">
            <option>--Select Industry --</option>
            <option value="Food Services / Hospitality / Hotels">Food Services / Hospitality / Hotels</option>
            <option value="Healthcare / Pharmaceutical">Healthcare / Pharmaceutical</option>
            <option value="Agriculture/ Agro Allied">Agriculture/ Agro Allied</option>
            <option value="Oil & Gas / Mining">Oil & Gas / Mining</option>
            <option value="FMCG / Conglomerate">FMCG / Conglomerate</option>
            <option value="Government">Government</option>
            <option value="Banking / Financial Services">Banking / Financial Services</option>
            <option value="NGO / Non-Profit / International Agencies">NGO / Non-Profit / International Agencies</option>
            <option value="Others">Others</option>
            <option value="legal">legal</option>
            <option value="ICT / Telecommunications">ICT / Telecommunications</option>
            <option value="Logistics / Transportation">Logistics / Transportation</option>
            <option value="Engineering / Construction">Engineering / Construction</option>
            <option value="Consulting">Consulting</option>
            <option value="Advertising / Media / Publishing">Advertising / Media / Publishing</option>
            <option value="Education Services/ Research">Education Services/ Research</option>
            <option value="Manufacturing / Production">Manufacturing / Production</option>
            <option value="Ecommerce / Retail / Wholesales">Ecommerce / Retail / Wholesales</option>
            <option value="Trade / Services">Trade / Services</option>
            <option value="Security Agencies">Security Agencies</option>
            <option value="Energy / Power">Energy / Power</option>
            <option value="Fashion / Clothings">Fashion / Clothings</option>
            <option value="Art / Design">Art / Design</option>
            <option value="Beverages / Drinks">Beverages / Drinks</option>
            <option value="Automotive / Car Services">Automotive / Car Services</option>
            <option value="Gaming / Sports">Gaming / Sports</option>
            <option value="Professional / Social Associations">Professional / Social Associations</option>
            <option value="Recruitment / HR Services">Recruitment / HR Services</option>
            <option value="Internet / Software">Internet / Software</option>
            <option value="Travels / Tourism">Travels / Tourism</option>
            <option value="Religious Bodies / Associations">Religious Bodies / Associations</option>
            <option value="Nutrition / Confectionery / Foods">Nutrition / Confectionery / Foods</option>
            <option value="Waste Management">Waste Management</option>
            <option value="Real Estate / Property / Facilities Management">Real Estate / Property / Facilities Management</option>
            
                   
                    </select>
                </div>
                </div>
            
            </div>
            
            

            <div class="row">
                <div class="col-md-6">

                        <div class="form-group{{ $errors->has('company_phone') ? ' has-danger' : '' }}">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                </div>
                                <input class="form-control{{ $errors->has('company_phone') ? ' is-invalid' : '' }}" placeholder="Company Phone" type="text" name="company_phone" required>
                            </div>
                            @if ($errors->has('company_phone'))
                                <span class="invalid-feedback" style="display: block;" role="alert">
                                    <strong>{{ $errors->first('company_phone') }}</strong>
                                </span>
                            @endif
                        </div>
                    
                </div>

                <div class="col-md-6">

                        <div class="form-group{{ $errors->has('company_phone2') ? ' has-danger' : '' }}">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                </div>
                                <input class="form-control{{ $errors->has('company_phone2') ? ' is-invalid' : '' }}" placeholder="Company Phone 2" type="text" name="company_phone2" >
                            </div>
                            @if ($errors->has('company_phone2'))
                                <span class="invalid-feedback" style="display: block;" role="alert">
                                    <strong>{{ $errors->first('company_phone2') }}</strong>
                                </span>
                            @endif
                        </div>
                    
                </div>
            </div>
            <div class="row">
                        
                <div class="col-md-6">
                <div class="form-group">
                        
                        <select name="grade_level" class="form-control form-control-alternative" id="exampleFormControlSelect1">
                        <option value="">--Number of Employee--</option>
                        <option value="under 10">Under 10</option>
                        <option value="10 - 15">10 - 15</option>
                        <option value="above 15">15 -- above</option>
                        
                    
                        </select>
                    </div>                
                </div>

                <div class="col-md-6">
                <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                    </div>
                    <input class="form-control datepicker" placeholder="Date Established" name="date_established" type="text" value="">
                </div>
            </div>
                </div>
            </div>
               
            
            
            
            <div class="text-center">
                <button type="submit" class="btn btn-primary mt-4">{{ __('update') }}</button>
            </div>
        </form>
                  
                    </div>
                  </div>
                </div>

                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Financial Report
                      </button>
                    </h5>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>

                <div class="card">
                  <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Document Upload
                      </button>
                    </h5>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">

                          <form class="" role="form" method="POST" action="{{ route('register') }}">
                                  @csrf
                                <div class="form-group">
                                      <div class="custom-file">
                                          <input type="file" name="id_upload" class="custom-file-input" id="customFileLang" lang="en">
                                          <label class="custom-file-label" for="customFileLang">CAC Business Registration Certificate</label>
                                      </div>
                                      <button type="button" class="btn btn-default btn-sm float-right" data-container="body" data-toggle="popover" data-placement="top" data-content="It is mandatory for every business to register their company with the Corporate Affairs Commission (CAC). The agency is responsible for the registration of an organization that is willing to legally conduct businesses anywhere in Nigeria.">
                                      <i class="fa fa-info-circle" aria-hidden="true"></i>
                                      </button>
                                </div>

                                  <div class="text-center mt--2 pb-5">
                                      <button type="submit" class="btn btn-primary">{{ __('update') }}</button>
                                  </div>
                  </form>

                  <form class="" role="form" method="POST" action="{{ route('register') }}">
                                  @csrf
                                <div class="form-group">
                                      <div class="custom-file">
                                          <input type="file" name="id_upload" class="custom-file-input" id="customFileLang" lang="en">
                                          <label class="custom-file-label" for="customFileLang">NSITF Compliance Certificate</label>
                                      </div>
                                      <button type="button" class="btn btn-default btn-sm float-right" data-container="body" data-toggle="popover" data-placement="top" data-content="The National Social Insurance Trust Fund – NSITF Compliance certificate is one of the major documents required by any contractors or supplier dealing with the Federal government of Nigeria.
      The National Social Insurance Trust Fund (NSITF) is a Social Insurance Scheme designed to provide compensation to employees who suffer from occupational diseases. It also ensures compensation to the employee next-of-kin in case of death in the course of work. To obtain the NSITF certificate, there will be a physical assessment of your employees’ wages by NSITF in order to ascertain the amount you will for per month multiply by 12 months.">
                                      <i class="fa fa-info-circle" aria-hidden="true"></i>
                                      </button>
                                </div>

                                  <div class="text-center mt--2 pb-5">
                                      <button type="submit" class="btn btn-primary">{{ __('update') }}</button>
                                  </div>
                  </form>

                  <form class="" role="form" method="POST" action="{{ route('register') }}">
                                  @csrf
                                <div class="form-group">
                                      <div class="custom-file">
                                          <input type="file" name="id_upload" class="custom-file-input" id="customFileLang" lang="en">
                                          <label class="custom-file-label" for="customFileLang">ITF Certificate</label>
                                      </div>
                                      <button type="button" class="btn btn-default btn-sm float-right" data-container="body" data-toggle="popover" data-placement="top" data-content="The Industrial Training Fund ITF Compliance Certificate is a major document required if you are applying for tenders, contracts in any Federal government MDA’s. Every employer having either 5 or more employees in its establishment or having less than 5 employees but with a Turnover of N50m and above per year, shall, in respect of each calendar year and or the prescribed date, contribute to the Fund one percent of its total annual payroll. (Contact us if you have not transacted up to N50m and have less than 5 employees).">
                                      <i class="fa fa-info-circle" aria-hidden="true"></i>
                                      </button>
                                </div>

                                  <div class="text-center mt--2 pb-5">
                                      <button type="submit" class="btn btn-primary">{{ __('update') }}</button>
                                  </div>
                  </form>

                  <form class="" role="form" method="POST" action="{{ route('register') }}">
                                  @csrf
                                <div class="form-group">
                                      <div class="custom-file">
                                          <input type="file" name="id_upload" class="custom-file-input" id="customFileLang" lang="en">
                                          <label class="custom-file-label" for="customFileLang">PENCOM Compliance Certificate</label>
                                      </div>
                                      <button type="button" class="btn btn-default btn-sm float-right" data-container="body" data-toggle="popover" data-placement="top" data-content="National Pension Commission (PenCom) compliance certificate is compulsory for employers of labour who wish to bid or solicit for any Federal government contract or business from any Federal Government Ministries Departments and Agencies (MDA). All organizations must provide proof of compliance with the provisions of the Pension Reform Act, 2014 (PRA 2014) by obtaining the compliance certificate.">
                                      <i class="fa fa-info-circle" aria-hidden="true"></i>
                                      </button>
                                </div>

                                  <div class="text-center mt--2 pb-5">
                                      <button type="submit" class="btn btn-primary">{{ __('update') }}</button>
                                  </div>
                  </form>

                  <form class="" role="form" method="POST" action="{{ route('register') }}">
                                  @csrf
                                <div class="form-group">
                                      <div class="custom-file">
                                          <input type="file" name="id_upload" class="custom-file-input" id="customFileLang" lang="en">
                                          <label class="custom-file-label" for="customFileLang">BPP Federal Contractor Certificate</label>
                                      </div>
                                      <button type="button" class="btn btn-default btn-sm float-right" data-container="body" data-toggle="popover" data-placement="top" data-content="The Bureau of Public Procurement (BPP) is the agency responsible for registering companies as Contractors, suppliers, consultants or service providers with the Federal government of Nigeria. Their responsibility is to process any procurement involving the Federal government agencies only and does not extend to the state government. It is mandatory you obtain CAC, ITF, NSITF and PENCOM (which can be waved) before proceeding with BPP registration. Your company Tax Clearance certificate will be required.">
                                      <i class="fa fa-info-circle" aria-hidden="true"></i>
                                      </button>
                                </div>

                                  <div class="text-center mt--2 pb-5">
                                      <button type="submit" class="btn btn-primary">{{ __('update') }}</button>
                                  </div>
                  </form>

                     </div>
                  </div>
                </div>


              </div>
            
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
     
    </div>




        

        @endif
        
      

        
    </div>
    @include('layouts.footers.auth')
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush