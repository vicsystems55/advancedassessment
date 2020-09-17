

<?php 
$title='REPORT';
	
 ?>
@extends('layouts.admin')

@section('content')
    
    
    <div class="container p-2">

    <a class="btn btn-primary" href="{{ route('admin.addschool')}}">Add A School</a>

        <table class="table align-items-center">

        <thead class="thead-light">
            <tr>
                <th scope="col" class="sort" data-sort="name">s/n</th>
                <th scope="col" class="sort" data-sort="budget">School Namme</th>
                <th scope="col" class="sort" data-sort="status">School Code</th>
                <th scope="col" class="sort" data-sort="status">Address</th>
                <th scope="col">More</th>
              
            </tr>
        </thead>

        <tbody class="list">

        @foreach($schools as $school)

            <tr>
                <td>
                {{$loop->iteration}}
                </td>
                <td>
                {{$school->school_name}}
                </td>
                <td>
                {{$school->school_code}}
                </td>
                <td>
                {{$school->school_address}}
                </td>
                <td>
                <a class="btn btn-primary" href="/schooldetails">More</a>
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