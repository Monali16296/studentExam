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
            </tr>
        </thead>
        <tbody>     

            <tr>             
                <td>{{ $a->id }}</td>
                <td>{{ $a->name }}</td>                                
                <td>{{ $a->created_at }}</td>
                <td>{{ $a->updated_at }}</td>                
            </tr>

        </tbody>
    </table>
</div>


@endsection



