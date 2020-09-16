<?php

    $title ='TITLE';
    $clasb ='bg-primary';
?>
@extends('layouts.admin')

@section('content')

 <div style="border-radius: 0;" class="card bg-gradient-dark shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col">
                                
                                <h2 class="text-white mb-0">Overview</h2>
                            </div>
                            <div class="col">
                                <ul class="nav nav-pills justify-content-end">
                                    <li class="nav-item mr-2 mr-md-0" data-toggle="chart" data-target="#chart-sales" data-update="{&quot;data&quot;:{&quot;datasets&quot;:[{&quot;data&quot;:[0, 200, 400, 300, 145, 444, 222, 654, 622]}]}}" data-prefix="" data-suffix="">
                                        <a href="#" class="nav-link py-2 px-3 active" data-toggle="tab">
                                            <span class="d-none d-md-block">Registered Accounts</span>
                                            <span class="d-md-none">M</span>
                                        </a>
                                    </li>
                                    <li class="nav-item" data-toggle="chart" data-target="#chart-sales" data-update="{&quot;data&quot;:{&quot;datasets&quot;:[{&quot;data&quot;:[0, 20, 5, 25, 10, 30, 15, 40, 40]}]}}" data-prefix="N" data-suffix="k">
                                        <a href="#" class="nav-link py-2 px-3" data-toggle="tab">
                                            <span class="d-none d-md-block">Funds Disbursed</span>
                                            <span class="d-md-none">W</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div  class="card-body">
                        <!-- Chart -->
                        <div style="height: 200px;" class="chart">


                            <!-- Chart wrapper -->
                            <canvas id="chart-sales" class="chart-canvas chartjs-render-monitor" >
                                
                            </canvas>
                        </div>
                    </div>
                </div>
    @include('layouts.headers.admin_cards')

    
    
    <div style="min-height: 300px;" class="container">
       


        <div class="container pt-3">
            
            <div class="row">
                
                <div class="col-md-9">
                    
                    <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Registered Accounts</h3>
                            </div>
                            <div class="col text-right">
                                <a href="#!" class="btn btn-sm btn-primary">See all</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">

                    
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Reg Code</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Account</th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach($user_data as $user)

                            <tr>
                                    <th scope="row">
                                       {{$loop->iteration}}
                                    </th>
                                    <td>
                                       {{$user->name}}
                                    </td>
                                    <td>
                                        {{$user->reg_code}}
                                    </td>
                                    <td>
                                        {{$user->email}}
                                    </td>
                                    <td>
                                       <a href="{{ route('admin.singprofile', $user->id)}}" class="btn btn-sm btn-primary shadow">view</a>
                                    </td>
                                </tr>

                            @endforeach
 
                            </tbody>
                        </table>
                    </div>
                </div>

                </div>
            </div>


        </div>
      

        
    </div>
    @include('layouts.footers.auth')
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush