<?php 
    $title='LOANS';
 ?>
@extends('layouts.user')

@section('content')
   
    
    <div style="height: 600px;" class="container ">

        @if(Auth::user()->payment_status ==='unpaid')
        

        @else



        @endif

        <h1 class="text-center display-4 mt-3">Hooke's Law Practical</h1>

            <div class="container col-md-7 p-3">

            <div class="card mb-2">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            Weights
                        </div>
                        <div class="col-md-4">
                            Change in Length
                        </div>

                        <div class="col-md-4">
                            Standard Values(only visible to admin...)
                        </div>
                    </div>
                </div>
            </div>

                <form method="post" action="{{route('user.grade_session')}}">
                    @csrf

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input class="form-control" type="text" value="{{$hookedata->weight1}}" name="weight1" id="" readonly>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <input class="form-control" type="text" name="length_change1" id="">
                            </div>
                        </div>

                        
                            <?php
                                $e = ($hookedata->weight1 * 10)/23.22;
                               
                            ?>
                        
                        

                        <div class="col-md-4">
                            <div class="form-group">
                                <input class="form-control" type="text" name="stand_change1" value="{{$e}}">
                            </div>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input class="form-control" type="text" value="{{$hookedata->weight2}}" name="weight2" id="" readonly>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <input class="form-control" type="text" name="length_change2" id="">
                            </div>
                        </div>

                        <?php
                                $e2 = ($hookedata->weight2 * 10)/23.22;
                               
                            ?>

                        <div class="col-md-4">
                            <div class="form-group">
                                <input class="form-control" type="text" name="stand_change2" value="{{$e2}}">
                            </div>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input class="form-control" type="text" value="{{$hookedata->weight3}}" name="weight3" id="" readonly>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <input class="form-control" type="text" name="length_change3" id="">
                            </div>
                        </div>

                        <?php
                                $e3 = ($hookedata->weight3 * 10)/23.22;
                               
                            ?>


                        <div class="col-md-4">
                            <div class="form-group">
                                <input class="form-control" type="text" name="stand_change3" value="{{$e3}}">
                            </div>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input class="form-control" type="text" value="{{$hookedata->weight4}}" name="weight4" id="" readonly>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <input class="form-control" type="text" name="length_change4" id="">
                            </div>
                        </div>

                        <?php
                                $e4 = ($hookedata->weight4 * 10)/23.22;
                               
                            ?>

                        <div class="col-md-4">
                            <div class="form-group">
                                <input class="form-control" type="text" name="stand_change4" value="{{$e4}}">
                            </div>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input class="form-control" type="text" value="{{$hookedata->weight5}}" name="weight5" id="" readonly>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <input class="form-control" type="text" name="length_change5" id="">
                            </div>
                        </div>

                        <?php
                                $e5 = ($hookedata->weight5 * 10)/23.22;
                               
                            ?>

                        <div class="col-md-4">
                            <div class="form-group">
                                <input class="form-control" type="text" name="stand_change5" value="{{$e5}}">
                            </div>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input class="form-control" type="text" value="{{$hookedata->weight6}}" name="weight6" id="" readonly>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <input class="form-control" type="text" name="length_change6" id="">
                            </div>
                        </div>

                            <?php
                            
                                $e6 = ($hookedata->weight6 * 10)/23.22;
                               
                            ?>

                        <div class="col-md-4">
                            <div class="form-group">
                                <input class="form-control" type="text" name="stand_change6" value="{{$e6}}">
                            </div>
                        </div>


                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>

            </div>

       
        
      

        
    </div>
    @include('layouts.footers.auth')
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush