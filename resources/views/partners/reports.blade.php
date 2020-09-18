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
            <table class="table align-items-center">

                    <thead class="thead-light">
                        <tr>
                            <th scope="col" class="sort" data-sort="name">s/n</th>
                            <th scope="col" class="sort" data-sort="budget">Student Name</th>
                            <th scope="col" class="sort" data-sort="status">Score</th>
                            <th scope="col" class="sort" data-sort="status">Practical Performed</th>
                            <th scope="col">More</th>
                        
                        </tr>
                    </thead>

                    <tbody class="list">

                    @foreach($reports as $report)

                        <tr>
                            <td>
                            {{$loop->iteration}}
                            </td>
                            <td>
                            {{$report->user_name}}
                            </td>
                            <td>
                            {{$report->score}}
                            </td>
                            <td>
                            {{$report->user_id}}
                            </td>
                            <td>
                            
                            </td>
                        </tr>

                    @endforeach

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