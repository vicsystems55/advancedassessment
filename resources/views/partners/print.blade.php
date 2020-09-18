<?php 
    $title='REPORTS';
 ?>
@extends('layouts.partners')

@section('content')
   
    
    <div style="min-height: 500px;" class="container-fluid p-2">
       
    @if(Auth::user()->payment_status ==='unpaid')

      


        @else

        <h1>You have successfully paid your registration fee.</h1>
        @endif

        <div class="card">
        
            <div class="card-body">
                    <h1>Report for {{$report->user_name}} </h1>

                    <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col" class="sort" data-sort="name">s/n</th>
                            <th scope="col" class="sort" data-sort="budget">Weights</th>
                            <th scope="col" class="sort" data-sort="status">Extension</th>
                           
                            
                        
                        </tr>
                    </thead>
                    <tbody>

                       <tr>
                       <td>1</td>
                        <td>{{$report->weight1}}</td>
                        <td>{{$report->length_change1}}</td>
                       </tr>

                       <tr>
                       <td>2</td>
                        <td>{{$report->weight2}}</td>
                        <td>{{$report->length_change2}}</td>
                       </tr>

                       <tr>
                       <td>3</td>
                        <td>{{$report->weight3}}</td>
                        <td>{{$report->length_change3}}</td>
                       </tr>

                       <tr>
                       <td>4</td>
                        <td>{{$report->weight4}}</td>
                        <td>{{$report->length_change4}}</td>
                       </tr>

                       <tr>
                       <td>5</td>
                        <td>{{$report->weight5}}</td>
                        <td>{{$report->length_change5}}</td>
                       </tr>

                       <tr>
                       <td>6</td>
                        <td>{{$report->weight6}}</td>
                        <td>{{$report->length_change6}}</td>
                       </tr>

                      


                    </tbody>
                    </table>
            </div>
        </div>


       
    </div>
    @include('layouts.footers.auth')
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush