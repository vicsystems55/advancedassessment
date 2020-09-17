

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
                        <td>{{$data->weight1}}</td>
                        <td>{{$data->weight2}}</td>
                        <td>{{$data->weight3}}</td>
                        <td>{{$data->weight4}}</td>
                        <td>{{$data->weight5}}</td>
                        <td>{{$data->weight6}}</td>
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