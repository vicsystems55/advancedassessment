

<?php 
$title='REPORT';
	
 ?>
@extends('layouts.admin')

@section('content')
    
    
    <div class="container p-2">

    <h1>Practical Variations</h1>
    <h3>Equipments</h3>
    <ul>
        <li>Pipette</li>
        <li>Indicator</li>
        
    </ul>

        <table class="table align-items-center">

        <thead class="thead-light">
            <tr>
                <th scope="col" class="sort" data-sort="name">s/n</th>
                <th scope="col" class="sort" data-sort="budget">Acid</th>
                <th scope="col" class="sort" data-sort="status">Base</th>
                <th scope="col" class="sort" data-sort="status">Indicator</th>
              
                
              
              
            </tr>
        </thead>

        <tbody class="list">

               

       

        </tbody>
        

        </table>
       
    



        
    </div>
    @include('layouts.footers.auth')
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush