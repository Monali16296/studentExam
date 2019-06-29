@extends('layout.app')

@section('title', 'Registration')
@section('content')
<div class="row">  
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Employee id</th>
                <th>Employee name</th>                
                <th>Employee creation date</th>                
                <th>Employee updation date</th>                                
                <th>Code id</th>
                <th>Code</th>                
                <th>foreign employee id</th>                
                <th>Code creation date</th>                
                <th>Code updation date</th>
            </tr>
        </thead>
        <tbody>       
            @foreach($a as $b)
            <tr>             
                <td>{{ $b->id }}</td>
                <td>{{ $b->name }}</td>                                
                <td>{{ $b->created_at }}</td>
                <td>{{ $b->updated_at }}</td>
                <td>{{ $b->Code->id }}</td>
                <td>{{ $b->Code->code }}</td>                                
                <td>{{ $b->Code->employee_id }}</td>
                <td>{{ $b->Code->created_at }}</td>
                <td>{{ $b->Code->updated_at }}</td>
            </tr>
            @endforeach               
        </tbody>
    </table>
</div>


@endsection



