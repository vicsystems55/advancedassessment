<?php 
    $title='DASHBOARD';
 ?>
@extends('layouts.user')

@section('content')
    @include('layouts.headers.user_cards')



    
    
    <div style="height: 500px;" class="container">

   

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

            <table class="table mx-auto col-md-8">
            
              <thead>
              
                <td class="text-center">Outstanding</td>
                <td class="text-center">Next Due Date</td>
              </thead>

              <tr>
              
                <td class="text-center">
                  ---
                </td>
                <td class="text-center">
                  ---
                </td>
              </tr>
            </table>

            <div class="container text-center">
              <a class="btn btn-dark shadow text-center mx-auto" href="">View Loan History</a>
            </div>


            @endif


        
      

       
    </div>
     @include('layouts.footers.auth')
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush