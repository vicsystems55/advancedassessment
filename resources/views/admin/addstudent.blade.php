

<?php 
$title='REPORT';
	
 ?>
@extends('layouts.admin')

@section('content')
    
    
    <div class="container p-2">

    <a class="btn btn-primary" href="{{ route('admin.addstudent')}}">Add A Student</a>

        <table class="table align-items-center">

        <thead class="thead-light">
            <tr>
                <th scope="col" class="sort" data-sort="name">s/n</th>
                <th scope="col" class="sort" data-sort="budget">Student Name</th>
                <th scope="col" class="sort" data-sort="status">School Code</th>
                <th scope="col" class="sort" data-sort="status">Admin No.</th>
                <th scope="col">More</th>
              
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