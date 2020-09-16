

<?php 
$title='REPORT';
	
 ?>
@extends('layouts.admin')

@section('content')
    
    
    <div class="container p-2">
       
    <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Account</th>
                                    <th scope="col">Amount</th>
                                    
                                    
                                </tr>
                            </thead>
                            <tbody>

                            @foreach($trans_data as $data)

                            <tr>
                                    <th scope="row">
                                       {{$loop->iteration}}
                                    </th>
                                    <td>
                                        {{$data->status}}
                                    </td>

                                    <td>
                                        {{$data->customer->email}}
                                    </td>
                                   
                                    <td>
                                        {{$data->amount}}
                                    </td>

                                    
                                    
                                    <td>
                                       <a href="" class="btn btn-sm btn-primary shadow">view</a>
                                    </td>
                                </tr>

                            @endforeach
 
                            </tbody>
                        </table>



        
    </div>
    @include('layouts.footers.auth')
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush