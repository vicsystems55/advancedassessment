

<?php 
$title='REPORT';
	
 ?>
@extends('layouts.admin')

@section('content')
    
    
    <div class="container p-2">

    <h1>Practical Variations</h1>
    <h3>Tools</h3>
    <ul>
        <li>Ruler</li>
        <li>Weights</li>
        <li>Spring</li>
    </ul>

    <h3>Formulae</h3>

    <form action="">

        <img src="/formulae/hookes.jpg" alt="">
    
        <div class="form-group">

            <input type="text" name="" id="" class="form-control" placeholder="enter value of k">
        </div>

        <div class="form-group">

            <input type="text" name="" id="" class="form-control" placeholder="enter value of g">
        </div>

        <div class="form-group">

            <button class="btn btn-primary">Submit</button>
        </div>

        

    </form>
    

        <table class="table align-items-center">

        <thead class="thead-light">
            <tr>
                <th scope="col" class="sort" data-sort="name">s/n</th>
                <th scope="col" class="sort" data-sort="budget">weight 1</th>
                <th scope="col" class="sort" data-sort="status">Weight 2</th>
                <th scope="col" class="sort" data-sort="status">Weight 3</th>
                <th scope="col" class="sort" data-sort="status">Weight 4</th>
                <th scope="col" class="sort" data-sort="status">Weight 5</th>
                <th scope="col" class="sort" data-sort="status">Weight 6</th>
                
              
              
            </tr>
        </thead>

        <tbody class="list">

                @foreach($hookedata as $data)

                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>
                        
                        {{$data->weight1}}

                        <span class="badge badge-default">
                            <?php
                                $e = ($data->weight1 * 10)/23.22;
                                echo 'value of e =' .$e;
                            ?>
                        
                        </span>

                        
                        </td>
                        <td>{{$data->weight2}}
                        <span class="badge badge-default">
                            <?php
                                $e = ($data->weight2 * 10)/23.22;
                                echo 'value of e =' .$e;
                            ?>
                        
                        </span>
                        </td>
                        <td>{{$data->weight3}}
                        <span class="badge badge-default">
                            <?php
                                $e = ($data->weight3 * 10)/23.22;
                                echo 'value of e =' .$e;
                            ?>
                        
                        </span>
                        </td>
                        <td>{{$data->weight4}}
                        <span class="badge badge-default">
                            <?php
                                $e = ($data->weight3 * 10)/23.22;
                                echo 'value of e =' .$e;
                            ?>
                        
                        </span>
                        </td>
                        <td>{{$data->weight5}}
                        <span class="badge badge-default">
                            <?php
                                $e = ($data->weight4 * 10)/23.22;
                                echo 'value of e =' .$e;
                            ?>
                        
                        </span>
                        </td>
                        <td>{{$data->weight6}}
                        <span class="badge badge-default">
                            <?php
                                $e = ($data->weight5 * 10)/23.22;
                                echo 'value of e =' .$e;
                            ?>
                        
                        </span>
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