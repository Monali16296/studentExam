@extends('layout.app')

@section('title', 'Users')
@section('content')
<div class="row">  
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Pivot table user id</th> <!--pivot table means intermediate table role_user table-->
                <th>Pivot table role id</th>
                <th>Role Id</th>
                <th>Role Name</th>                
            </tr>
        </thead>
        <tbody>       
            @foreach($user->role as $roleInfo)
            <tr>             
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>            
                <td>{{ $roleInfo->pivot->user_id }}</td>
                <td>{{ $roleInfo->pivot->role_id }}</td>
                <td>{{ $roleInfo->id }}</td>
                <td>{{ $roleInfo->role_name }}</td>                
            </tr>
            @endforeach                          
        </tbody>
    </table>
</div>
@endsection



