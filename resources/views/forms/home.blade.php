@extends('layout.app')

@section('title', 'Registration')
@section('content')
<div class="row">  
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>window id</th>
                <th>window name</th>                
                <th>window's home id</th>    
                <th>window creation date</th>                
                <th>window updation date</th>                                                
            </tr>
        </thead>
        <tbody>     
            @foreach($a as $b)
            <tr>             
                <td>{{ $b->id }}</td>
                <td>{{ $b->name }}</td>                                
                <td>{{ $b->home_id }}</td>                                
                <td>{{ $b->created_at }}</td>
                <td>{{ $b->updated_at }}</td>                
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection



