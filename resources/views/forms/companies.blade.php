@extends('layout.app')

@section('title', 'Registration')
@section('content')
<div class="row">  
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Co Id</th>
                <th>Co Name</th>                
                <th>Co manager Name</th>                
                <th>Co created_at</th>                
                <th>Co updated_at</th>                
            </tr>
        </thead>
        <tbody>       
            @foreach($company as $co)
            <tr>             
                <td>{{ $co->id }}</td>
                <td>{{ $co->name }}</td>                
                <td>{{ $co->manager->name }}</td>
                <td>{{ $co->created_at }}</td>
                <td>{{ $co->updated_at }}</td>
            </tr>
            @endforeach               
            </tbody>
    </table>
</div>
@endsection



