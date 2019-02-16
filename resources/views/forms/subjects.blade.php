@extends('layout.app')

@section('title', 'subjects')
@section('content')
<div class="row">  
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Subject Id</th>
                <th>Subject Name</th>
                <th>Student Id</th>
                <th>Student Name</th>                
            </tr>
        </thead>
        <tbody>       
            @foreach($info as $subject)
            <tr>             
                <td>{{ $subject->id }}</td>
                <td>{{ $subject->student_subject_name }}</td>               
                <td>{{ $subject->student->id }}</td>
                <td>{{ $subject->student->name }}</td>
            </tr>
            @endforeach                  
        </tbody>
    </table>
</div>
@endsection



