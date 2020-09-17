<?php 
    $title='LOANS';
 ?>
@extends('layouts.user')

@section('content')
   
    
    <div style="height: 500px;" class="container ">

        @if(Auth::user()->payment_status ==='unpaid')
        

        @else



        @endif

        <h1 class="text-center display-4 mt-3">Available Practicals</h1>

            <div class="container p-3">
            
            <div class="row">
            @foreach($practicals as $practical)
                <div class="col-md-4 mx-auto">

                    <div class="card shadow">
                        <div class="card-body">
                        <h4>{{ $practical->title}}</h4>
                        <p>{{ $practical->description}}</p>

                        <p class="text-muted">Class: {{ $practical->class}}</p>
                        <p class="text-muted">Session: {{ $practical->session}}</p>
                        <p class="text-muted">Term: {{ $practical->term}}</p>

                        <a class="btn btn-primary btn-sm" href="{{ route('user.start_session')}}">Start Session</a>
                        
                        </div>
                    </div>
                
                </div>
                @endforeach
            </div>
            </div>

       
        
      

        
    </div>
    @include('layouts.footers.auth')
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush