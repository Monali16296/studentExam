@extends('layout.app')

@section('title', 'Registration')
@section('content')
<div class="row">  
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Subject Name</th>
                <th>Count</th>                
            </tr>
        </thead>
        <tbody>       
            @foreach($info as $studentInfo)
            <tr>
             
                <td>{{ $studentInfo->id }}</td>
                <td>{{ $studentInfo->name }}</td>
                <td>
                @foreach($studentInfo->subjects as $c)
                    {{ $c->student_subject_name }}
                @endforeach
                </td>
                <td>{{ $studentInfo->subjects->count() }}</td>
                
            </tr>
            @endforeach         
           
       
        </tbody>
    </table>
</div>
@endsection



