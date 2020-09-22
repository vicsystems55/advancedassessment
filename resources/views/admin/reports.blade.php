

<?php 
$title='REPORT';
	
 ?>
@extends('layouts.admin')

@section('content')
    
    
    <div class="container p-2">


    <table class="table align-items-center">

        <thead class="thead-light">
            <tr>
                <th scope="col" class="sort" data-sort="name">s/n</th>
                <th scope="col" class="sort" data-sort="budget">Experiment 1</th>
                <th scope="col" class="sort" data-sort="budget">Experiment 2</th>
                <th scope="col" class="sort" data-sort="budget">Experiment 3</th>
                <th scope="col" class="sort" data-sort="budget">Experiment 4</th>
                <th scope="col" class="sort" data-sort="budget">Experiment 5</th>
                <th scope="col" class="sort" data-sort="budget">Experiment 6</th>
                
                
                <th scope="col">More</th>
            
            </tr>
        </thead>

        <tbody class="list">

            @foreach($grade_data as $data)

                <tr>
                    <td>
                        {{ $data->user_name}}
                    </td>
                    <td>
                   
                    Weight1: {{ $data->weight1}} <br>
                   Supplied 'e': {{ $data->length_change1}} <br>
                   deviation: {{ $data->diff1}}
                    </td>

                    <td>
                   
                    {{ $data->weight2}} <br>
                    {{ $data->length_change2}} <br>
                    {{ $data->diff2}}
                    </td>

                    <td>
                   
                    {{ $data->weight3}} <br>
                    {{ $data->length_change3}} <br>
                    {{ $data->diff3}}
                    </td>

                    <td>
                    
                    {{ $data->weight4}} <br>
                    {{ $data->length_change4}} <br>
                    {{ $data->diff4}}
                    </td>

                    <td>
                   
                    {{ $data->weight4}} <br>
                    {{ $data->length_change4}} <br>
                    {{ $data->diff4}}
                    </td>

                    <td>
                    
                    {{ $data->weight5}} <br>
                    {{ $data->length_change5}} <br>
                    {{ $data->diff5}}
                    </td>

                    <td>
                    
                    {{ $data->weight6}} <br>
                    {{ $data->length_change6}} <br>
                    {{ $data->diff6}}
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