<?php 
    $title='PROFILE';
 ?>
@extends('layouts.partners')

@section('content')
   
    
    <div style="min-height: 500px;" class="container-fluid p-2">
       
    @if(Auth::user()->payment_status ==='unpaid')

        @include('partners.unpaid')


        @else

        <h1>You have successfully paid your registration fee.</h1>

        <div class="nav-wrapper">
    <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
    <style>
       
    </style>
        <li class="nav-item">
            <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="ni ni-cloud-upload-96 mr-2"></i>Company Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="ni ni-bell-55 mr-2"></i>Financial Report</a>
        </li>
        <li class="nav-item">
            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false"><i class="ni ni-calendar-grid-58 mr-2"></i>Document Upload</a>
        </li>
    </ul>
</div>
<div class="card shadow">
    <div class="card-body">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                <?php
                    $comreg = "no";   

                ?>
                @if( $comreg == "no")

                <div class="alert alert-success" role="alert">
                        <strong>Success!</strong> 
                     </div> 
                @endif

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
                                <button type="submit" class="btn btn-primary mt-4">{{ __('submit') }}</button>
                            </div>
                        </form>

                
            </div>
            <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">

            <form class="col-md-8" role="form" method="POST" action="{{ route('partners.finReport') }}">
                            @csrf
                            
                            <div class="form-group{{ $errors->has('net_income') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('net_income') ? ' is-invalid' : '' }}" placeholder="{{ __('Revenue') }}" type="text" name="name" value="{{ old('name') }}" required autofocus>
                                </div>
                                @if ($errors->has('net_income'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('net_income') }}</strong>
                                    </span>
                                @endif
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
           
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mt-4">{{ __('submit') }}</button>
                            </div>
                        </form>

               


            </div>
            <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">

            <form class="col-md-7" role="form" method="POST" action="{{ route('register') }}">
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
                                <button type="submit" class="btn btn-primary">{{ __('upload') }}</button>
                            </div>
            </form>

            <form class="col-md-7" role="form" method="POST" action="{{ route('register') }}">
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
                                <button type="submit" class="btn btn-primary">{{ __('upload') }}</button>
                            </div>
            </form>

            <form class="col-md-7" role="form" method="POST" action="{{ route('register') }}">
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
                                <button type="submit" class="btn btn-primary">{{ __('upload') }}</button>
                            </div>
            </form>

            <form class="col-md-7" role="form" method="POST" action="{{ route('register') }}">
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
                                <button type="submit" class="btn btn-primary">{{ __('upload') }}</button>
                            </div>
            </form>

            <form class="col-md-7" role="form" method="POST" action="{{ route('register') }}">
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
                                <button type="submit" class="btn btn-primary">{{ __('upload') }}</button>
                            </div>
            </form>

        

            

                
            </div>
        </div>
    </div>
</div>
        @endif



       
    </div>
    @include('layouts.footers.auth')
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush