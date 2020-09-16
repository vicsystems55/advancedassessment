<form enctype="multipart/form-data" role="form" method="POST" action="{{ route('user.regPinfo') }}" >
    @csrf

    
<input type="hidden" name="user_id" value="{{Auth::user()->id}}">
<div class="form-group{{ $errors->has('user_name') ? ' has-danger' : '' }}">
<div class="input-group input-group-flush mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
    </div>
    <input class="form-control{{ $errors->has('user_name') ? ' is-invalid' : '' }}" placeholder="{{ __('Full Name') }}" type="text" name="user_name" value="{{ $user_data->name }}" >
</div>
@if ($errors->has('user_name'))
    <span class="invalid-feedback" style="display: block;" role="alert">
        <strong>{{ $errors->first('user_name') }}</strong>
    </span>
@endif
</div>

<div class="form-group{{ $errors->has('user_email') ? ' has-danger' : '' }}">
<div class="input-group input-group-flush mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
            </div>
            <input class="form-control{{ $errors->has('user_email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" type="email" name="user_email" value="{{$user_data->email}}">
        </div>
        @if ($errors->has('user_email'))
            <span class="invalid-feedback" style="display: block;" role="alert">
                <strong>{{ $errors->first('user_email') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group{{ $errors->has('user_phone') ? ' has-danger' : '' }}">
        <div class="input-group input-group-flush mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
            </div>
            <input class="form-control{{ $errors->has('user_phone') ? ' is-invalid' : '' }}" placeholder="{{ __('Phone Number') }}" type="text" name="user_phone" value="{{ $upersonalinfo->user_phone ?? '' }}" required autofocus>
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