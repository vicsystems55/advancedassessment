

<?php 
$title='REPORT';
	
 ?>
@extends('layouts.admin')

@section('content')
    
    
    <div class="container p-2">

    <a class="btn btn-primary" href="{{ route('admin.addpractical')}}">Add A Practical</a>

        <table class="table align-items-center">

        <thead class="thead-light">
            <tr>
                <th scope="col" class="sort" data-sort="name">s/n</th>
                <th scope="col" class="sort" data-sort="budget">Title</th>
                <th scope="col" class="sort" data-sort="status">Course</th>
                <th scope="col" class="sort" data-sort="status">Level</th>
                <th scope="col">More</th>
              
            </tr>
        </thead>

        <tbody class="list">

        @foreach($practicals  as $practical)
                <tr>
                    <td>
                        {{$loop->iteration}}
                    </td>
                    <td>
                        {{$practical->title}}
                    </td>

                    <td>
                        {{$practical->subject_area}}
                    </td>

                    <td>
                      {{$practical->class}}
                    </td>

                    <td>
                      <a target="_blank" class="btn btn-primary btn-sm" href="{{ route('admin.prac_det', $practical->id)}}">edit</a>
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